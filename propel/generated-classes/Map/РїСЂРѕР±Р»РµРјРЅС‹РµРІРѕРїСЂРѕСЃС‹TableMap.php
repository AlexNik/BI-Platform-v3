<?php

namespace Map;

use \проблемныевопросы;
use \проблемныевопросыQuery;
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
 * This class defines the structure of the 'Проблемные_вопросы' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class проблемныевопросыTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.проблемныевопросыTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'Проблемные_вопросы';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\проблемныевопросы';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'проблемныевопросы';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the id field
     */
    const COL_ID = 'Проблемные_вопросы.id';

    /**
     * the column name for the Проект field
     */
    const COL_ПРОЕКТ = 'Проблемные_вопросы.Проект';

    /**
     * the column name for the Дата field
     */
    const COL_ДАТА = 'Проблемные_вопросы.Дата';

    /**
     * the column name for the Кому field
     */
    const COL_КОМУ = 'Проблемные_вопросы.Кому';

    /**
     * the column name for the Проблемные_вопросы field
     */
    const COL_ПРОБЛЕМНЫЕ_ВОПРОСЫ = 'Проблемные_вопросы.Проблемные_вопросы';

    /**
     * the column name for the Меры_для_решения field
     */
    const COL_МЕРЫ_ДЛЯ_РЕШЕНИЯ = 'Проблемные_вопросы.Меры_для_решения';

    /**
     * the column name for the Ответсвенный field
     */
    const COL_ОТВЕТСВЕННЫЙ = 'Проблемные_вопросы.Ответсвенный';

    /**
     * the column name for the Срок field
     */
    const COL_СРОК = 'Проблемные_вопросы.Срок';

    /**
     * the column name for the Статус field
     */
    const COL_СТАТУС = 'Проблемные_вопросы.Статус';

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
        self::TYPE_PHPNAME       => array('Id', 'проект', 'дата', 'кому', 'проблемныевопросы', 'мерыдлярешения', 'ответсвенный', 'срок', 'статус', ),
        self::TYPE_CAMELNAME     => array('id', '�роект', '�ата', '�ому', '�роблемныевопросы', '�ерыдлярешения', '�тветсвенный', '�рок', '�татус', ),
        self::TYPE_COLNAME       => array(проблемныевопросыTableMap::COL_ID, проблемныевопросыTableMap::COL_ПРОЕКТ, проблемныевопросыTableMap::COL_ДАТА, проблемныевопросыTableMap::COL_КОМУ, проблемныевопросыTableMap::COL_ПРОБЛЕМНЫЕ_ВОПРОСЫ, проблемныевопросыTableMap::COL_МЕРЫ_ДЛЯ_РЕШЕНИЯ, проблемныевопросыTableMap::COL_ОТВЕТСВЕННЫЙ, проблемныевопросыTableMap::COL_СРОК, проблемныевопросыTableMap::COL_СТАТУС, ),
        self::TYPE_FIELDNAME     => array('id', 'Проект', 'Дата', 'Кому', 'Проблемные_вопросы', 'Меры_для_решения', 'Ответсвенный', 'Срок', 'Статус', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'проект' => 1, 'дата' => 2, 'кому' => 3, 'проблемныевопросы' => 4, 'мерыдлярешения' => 5, 'ответсвенный' => 6, 'срок' => 7, 'статус' => 8, ),
        self::TYPE_CAMELNAME     => array('id' => 0, '�роект' => 1, '�ата' => 2, '�ому' => 3, '�роблемныевопросы' => 4, '�ерыдлярешения' => 5, '�тветсвенный' => 6, '�рок' => 7, '�татус' => 8, ),
        self::TYPE_COLNAME       => array(проблемныевопросыTableMap::COL_ID => 0, проблемныевопросыTableMap::COL_ПРОЕКТ => 1, проблемныевопросыTableMap::COL_ДАТА => 2, проблемныевопросыTableMap::COL_КОМУ => 3, проблемныевопросыTableMap::COL_ПРОБЛЕМНЫЕ_ВОПРОСЫ => 4, проблемныевопросыTableMap::COL_МЕРЫ_ДЛЯ_РЕШЕНИЯ => 5, проблемныевопросыTableMap::COL_ОТВЕТСВЕННЫЙ => 6, проблемныевопросыTableMap::COL_СРОК => 7, проблемныевопросыTableMap::COL_СТАТУС => 8, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'Проект' => 1, 'Дата' => 2, 'Кому' => 3, 'Проблемные_вопросы' => 4, 'Меры_для_решения' => 5, 'Ответсвенный' => 6, 'Срок' => 7, 'Статус' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('Проблемные_вопросы');
        $this->setPhpName('проблемныевопросы');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\проблемныевопросы');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('Проект', 'проект', 'INTEGER', 'Проекты', 'id', false, null, null);
        $this->addColumn('Дата', 'дата', 'DATE', true, null, null);
        $this->addColumn('Кому', 'кому', 'LONGVARCHAR', true, null, null);
        $this->addColumn('Проблемные_вопросы', 'проблемныевопросы', 'LONGVARCHAR', true, null, null);
        $this->addColumn('Меры_для_решения', 'мерыдлярешения', 'LONGVARCHAR', true, null, null);
        $this->addColumn('Ответсвенный', 'ответсвенный', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Срок', 'срок', 'DATE', false, null, null);
        $this->addColumn('Статус', 'статус', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Проекты', '\\Проекты', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':Проект',
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
        return $withPrefix ? проблемныевопросыTableMap::CLASS_DEFAULT : проблемныевопросыTableMap::OM_CLASS;
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
     * @return array           (проблемныевопросы object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = проблемныевопросыTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = проблемныевопросыTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + проблемныевопросыTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = проблемныевопросыTableMap::OM_CLASS;
            /** @var проблемныевопросы $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            проблемныевопросыTableMap::addInstanceToPool($obj, $key);
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
            $key = проблемныевопросыTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = проблемныевопросыTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var проблемныевопросы $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                проблемныевопросыTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_ID);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_ПРОЕКТ);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_ДАТА);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_КОМУ);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_ПРОБЛЕМНЫЕ_ВОПРОСЫ);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_МЕРЫ_ДЛЯ_РЕШЕНИЯ);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_ОТВЕТСВЕННЫЙ);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_СРОК);
            $criteria->addSelectColumn(проблемныевопросыTableMap::COL_СТАТУС);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Проект');
            $criteria->addSelectColumn($alias . '.Дата');
            $criteria->addSelectColumn($alias . '.Кому');
            $criteria->addSelectColumn($alias . '.Проблемные_вопросы');
            $criteria->addSelectColumn($alias . '.Меры_для_решения');
            $criteria->addSelectColumn($alias . '.Ответсвенный');
            $criteria->addSelectColumn($alias . '.Срок');
            $criteria->addSelectColumn($alias . '.Статус');
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
        return Propel::getServiceContainer()->getDatabaseMap(проблемныевопросыTableMap::DATABASE_NAME)->getTable(проблемныевопросыTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(проблемныевопросыTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(проблемныевопросыTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new проблемныевопросыTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a проблемныевопросы or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or проблемныевопросы object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(проблемныевопросыTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \проблемныевопросы) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(проблемныевопросыTableMap::DATABASE_NAME);
            $criteria->add(проблемныевопросыTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = проблемныевопросыQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            проблемныевопросыTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                проблемныевопросыTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the Проблемные_вопросы table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return проблемныевопросыQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a проблемныевопросы or Criteria object.
     *
     * @param mixed               $criteria Criteria or проблемныевопросы object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(проблемныевопросыTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from проблемныевопросы object
        }

        if ($criteria->containsKey(проблемныевопросыTableMap::COL_ID) && $criteria->keyContainsValue(проблемныевопросыTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.проблемныевопросыTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = проблемныевопросыQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // проблемныевопросыTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
проблемныевопросыTableMap::buildTableMap();
