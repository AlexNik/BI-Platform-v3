<?php

namespace Base;

use \Типытехникимтр as ChildТипытехникимтр;
use \ТипытехникимтрQuery as ChildТипытехникимтрQuery;
use \Exception;
use Map\ТипытехникимтрTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ТипыТехникиМТР' table.
 *
 * 
 *
 * @method     ChildТипытехникимтрQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildТипытехникимтрQuery orderByТиптехники($order = Criteria::ASC) Order by the ТипТехники column
 * @method     ChildТипытехникимтрQuery orderByОтображаемыйтиптехники($order = Criteria::ASC) Order by the ОтображаемыйТипТехники column
 *
 * @method     ChildТипытехникимтрQuery groupById() Group by the id column
 * @method     ChildТипытехникимтрQuery groupByТиптехники() Group by the ТипТехники column
 * @method     ChildТипытехникимтрQuery groupByОтображаемыйтиптехники() Group by the ОтображаемыйТипТехники column
 *
 * @method     ChildТипытехникимтрQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildТипытехникимтрQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildТипытехникимтрQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildТипытехникимтрQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildТипытехникимтрQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildТипытехникимтрQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildТипытехникимтр findOne(ConnectionInterface $con = null) Return the first ChildТипытехникимтр matching the query
 * @method     ChildТипытехникимтр findOneOrCreate(ConnectionInterface $con = null) Return the first ChildТипытехникимтр matching the query, or a new ChildТипытехникимтр object populated from the query conditions when no match is found
 *
 * @method     ChildТипытехникимтр findOneById(int $id) Return the first ChildТипытехникимтр filtered by the id column
 * @method     ChildТипытехникимтр findOneByТиптехники(string $ТипТехники) Return the first ChildТипытехникимтр filtered by the ТипТехники column
 * @method     ChildТипытехникимтр findOneByОтображаемыйтиптехники(int $ОтображаемыйТипТехники) Return the first ChildТипытехникимтр filtered by the ОтображаемыйТипТехники column *

 * @method     ChildТипытехникимтр requirePk($key, ConnectionInterface $con = null) Return the ChildТипытехникимтр by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildТипытехникимтр requireOne(ConnectionInterface $con = null) Return the first ChildТипытехникимтр matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildТипытехникимтр requireOneById(int $id) Return the first ChildТипытехникимтр filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildТипытехникимтр requireOneByТиптехники(string $ТипТехники) Return the first ChildТипытехникимтр filtered by the ТипТехники column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildТипытехникимтр requireOneByОтображаемыйтиптехники(int $ОтображаемыйТипТехники) Return the first ChildТипытехникимтр filtered by the ОтображаемыйТипТехники column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildТипытехникимтр[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildТипытехникимтр objects based on current ModelCriteria
 * @method     ChildТипытехникимтр[]|ObjectCollection findById(int $id) Return ChildТипытехникимтр objects filtered by the id column
 * @method     ChildТипытехникимтр[]|ObjectCollection findByТиптехники(string $ТипТехники) Return ChildТипытехникимтр objects filtered by the ТипТехники column
 * @method     ChildТипытехникимтр[]|ObjectCollection findByОтображаемыйтиптехники(int $ОтображаемыйТипТехники) Return ChildТипытехникимтр objects filtered by the ОтображаемыйТипТехники column
 * @method     ChildТипытехникимтр[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ТипытехникимтрQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ТипытехникимтрQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Типытехникимтр', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildТипытехникимтрQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildТипытехникимтрQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildТипытехникимтрQuery) {
            return $criteria;
        }
        $query = new ChildТипытехникимтрQuery();
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
     * @return ChildТипытехникимтр|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Типытехникимтр object has no primary key');
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
        throw new LogicException('The Типытехникимтр object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Типытехникимтр object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Типытехникимтр object has no primary key');
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
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ТипытехникимтрTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ТипытехникимтрTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ТипытехникимтрTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the ТипТехники column
     *
     * Example usage:
     * <code>
     * $query->filterByТиптехники('fooValue');   // WHERE ТипТехники = 'fooValue'
     * $query->filterByТиптехники('%fooValue%'); // WHERE ТипТехники LIKE '%fooValue%'
     * </code>
     *
     * @param     string $�иптехники The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function filterByТиптехники($�иптехники = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($�иптехники)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $�иптехники)) {
                $�иптехники = str_replace('*', '%', $�иптехники);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ТипытехникимтрTableMap::COL_ТИПТЕХНИКИ, $�иптехники, $comparison);
    }

    /**
     * Filter the query on the ОтображаемыйТипТехники column
     *
     * Example usage:
     * <code>
     * $query->filterByОтображаемыйтиптехники(1234); // WHERE ОтображаемыйТипТехники = 1234
     * $query->filterByОтображаемыйтиптехники(array(12, 34)); // WHERE ОтображаемыйТипТехники IN (12, 34)
     * $query->filterByОтображаемыйтиптехники(array('min' => 12)); // WHERE ОтображаемыйТипТехники > 12
     * </code>
     *
     * @param     mixed $�тображаемыйтиптехники The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function filterByОтображаемыйтиптехники($�тображаемыйтиптехники = null, $comparison = null)
    {
        if (is_array($�тображаемыйтиптехники)) {
            $useMinMax = false;
            if (isset($�тображаемыйтиптехники['min'])) {
                $this->addUsingAlias(ТипытехникимтрTableMap::COL_ОТОБРАЖАЕМЫЙТИПТЕХНИКИ, $�тображаемыйтиптехники['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�тображаемыйтиптехники['max'])) {
                $this->addUsingAlias(ТипытехникимтрTableMap::COL_ОТОБРАЖАЕМЫЙТИПТЕХНИКИ, $�тображаемыйтиптехники['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ТипытехникимтрTableMap::COL_ОТОБРАЖАЕМЫЙТИПТЕХНИКИ, $�тображаемыйтиптехники, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildТипытехникимтр $�ипытехникимтр Object to remove from the list of results
     *
     * @return $this|ChildТипытехникимтрQuery The current query, for fluid interface
     */
    public function prune($�ипытехникимтр = null)
    {
        if ($�ипытехникимтр) {
            throw new LogicException('Типытехникимтр object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the ТипыТехникиМТР table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ТипытехникимтрTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ТипытехникимтрTableMap::clearInstancePool();
            ТипытехникимтрTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ТипытехникимтрTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ТипытехникимтрTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            ТипытехникимтрTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            ТипытехникимтрTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ТипытехникимтрQuery
