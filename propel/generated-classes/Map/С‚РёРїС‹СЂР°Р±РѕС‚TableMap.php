<?php

namespace Map;

use \типыработ;
use \типыработQuery;
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
 * This class defines the structure of the 'Типы_работ' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class типыработTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.типыработTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'Типы_работ';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\типыработ';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'типыработ';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id field
     */
    const COL_ID = 'Типы_работ.id';

    /**
     * the column name for the Тип_работ field
     */
    const COL_ТИП_РАБОТ = 'Типы_работ.Тип_работ';

    /**
     * the column name for the Единицы_измерения field
     */
    const COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ = 'Типы_работ.Единицы_измерения';

    /**
     * the column name for the Отображение field
     */
    const COL_ОТОБРАЖЕНИЕ = 'Типы_работ.Отображение';

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
        self::TYPE_PHPNAME       => array('Id', 'типработ', 'единицыизмерения', 'отображение', ),
        self::TYPE_CAMELNAME     => array('id', '�ипработ', '�диницыизмерения', '�тображение', ),
        self::TYPE_COLNAME       => array(типыработTableMap::COL_ID, типыработTableMap::COL_ТИП_РАБОТ, типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ, типыработTableMap::COL_ОТОБРАЖЕНИЕ, ),
        self::TYPE_FIELDNAME     => array('id', 'Тип_работ', 'Единицы_измерения', 'Отображение', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'типработ' => 1, 'единицыизмерения' => 2, 'отображение' => 3, ),
        self::TYPE_CAMELNAME     => array('id' => 0, '�ипработ' => 1, '�диницыизмерения' => 2, '�тображение' => 3, ),
        self::TYPE_COLNAME       => array(типыработTableMap::COL_ID => 0, типыработTableMap::COL_ТИП_РАБОТ => 1, типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ => 2, типыработTableMap::COL_ОТОБРАЖЕНИЕ => 3, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'Тип_работ' => 1, 'Единицы_измерения' => 2, 'Отображение' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
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
        $this->setName('Типы_работ');
        $this->setPhpName('типыработ');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\типыработ');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Тип_работ', 'типработ', 'LONGVARCHAR', true, null, null);
        $this->addColumn('Единицы_измерения', 'единицыизмерения', 'LONGVARCHAR', true, null, null);
        $this->addColumn('Отображение', 'отображение', 'BOOLEAN', true, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('выработка', '\\выработка', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':Тип_работ',
    1 => ':id',
  ),
), null, null, 'выработкаs', false);
        $this->addRelation('физическиеобъёмы', '\\физическиеобъёмы', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':Тип_работ',
    1 => ':id',
  ),
), null, null, 'физическиеобъёмыs', false);
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
        return $withPrefix ? типыработTableMap::CLASS_DEFAULT : типыработTableMap::OM_CLASS;
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
     * @return array           (типыработ object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = типыработTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = типыработTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + типыработTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = типыработTableMap::OM_CLASS;
            /** @var типыработ $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            типыработTableMap::addInstanceToPool($obj, $key);
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
            $key = типыработTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = типыработTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var типыработ $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                типыработTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(типыработTableMap::COL_ID);
            $criteria->addSelectColumn(типыработTableMap::COL_ТИП_РАБОТ);
            $criteria->addSelectColumn(типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ);
            $criteria->addSelectColumn(типыработTableMap::COL_ОТОБРАЖЕНИЕ);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Тип_работ');
            $criteria->addSelectColumn($alias . '.Единицы_измерения');
            $criteria->addSelectColumn($alias . '.Отображение');
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
        return Propel::getServiceContainer()->getDatabaseMap(типыработTableMap::DATABASE_NAME)->getTable(типыработTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(типыработTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(типыработTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new типыработTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a типыработ or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or типыработ object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(типыработTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \типыработ) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(типыработTableMap::DATABASE_NAME);
            $criteria->add(типыработTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = типыработQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            типыработTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                типыработTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the Типы_работ table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return типыработQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a типыработ or Criteria object.
     *
     * @param mixed               $criteria Criteria or типыработ object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(типыработTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from типыработ object
        }

        if ($criteria->containsKey(типыработTableMap::COL_ID) && $criteria->keyContainsValue(типыработTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.типыработTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = типыработQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // типыработTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
типыработTableMap::buildTableMap();
