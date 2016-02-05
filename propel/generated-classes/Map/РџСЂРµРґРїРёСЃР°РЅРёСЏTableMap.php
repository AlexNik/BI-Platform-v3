<?php

namespace Map;

use \Предписания;
use \ПредписанияQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'Предписания' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class ПредписанияTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ПредписанияTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'Предписания';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Предписания';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Предписания';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id field
     */
    const COL_ID = 'Предписания.id';

    /**
     * the column name for the Контролирующий_орган field
     */
    const COL_КОНТРОЛИРУЮЩИЙ_ОРГАН = 'Предписания.Контролирующий_орган';

    /**
     * the column name for the Подрядчик field
     */
    const COL_ПОДРЯДЧИК = 'Предписания.Подрядчик';

    /**
     * the column name for the Дата_выдачи field
     */
    const COL_ДАТА_ВЫДАЧИ = 'Предписания.Дата_выдачи';

    /**
     * the column name for the Плановая_дата_устранения field
     */
    const COL_ПЛАНОВАЯ_ДАТА_УСТРАНЕНИЯ = 'Предписания.Плановая_дата_устранения';

    /**
     * the column name for the Фактическая_дата_устранения field
     */
    const COL_ФАКТИЧЕСКАЯ_ДАТА_УСТРАНЕНИЯ = 'Предписания.Фактическая_дата_устранения';

    /**
     * the column name for the Тип_замечания field
     */
    const COL_ТИП_ЗАМЕЧАНИЯ = 'Предписания.Тип_замечания';

    /**
     * the column name for the Проект field
     */
    const COL_ПРОЕКТ = 'Предписания.Проект';

    /**
     * the column name for the Статус_заявки_завершение field
     */
    const COL_СТАТУС_ЗАЯВКИ_ЗАВЕРШЕНИЕ = 'Предписания.Статус_заявки_завершение';

    /**
     * the column name for the Статус_заявки_просрочка field
     */
    const COL_СТАТУС_ЗАЯВКИ_ПРОСРОЧКА = 'Предписания.Статус_заявки_просрочка';

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
        self::TYPE_PHPNAME       => array('Id', 'контролирующийорган', 'подрядчик', 'датавыдачи', 'плановаядатаустранения', 'фактическаядатаустранения', 'типзамечания', 'проект', 'статусзаявкизавершение', 'статусзаявкипросрочка', ),
        self::TYPE_CAMELNAME     => array('id', '�онтролирующийорган', '�одрядчик', '�атавыдачи', '�лановаядатаустранения', '�актическаядатаустранения', '�ипзамечания', '�роект', '�татусзаявкизавершение', '�татусзаявкипросрочка', ),
        self::TYPE_COLNAME       => array(ПредписанияTableMap::COL_ID, ПредписанияTableMap::COL_КОНТРОЛИРУЮЩИЙ_ОРГАН, ПредписанияTableMap::COL_ПОДРЯДЧИК, ПредписанияTableMap::COL_ДАТА_ВЫДАЧИ, ПредписанияTableMap::COL_ПЛАНОВАЯ_ДАТА_УСТРАНЕНИЯ, ПредписанияTableMap::COL_ФАКТИЧЕСКАЯ_ДАТА_УСТРАНЕНИЯ, ПредписанияTableMap::COL_ТИП_ЗАМЕЧАНИЯ, ПредписанияTableMap::COL_ПРОЕКТ, ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ЗАВЕРШЕНИЕ, ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ПРОСРОЧКА, ),
        self::TYPE_FIELDNAME     => array('id', 'Контролирующий_орган', 'Подрядчик', 'Дата_выдачи', 'Плановая_дата_устранения', 'Фактическая_дата_устранения', 'Тип_замечания', 'Проект', 'Статус_заявки_завершение', 'Статус_заявки_просрочка', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'контролирующийорган' => 1, 'подрядчик' => 2, 'датавыдачи' => 3, 'плановаядатаустранения' => 4, 'фактическаядатаустранения' => 5, 'типзамечания' => 6, 'проект' => 7, 'статусзаявкизавершение' => 8, 'статусзаявкипросрочка' => 9, ),
        self::TYPE_CAMELNAME     => array('id' => 0, '�онтролирующийорган' => 1, '�одрядчик' => 2, '�атавыдачи' => 3, '�лановаядатаустранения' => 4, '�актическаядатаустранения' => 5, '�ипзамечания' => 6, '�роект' => 7, '�татусзаявкизавершение' => 8, '�татусзаявкипросрочка' => 9, ),
        self::TYPE_COLNAME       => array(ПредписанияTableMap::COL_ID => 0, ПредписанияTableMap::COL_КОНТРОЛИРУЮЩИЙ_ОРГАН => 1, ПредписанияTableMap::COL_ПОДРЯДЧИК => 2, ПредписанияTableMap::COL_ДАТА_ВЫДАЧИ => 3, ПредписанияTableMap::COL_ПЛАНОВАЯ_ДАТА_УСТРАНЕНИЯ => 4, ПредписанияTableMap::COL_ФАКТИЧЕСКАЯ_ДАТА_УСТРАНЕНИЯ => 5, ПредписанияTableMap::COL_ТИП_ЗАМЕЧАНИЯ => 6, ПредписанияTableMap::COL_ПРОЕКТ => 7, ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ЗАВЕРШЕНИЕ => 8, ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ПРОСРОЧКА => 9, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'Контролирующий_орган' => 1, 'Подрядчик' => 2, 'Дата_выдачи' => 3, 'Плановая_дата_устранения' => 4, 'Фактическая_дата_устранения' => 5, 'Тип_замечания' => 6, 'Проект' => 7, 'Статус_заявки_завершение' => 8, 'Статус_заявки_просрочка' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $this->setName('Предписания');
        $this->setPhpName('Предписания');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Предписания');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('Контролирующий_орган', 'контролирующийорган', 'INTEGER', 'Контролирующие_органы', 'id', true, null, null);
        $this->addForeignKey('Подрядчик', 'подрядчик', 'INTEGER', 'Подрядчики_предписания', 'id', true, null, null);
        $this->addForeignKey('Дата_выдачи', 'датавыдачи', 'DATE', 'Календарь', 'Дата', true, null, null);
        $this->addForeignKey('Плановая_дата_устранения', 'плановаядатаустранения', 'DATE', 'Календарь', 'Дата', true, null, null);
        $this->addForeignKey('Фактическая_дата_устранения', 'фактическаядатаустранения', 'DATE', 'Календарь', 'Дата', false, null, null);
        $this->addForeignKey('Тип_замечания', 'типзамечания', 'INTEGER', 'Типы_замечаний', 'id', true, null, null);
        $this->addForeignKey('Проект', 'проект', 'INTEGER', 'Проекты', 'id', true, null, null);
        $this->addForeignKey('Статус_заявки_завершение', 'статусзаявкизавершение', 'INTEGER', 'Статусы_заявки_завершение', 'id', false, null, null);
        $this->addForeignKey('Статус_заявки_просрочка', 'статусзаявкипросрочка', 'INTEGER', 'Статусы_заявки_просрочка', 'id', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('КалендарьRelatedByдатавыдачи', '\\Календарь', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Дата_выдачи',
    1 => ':Дата',
  ),
), null, null, null, false);
        $this->addRelation('КонтролирующиеОрганы', '\\КонтролирующиеОрганы', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Контролирующий_орган',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('КалендарьRelatedByплановаядатаустранения', '\\Календарь', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Плановая_дата_устранения',
    1 => ':Дата',
  ),
), null, null, null, false);
        $this->addRelation('ПодрядчикиПредписания', '\\ПодрядчикиПредписания', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Подрядчик',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('Проекты', '\\Проекты', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Проект',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('СтатусыЗаявкиЗавершение', '\\СтатусыЗаявкиЗавершение', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Статус_заявки_завершение',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('СтатусыЗаявкиПросрочка', '\\СтатусыЗаявкиПросрочка', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Статус_заявки_просрочка',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('ТипыЗамечаний', '\\ТипыЗамечаний', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Тип_замечания',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('КалендарьRelatedByфактическаядатаустранения', '\\Календарь', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Фактическая_дата_устранения',
    1 => ':Дата',
  ),
), null, null, null, false);
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
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? ПредписанияTableMap::CLASS_DEFAULT : ПредписанияTableMap::OM_CLASS;
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
     * @return array           (Предписания object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ПредписанияTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ПредписанияTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ПредписанияTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ПредписанияTableMap::OM_CLASS;
            /** @var Предписания $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ПредписанияTableMap::addInstanceToPool($obj, $key);
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
            $key = ПредписанияTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ПредписанияTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Предписания $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ПредписанияTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ID);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_КОНТРОЛИРУЮЩИЙ_ОРГАН);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ПОДРЯДЧИК);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ДАТА_ВЫДАЧИ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ПЛАНОВАЯ_ДАТА_УСТРАНЕНИЯ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ФАКТИЧЕСКАЯ_ДАТА_УСТРАНЕНИЯ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ТИП_ЗАМЕЧАНИЯ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_ПРОЕКТ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ЗАВЕРШЕНИЕ);
            $criteria->addSelectColumn(ПредписанияTableMap::COL_СТАТУС_ЗАЯВКИ_ПРОСРОЧКА);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Контролирующий_орган');
            $criteria->addSelectColumn($alias . '.Подрядчик');
            $criteria->addSelectColumn($alias . '.Дата_выдачи');
            $criteria->addSelectColumn($alias . '.Плановая_дата_устранения');
            $criteria->addSelectColumn($alias . '.Фактическая_дата_устранения');
            $criteria->addSelectColumn($alias . '.Тип_замечания');
            $criteria->addSelectColumn($alias . '.Проект');
            $criteria->addSelectColumn($alias . '.Статус_заявки_завершение');
            $criteria->addSelectColumn($alias . '.Статус_заявки_просрочка');
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
        return Propel::getServiceContainer()->getDatabaseMap(ПредписанияTableMap::DATABASE_NAME)->getTable(ПредписанияTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ПредписанияTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ПредписанияTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ПредписанияTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Предписания or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Предписания object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ПредписанияTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Предписания) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ПредписанияTableMap::DATABASE_NAME);
            $criteria->add(ПредписанияTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ПредписанияQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ПредписанияTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ПредписанияTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the Предписания table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ПредписанияQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Предписания or Criteria object.
     *
     * @param mixed               $criteria Criteria or Предписания object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ПредписанияTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Предписания object
        }

        if ($criteria->containsKey(ПредписанияTableMap::COL_ID) && $criteria->keyContainsValue(ПредписанияTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ПредписанияTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ПредписанияQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ПредписанияTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ПредписанияTableMap::buildTableMap();
