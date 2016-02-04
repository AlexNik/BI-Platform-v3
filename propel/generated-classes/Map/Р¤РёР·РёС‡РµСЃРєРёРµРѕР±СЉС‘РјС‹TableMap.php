<?php

namespace Map;

use \Физическиеобъёмы;
use \ФизическиеобъёмыQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'ФизическиеОбъёмы' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ФизическиеобъёмыTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ФизическиеобъёмыTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'ФизическиеОбъёмы';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Физическиеобъёмы';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Физическиеобъёмы';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    const COL_ID = 'ФизическиеОбъёмы.id';

    /**
     * the column name for the Дата field
     */
    const COL_ДАТА = 'ФизическиеОбъёмы.Дата';

    /**
     * the column name for the УчастокРабот field
     */
    const COL_УЧАСТОКРАБОТ = 'ФизическиеОбъёмы.УчастокРабот';

    /**
     * the column name for the ТипРабот field
     */
    const COL_ТИПРАБОТ = 'ФизическиеОбъёмы.ТипРабот';

    /**
     * the column name for the План field
     */
    const COL_ПЛАН = 'ФизическиеОбъёмы.План';

    /**
     * the column name for the Факт field
     */
    const COL_ФАКТ = 'ФизическиеОбъёмы.Факт';

    /**
     * the column name for the ПричинаОтставания field
     */
    const COL_ПРИЧИНАОТСТАВАНИЯ = 'ФизическиеОбъёмы.ПричинаОтставания';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Дата', 'Участокработ', 'Типработ', 'План', 'Факт', 'Причинаотставания', ),
        self::TYPE_CAMELNAME     => array('id', '�ата', '�частокработ', '�ипработ', '�лан', '�акт', '�ричинаотставания', ),
        self::TYPE_COLNAME       => array(ФизическиеобъёмыTableMap::COL_ID, ФизическиеобъёмыTableMap::COL_ДАТА, ФизическиеобъёмыTableMap::COL_УЧАСТОКРАБОТ, ФизическиеобъёмыTableMap::COL_ТИПРАБОТ, ФизическиеобъёмыTableMap::COL_ПЛАН, ФизическиеобъёмыTableMap::COL_ФАКТ, ФизическиеобъёмыTableMap::COL_ПРИЧИНАОТСТАВАНИЯ, ),
        self::TYPE_FIELDNAME     => array('id', 'Дата', 'УчастокРабот', 'ТипРабот', 'План', 'Факт', 'ПричинаОтставания', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Дата' => 1, 'Участокработ' => 2, 'Типработ' => 3, 'План' => 4, 'Факт' => 5, 'Причинаотставания' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, '�ата' => 1, '�частокработ' => 2, '�ипработ' => 3, '�лан' => 4, '�акт' => 5, '�ричинаотставания' => 6, ),
        self::TYPE_COLNAME       => array(ФизическиеобъёмыTableMap::COL_ID => 0, ФизическиеобъёмыTableMap::COL_ДАТА => 1, ФизическиеобъёмыTableMap::COL_УЧАСТОКРАБОТ => 2, ФизическиеобъёмыTableMap::COL_ТИПРАБОТ => 3, ФизическиеобъёмыTableMap::COL_ПЛАН => 4, ФизическиеобъёмыTableMap::COL_ФАКТ => 5, ФизическиеобъёмыTableMap::COL_ПРИЧИНАОТСТАВАНИЯ => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'Дата' => 1, 'УчастокРабот' => 2, 'ТипРабот' => 3, 'План' => 4, 'Факт' => 5, 'ПричинаОтставания' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('ФизическиеОбъёмы');
        $this->setPhpName('Физическиеобъёмы');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Физическиеобъёмы');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Дата', 'Дата', 'DATE', true, null, null);
        $this->addColumn('УчастокРабот', 'Участокработ', 'INTEGER', true, null, null);
        $this->addColumn('ТипРабот', 'Типработ', 'INTEGER', true, null, null);
        $this->addColumn('План', 'План', 'REAL', false, 24, null);
        $this->addColumn('Факт', 'Факт', 'REAL', false, 24, null);
        $this->addColumn('ПричинаОтставания', 'Причинаотставания', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return null;
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return '';
    }
    
    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? ФизическиеобъёмыTableMap::CLASS_DEFAULT : ФизическиеобъёмыTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Физическиеобъёмы object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ФизическиеобъёмыTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ФизическиеобъёмыTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ФизическиеобъёмыTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ФизическиеобъёмыTableMap::OM_CLASS;
            /** @var Физическиеобъёмы $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ФизическиеобъёмыTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ФизическиеобъёмыTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ФизическиеобъёмыTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Физическиеобъёмы $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ФизическиеобъёмыTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ID);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ДАТА);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_УЧАСТОКРАБОТ);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ТИПРАБОТ);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ПЛАН);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ФАКТ);
            $criteria->addSelectColumn(ФизическиеобъёмыTableMap::COL_ПРИЧИНАОТСТАВАНИЯ);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Дата');
            $criteria->addSelectColumn($alias . '.УчастокРабот');
            $criteria->addSelectColumn($alias . '.ТипРабот');
            $criteria->addSelectColumn($alias . '.План');
            $criteria->addSelectColumn($alias . '.Факт');
            $criteria->addSelectColumn($alias . '.ПричинаОтставания');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(ФизическиеобъёмыTableMap::DATABASE_NAME)->getTable(ФизическиеобъёмыTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ФизическиеобъёмыTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ФизическиеобъёмыTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ФизическиеобъёмыTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Физическиеобъёмы or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Физическиеобъёмы object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ФизическиеобъёмыTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Физическиеобъёмы) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The Физическиеобъёмы object has no primary key');
        }

        $query = ФизическиеобъёмыQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ФизическиеобъёмыTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ФизическиеобъёмыTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the ФизическиеОбъёмы table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ФизическиеобъёмыQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Физическиеобъёмы or Criteria object.
     *
     * @param mixed               $criteria Criteria or Физическиеобъёмы object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ФизическиеобъёмыTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Физическиеобъёмы object
        }


        // Set the correct dbName
        $query = ФизическиеобъёмыQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ФизическиеобъёмыTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ФизическиеобъёмыTableMap::buildTableMap();
