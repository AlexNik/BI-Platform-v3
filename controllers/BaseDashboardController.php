<?php

namespace app\controllers;

use app\controllers\classes\Filter;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\helpers\StringHelper;
use yii\web\Controller;
use yii\web\View;

class BaseDashboardController extends Controller
{

    /**
     * @var Filter[]
     */
    private $_filters = [];

    const FILTER_GET_TAG = 'filter_';
    const FILTER_GET_POSSIBLE_VALUES_SUFFIX = '_all';

    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        $get = Yii::$app->request->get();

        $filterParams = array_filter($get, function($val, $key){
            return StringHelper::startsWith($key, self::FILTER_GET_TAG);
        },ARRAY_FILTER_USE_BOTH);

//        $filterNames = array_map(function($val){
//            return substr($val, strlen(self::FILTER_GET_TAG));
//        }, $filterParams);

        foreach ($filterParams as $key => $value) {
            $this->addFilter($key, $value);
        }

        return true;
    }

    /**
     * @param $name
     * @return Filter
     */
    public function getFilter($name)
    {

        if (!ArrayHelper::keyExists($name, $this->_filters))
            $this->addFilter($name);

        return $this->_filters[$name];
    }

    public function setFilters($filters)
    {

    }

    public function afterAction($action, $result)
    {
        $result = parent::afterAction($action, $result);

        return $result;
    }

    public function renderSimple($view, $params = [])
    {
        foreach ($this->_filters as $name => $filter) {
            $params[$name] = $filter->selectedValues;
            $params[$name.self::FILTER_GET_POSSIBLE_VALUES_SUFFIX] = $filter->possibleValues;
        }

        return parent::render($view, $params);
    }

    private function addFilter($name, $selectedValues = null)
    {
        $this->_filters[$name] = new Filter($selectedValues);
    }

    protected function injectFiltersInView(&$params)
    {
        foreach ($this->_filters as $name => $filter) {
            $params[$name] = $filter->selectedValues;
            $params[$name.self::FILTER_GET_POSSIBLE_VALUES_SUFFIX] = $filter->possibleValues;
        }
        $this->view->params = $params;
    }

    protected function injectJsVars(&$params)
    {
        $this->view->registerJs("var template = ".Json::encode($params,JSON_PRETTY_PRINT).";", View::POS_END, 'template');
    }

    public function render($view, $params = [])
    {
        $this->beforeRender($params);
        return parent::render($view, $params);
    }

    private function beforeRender(&$params)
    {
        $this->injectFiltersInView($params);
        $this->injectJsVars($params);
    }

}