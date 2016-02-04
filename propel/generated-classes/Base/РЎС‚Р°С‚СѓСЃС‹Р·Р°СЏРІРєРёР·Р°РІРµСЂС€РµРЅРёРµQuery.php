<?php

namespace Base;

use \Статусызаявкизавершение as ChildСтатусызаявкизавершение;
use \СтатусызаявкизавершениеQuery as ChildСтатусызаявкизавершениеQuery;
use \Exception;
use Map\СтатусызаявкизавершениеTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'СтатусыЗаявкиЗавершение' table.
 *
 * 
 *
 * @method     ChildСтатусызаявкизавершениеQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildСтатусызаявкизавершениеQuery orderByСтатусзавершения($order = Criteria::ASC) Order by the СтатусЗавершения column
 *
 * @method     ChildСтатусызаявкизавершениеQuery groupById() Group by the id column
 * @method     ChildСтатусызаявкизавершениеQuery groupByСтатусзавершения() Group by the СтатусЗавершения column
 *
 * @method     ChildСтатусызаявкизавершениеQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildСтатусызаявкизавершениеQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildСтатусызаявкизавершениеQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildСтатусызаявкизавершениеQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildСтатусызаявкизавершениеQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildСтатусызаявкизавершениеQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildСтатусызаявкизавершение findOne(ConnectionInterface $con = null) Return the first ChildСтатусызаявкизавершение matching the query
 * @method     ChildСтатусызаявкизавершение findOneOrCreate(ConnectionInterface $con = null) Return the first ChildСтатусызаявкизавершение matching the query, or a new ChildСтатусызаявкизавершение object populated from the query conditions when no match is found
 *
 * @method     ChildСтатусызаявкизавершение findOneById(int $id) Return the first ChildСтатусызаявкизавершение filtered by the id column
 * @method     ChildСтатусызаявкизавершение findOneByСтатусзавершения(string $СтатусЗавершения) Return the first ChildСтатусызаявкизавершение filtered by the СтатусЗавершения column *

 * @method     ChildСтатусызаявкизавершение requirePk($key, ConnectionInterface $con = null) Return the ChildСтатусызаявкизавершение by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildСтатусызаявкизавершение requireOne(ConnectionInterface $con = null) Return the first ChildСтатусызаявкизавершение matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildСтатусызаявкизавершение requireOneById(int $id) Return the first ChildСтатусызаявкизавершение filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildСтатусызаявкизавершение requireOneByСтатусзавершения(string $СтатусЗавершения) Return the first ChildСтатусызаявкизавершение filtered by the СтатусЗавершения column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildСтатусызаявкизавершение[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildСтатусызаявкизавершение objects based on current ModelCriteria
 * @method     ChildСтатусызаявкизавершение[]|ObjectCollection findById(int $id) Return ChildСтатусызаявкизавершение objects filtered by the id column
 * @method     ChildСтатусызаявкизавершение[]|ObjectCollection findByСтатусзавершения(string $СтатусЗавершения) Return ChildСтатусызаявкизавершение objects filtered by the СтатусЗавершения column
 * @method     ChildСтатусызаявкизавершение[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class СтатусызаявкизавершениеQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\СтатусызаявкизавершениеQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Статусызаявкизавершение', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildСтатусызаявкизавершениеQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildСтатусызаявкизавершениеQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildСтатусызаявкизавершениеQuery) {
            return $criteria;
        }
        $query = new ChildСтатусызаявкизавершениеQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildСтатусызаявкизавершение|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Статусызаявкизавершение object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The Статусызаявкизавершение object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildСтатусызаявкизавершениеQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Статусызаявкизавершение object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildСтатусызаявкизавершениеQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Статусызаявкизавершение object has no primary key');
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildСтатусызаявкизавершениеQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(СтатусызаявкизавершениеTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(СтатусызаявкизавершениеTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(СтатусызаявкизавершениеTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the СтатусЗавершения column
     *
     * Example usage:
     * <code>
     * $query->filterByСтатусзавершения('fooValue');   // WHERE СтатусЗавершения = 'fooValue'
     * $query->filterByСтатусзавершения('%fooValue%'); // WHERE СтатусЗавершения LIKE '%fooValue%'
     * </code>
     *
     * @param     string $�татусзавершения The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildСтатусызаявкизавершениеQuery The current query, for fluid interface
     */
    public function filterByСтатусзавершения($�татусзавершения = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($�татусзавершения)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $�татусзавершения)) {
                $�татусзавершения = str_replace('*', '%', $�татусзавершения);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(СтатусызаявкизавершениеTableMap::COL_СТАТУСЗАВЕРШЕНИЯ, $�татусзавершения, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildСтатусызаявкизавершение $�татусызаявкизавершение Object to remove from the list of results
     *
     * @return $this|ChildСтатусызаявкизавершениеQuery The current query, for fluid interface
     */
    public function prune($�татусызаявкизавершение = null)
    {
        if ($�татусызаявкизавершение) {
            throw new LogicException('Статусызаявкизавершение object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the СтатусыЗаявкиЗавершение table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(СтатусызаявкизавершениеTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            СтатусызаявкизавершениеTableMap::clearInstancePool();
            СтатусызаявкизавершениеTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(СтатусызаявкизавершениеTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(СтатусызаявкизавершениеTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            СтатусызаявкизавершениеTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            СтатусызаявкизавершениеTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // СтатусызаявкизавершениеQuery
