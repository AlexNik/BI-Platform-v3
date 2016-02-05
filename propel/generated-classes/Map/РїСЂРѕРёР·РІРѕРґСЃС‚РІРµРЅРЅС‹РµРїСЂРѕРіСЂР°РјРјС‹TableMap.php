<?php

namespace Map;

use \производственныепрограммы;
use \производственныепрограммыQuery;
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
 * This class defines the structure of the 'Производственные_программы' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class производственныепрограммыTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.производственныепрограммыTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'Производственные_программы';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\производственныепрограммы';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'производственныепрограммы';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id field
     */
    const COL_ID = 'Производственные_программы.id';

    /**
     * the column name for the Тип_программы field
     */
    const COL_ТИП_ПРОГРАММЫ = 'Производственные_программы.Тип_программы';

    /**
     * the column name for the Год field
     */
    const COL_ГОД = 'Производственные_программы.Год';

    /**
     * the column name for the Месяц field
     */
    const COL_МЕСЯЦ = 'Производственные_программы.Месяц';

    /**
     * the column name for the План field
     */
    const COL_ПЛАН = 'Производственные_программы.План';

    /**
     * the column name for the Факт field
     */
    const COL_ФАКТ = 'Производственные_программы.Факт';

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
        self::TYPE_PHPNAME       => array('Id', 'типпрограммы', 'год', 'месяц', 'план', 'факт', ),
        self::TYPE_CAMELNAME     => array('id', '�иппрограммы', '�од', '�есяц', '�лан', '�акт', ),
        self::TYPE_COLNAME       => array(производственныепрограммыTableMap::COL_ID, производственныепрограммыTableMap::COL_ТИП_ПРОГРАММЫ, производственныепрограммыTableMap::COL_ГОД, производственныепрограммыTableMap::COL_МЕСЯЦ, производственныепрограммыTableMap::COL_ПЛАН, производственныепрограммыTableMap::COL_ФАКТ, ),
        self::TYPE_FIELDNAME     => array('id', 'Тип_программы', 'Год', 'Месяц', 'План', 'Факт', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'типпрограммы' => 1, 'год' => 2, 'месяц' => 3, 'план' => 4, 'факт' => 5, ),
        self::TYPE_CAMELNAME     => array('id' => 0, '�иппрограммы' => 1, '�од' => 2, '�есяц' => 3, '�лан' => 4, '�акт' => 5, ),
        self::TYPE_COLNAME       => array(производственныепрограммыTableMap::COL_ID => 0, производственныепрограммыTableMap::COL_ТИП_ПРОГРАММЫ => 1, производственныепрограммыTableMap::COL_ГОД => 2, производственныепрограммыTableMap::COL_МЕСЯЦ => 3, производственныепрограммыTableMap::COL_ПЛАН => 4, производственныепрограммыTableMap::COL_ФАКТ => 5, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'Тип_программы' => 1, 'Год' => 2, 'Месяц' => 3, 'План' => 4, 'Факт' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
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
        $this->setName('Производственные_программы');
        $this->setPhpName('производственныепрограммы');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\производственныепрограммы');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('Тип_программы', 'типпрограммы', 'INTEGER', 'Программы', 'id', true, null, null);
        $this->addForeignKey('Год', 'год', 'INTEGER', 'Года', 'id', true, null, null);
        $this->addForeignKey('Месяц', 'месяц', 'INTEGER', 'Месяца', 'id', true, null, null);
        $this->addColumn('План', 'план', 'INTEGER', false, null, null);
        $this->addColumn('Факт', 'факт', 'INTEGER', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('программы', '\\программы', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Тип_программы',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('месяца', '\\месяца', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Месяц',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('года', '\\года', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Год',
    1 => ':id',
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
        return $withPrefix ? производственныепрограммыTableMap::CLASS_DEFAULT : производственныепрограммыTableMap::OM_CLASS;
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
     * @return array           (производственныепрограммы object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = производственныепрограммыTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = производственныепрограммыTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + производственныепрограммыTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = производственныепрограммыTableMap::OM_CLASS;
            /** @var производственныепрограммы $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            производственныепрограммыTableMap::addInstanceToPool($obj, $key);
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
            $key = производственныепрограммыTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = производственныепрограммыTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var производственныепрограммы $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                производственныепрограммыTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_ID);
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_ТИП_ПРОГРАММЫ);
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_ГОД);
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_МЕСЯЦ);
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_ПЛАН);
            $criteria->addSelectColumn(производственныепрограммыTableMap::COL_ФАКТ);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Тип_программы');
            $criteria->addSelectColumn($alias . '.Год');
            $criteria->addSelectColumn($alias . '.Месяц');
            $criteria->addSelectColumn($alias . '.План');
            $criteria->addSelectColumn($alias . '.Факт');
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
        return Propel::getServiceContainer()->getDatabaseMap(производственныепрограммыTableMap::DATABASE_NAME)->getTable(производственныепрограммыTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(производственныепрограммыTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(производственныепрограммыTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new производственныепрограммыTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a производственныепрограммы or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or производственныепрограммы object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(производственныепрограммыTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \производственныепрограммы) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(производственныепрограммыTableMap::DATABASE_NAME);
            $criteria->add(производственныепрограммыTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = производственныепрограммыQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            производственныепрограммыTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                производственныепрограммыTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the Производственные_программы table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return производственныепрограммыQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a производственныепрограммы or Criteria object.
     *
     * @param mixed               $criteria Criteria or производственныепрограммы object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(производственныепрограммыTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from производственныепрограммы object
        }

        if ($criteria->containsKey(производственныепрограммыTableMap::COL_ID) && $criteria->keyContainsValue(производственныепрограммыTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.производственныепрограммыTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = производственныепрограммыQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // производственныепрограммыTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
производственныепрограммыTableMap::buildTableMap();
