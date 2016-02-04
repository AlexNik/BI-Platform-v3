<?php

namespace Base;

use \Программы as ChildПрограммы;
use \ПрограммыQuery as ChildПрограммыQuery;
use \Exception;
use Map\ПрограммыTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'Программы' table.
 *
 * 
 *
 * @method     ChildПрограммыQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildПрограммыQuery orderByПрограмма($order = Criteria::ASC) Order by the Программа column
 * @method     ChildПрограммыQuery orderByПроект($order = Criteria::ASC) Order by the Проект column
 * @method     ChildПрограммыQuery orderByОбъем($order = Criteria::ASC) Order by the Объем column
 *
 * @method     ChildПрограммыQuery groupById() Group by the id column
 * @method     ChildПрограммыQuery groupByПрограмма() Group by the Программа column
 * @method     ChildПрограммыQuery groupByПроект() Group by the Проект column
 * @method     ChildПрограммыQuery groupByОбъем() Group by the Объем column
 *
 * @method     ChildПрограммыQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildПрограммыQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildПрограммыQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildПрограммыQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildПрограммыQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildПрограммыQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildПрограммы findOne(ConnectionInterface $con = null) Return the first ChildПрограммы matching the query
 * @method     ChildПрограммы findOneOrCreate(ConnectionInterface $con = null) Return the first ChildПрограммы matching the query, or a new ChildПрограммы object populated from the query conditions when no match is found
 *
 * @method     ChildПрограммы findOneById(int $id) Return the first ChildПрограммы filtered by the id column
 * @method     ChildПрограммы findOneByПрограмма(string $Программа) Return the first ChildПрограммы filtered by the Программа column
 * @method     ChildПрограммы findOneByПроект(int $Проект) Return the first ChildПрограммы filtered by the Проект column
 * @method     ChildПрограммы findOneByОбъем(double $Объем) Return the first ChildПрограммы filtered by the Объем column *

 * @method     ChildПрограммы requirePk($key, ConnectionInterface $con = null) Return the ChildПрограммы by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildПрограммы requireOne(ConnectionInterface $con = null) Return the first ChildПрограммы matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildПрограммы requireOneById(int $id) Return the first ChildПрограммы filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildПрограммы requireOneByПрограмма(string $Программа) Return the first ChildПрограммы filtered by the Программа column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildПрограммы requireOneByПроект(int $Проект) Return the first ChildПрограммы filtered by the Проект column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildПрограммы requireOneByОбъем(double $Объем) Return the first ChildПрограммы filtered by the Объем column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildПрограммы[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildПрограммы objects based on current ModelCriteria
 * @method     ChildПрограммы[]|ObjectCollection findById(int $id) Return ChildПрограммы objects filtered by the id column
 * @method     ChildПрограммы[]|ObjectCollection findByПрограмма(string $Программа) Return ChildПрограммы objects filtered by the Программа column
 * @method     ChildПрограммы[]|ObjectCollection findByПроект(int $Проект) Return ChildПрограммы objects filtered by the Проект column
 * @method     ChildПрограммы[]|ObjectCollection findByОбъем(double $Объем) Return ChildПрограммы objects filtered by the Объем column
 * @method     ChildПрограммы[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ПрограммыQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ПрограммыQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Программы', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildПрограммыQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildПрограммыQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildПрограммыQuery) {
            return $criteria;
        }
        $query = new ChildПрограммыQuery();
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
     * @return ChildПрограммы|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Программы object has no primary key');
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
        throw new LogicException('The Программы object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Программы object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Программы object has no primary key');
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
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ПрограммыTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Программа column
     *
     * Example usage:
     * <code>
     * $query->filterByПрограмма('fooValue');   // WHERE Программа = 'fooValue'
     * $query->filterByПрограмма('%fooValue%'); // WHERE Программа LIKE '%fooValue%'
     * </code>
     *
     * @param     string $�рограмма The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterByПрограмма($�рограмма = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($�рограмма)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $�рограмма)) {
                $�рограмма = str_replace('*', '%', $�рограмма);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ПрограммыTableMap::COL_ПРОГРАММА, $�рограмма, $comparison);
    }

    /**
     * Filter the query on the Проект column
     *
     * Example usage:
     * <code>
     * $query->filterByПроект(1234); // WHERE Проект = 1234
     * $query->filterByПроект(array(12, 34)); // WHERE Проект IN (12, 34)
     * $query->filterByПроект(array('min' => 12)); // WHERE Проект > 12
     * </code>
     *
     * @param     mixed $�роект The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterByПроект($�роект = null, $comparison = null)
    {
        if (is_array($�роект)) {
            $useMinMax = false;
            if (isset($�роект['min'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ПРОЕКТ, $�роект['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�роект['max'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ПРОЕКТ, $�роект['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ПрограммыTableMap::COL_ПРОЕКТ, $�роект, $comparison);
    }

    /**
     * Filter the query on the Объем column
     *
     * Example usage:
     * <code>
     * $query->filterByОбъем(1234); // WHERE Объем = 1234
     * $query->filterByОбъем(array(12, 34)); // WHERE Объем IN (12, 34)
     * $query->filterByОбъем(array('min' => 12)); // WHERE Объем > 12
     * </code>
     *
     * @param     mixed $�бъем The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function filterByОбъем($�бъем = null, $comparison = null)
    {
        if (is_array($�бъем)) {
            $useMinMax = false;
            if (isset($�бъем['min'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ОБЪЕМ, $�бъем['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�бъем['max'])) {
                $this->addUsingAlias(ПрограммыTableMap::COL_ОБЪЕМ, $�бъем['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ПрограммыTableMap::COL_ОБЪЕМ, $�бъем, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildПрограммы $�рограммы Object to remove from the list of results
     *
     * @return $this|ChildПрограммыQuery The current query, for fluid interface
     */
    public function prune($�рограммы = null)
    {
        if ($�рограммы) {
            throw new LogicException('Программы object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the Программы table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ПрограммыTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ПрограммыTableMap::clearInstancePool();
            ПрограммыTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ПрограммыTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ПрограммыTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            ПрограммыTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            ПрограммыTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ПрограммыQuery
