<?php

namespace Base;

use \участкиработмобилизация as Childучасткиработмобилизация;
use \участкиработмобилизацияQuery as ChildучасткиработмобилизацияQuery;
use \Exception;
use \PDO;
use Map\участкиработмобилизацияTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'Участки_работ_мобилизация' table.
 *
 * 
 *
 * @method     ChildучасткиработмобилизацияQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildучасткиработмобилизацияQuery orderByучастокработ($order = Criteria::ASC) Order by the Участок_работ column
 *
 * @method     ChildучасткиработмобилизацияQuery groupById() Group by the id column
 * @method     ChildучасткиработмобилизацияQuery groupByучастокработ() Group by the Участок_работ column
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildучасткиработмобилизацияQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildучасткиработмобилизацияQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildучасткиработмобилизацияQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildучасткиработмобилизацияQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoinмобилизация($relationAlias = null) Adds a LEFT JOIN clause to the query using the мобилизация relation
 * @method     ChildучасткиработмобилизацияQuery rightJoinмобилизация($relationAlias = null) Adds a RIGHT JOIN clause to the query using the мобилизация relation
 * @method     ChildучасткиработмобилизацияQuery innerJoinмобилизация($relationAlias = null) Adds a INNER JOIN clause to the query using the мобилизация relation
 *
 * @method     ChildучасткиработмобилизацияQuery joinWithмобилизация($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the мобилизация relation
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoinWithмобилизация() Adds a LEFT JOIN clause and with to the query using the мобилизация relation
 * @method     ChildучасткиработмобилизацияQuery rightJoinWithмобилизация() Adds a RIGHT JOIN clause and with to the query using the мобилизация relation
 * @method     ChildучасткиработмобилизацияQuery innerJoinWithмобилизация() Adds a INNER JOIN clause and with to the query using the мобилизация relation
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoinмобилизацияпомесяцам($relationAlias = null) Adds a LEFT JOIN clause to the query using the мобилизацияпомесяцам relation
 * @method     ChildучасткиработмобилизацияQuery rightJoinмобилизацияпомесяцам($relationAlias = null) Adds a RIGHT JOIN clause to the query using the мобилизацияпомесяцам relation
 * @method     ChildучасткиработмобилизацияQuery innerJoinмобилизацияпомесяцам($relationAlias = null) Adds a INNER JOIN clause to the query using the мобилизацияпомесяцам relation
 *
 * @method     ChildучасткиработмобилизацияQuery joinWithмобилизацияпомесяцам($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the мобилизацияпомесяцам relation
 *
 * @method     ChildучасткиработмобилизацияQuery leftJoinWithмобилизацияпомесяцам() Adds a LEFT JOIN clause and with to the query using the мобилизацияпомесяцам relation
 * @method     ChildучасткиработмобилизацияQuery rightJoinWithмобилизацияпомесяцам() Adds a RIGHT JOIN clause and with to the query using the мобилизацияпомесяцам relation
 * @method     ChildучасткиработмобилизацияQuery innerJoinWithмобилизацияпомесяцам() Adds a INNER JOIN clause and with to the query using the мобилизацияпомесяцам relation
 *
 * @method     \мобилизацияQuery|\мобилизацияпомесяцамQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     Childучасткиработмобилизация findOne(ConnectionInterface $con = null) Return the first Childучасткиработмобилизация matching the query
 * @method     Childучасткиработмобилизация findOneOrCreate(ConnectionInterface $con = null) Return the first Childучасткиработмобилизация matching the query, or a new Childучасткиработмобилизация object populated from the query conditions when no match is found
 *
 * @method     Childучасткиработмобилизация findOneById(int $id) Return the first Childучасткиработмобилизация filtered by the id column
 * @method     Childучасткиработмобилизация findOneByучастокработ(string $Участок_работ) Return the first Childучасткиработмобилизация filtered by the Участок_работ column *

 * @method     Childучасткиработмобилизация requirePk($key, ConnectionInterface $con = null) Return the Childучасткиработмобилизация by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childучасткиработмобилизация requireOne(ConnectionInterface $con = null) Return the first Childучасткиработмобилизация matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     Childучасткиработмобилизация requireOneById(int $id) Return the first Childучасткиработмобилизация filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childучасткиработмобилизация requireOneByучастокработ(string $Участок_работ) Return the first Childучасткиработмобилизация filtered by the Участок_работ column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     Childучасткиработмобилизация[]|ObjectCollection find(ConnectionInterface $con = null) Return Childучасткиработмобилизация objects based on current ModelCriteria
 * @method     Childучасткиработмобилизация[]|ObjectCollection findById(int $id) Return Childучасткиработмобилизация objects filtered by the id column
 * @method     Childучасткиработмобилизация[]|ObjectCollection findByучастокработ(string $Участок_работ) Return Childучасткиработмобилизация objects filtered by the Участок_работ column
 * @method     Childучасткиработмобилизация[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class участкиработмобилизацияQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\участкиработмобилизацияQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\участкиработмобилизация', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildучасткиработмобилизацияQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildучасткиработмобилизацияQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildучасткиработмобилизацияQuery) {
            return $criteria;
        }
        $query = new ChildучасткиработмобилизацияQuery();
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
     * @return Childучасткиработмобилизация|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = участкиработмобилизацияTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(участкиработмобилизацияTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return Childучасткиработмобилизация A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, Участок_работ FROM Участки_работ_мобилизация WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var Childучасткиработмобилизация $obj */
            $obj = new Childучасткиработмобилизация();
            $obj->hydrate($row);
            участкиработмобилизацияTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return Childучасткиработмобилизация|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Участок_работ column
     *
     * Example usage:
     * <code>
     * $query->filterByучастокработ('fooValue');   // WHERE Участок_работ = 'fooValue'
     * $query->filterByучастокработ('%fooValue%'); // WHERE Участок_работ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $�частокработ The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterByучастокработ($�частокработ = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($�частокработ)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $�частокработ)) {
                $�частокработ = str_replace('*', '%', $�частокработ);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(участкиработмобилизацияTableMap::COL_УЧАСТОК_РАБОТ, $�частокработ, $comparison);
    }

    /**
     * Filter the query by a related \мобилизация object
     *
     * @param \мобилизация|ObjectCollection $�обилизация the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterByмобилизация($�обилизация, $comparison = null)
    {
        if ($�обилизация instanceof \мобилизация) {
            return $this
                ->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $�обилизация->getучастокработ(), $comparison);
        } elseif ($�обилизация instanceof ObjectCollection) {
            return $this
                ->useмобилизацияQuery()
                ->filterByPrimaryKeys($�обилизация->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByмобилизация() only accepts arguments of type \мобилизация or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the мобилизация relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function joinмобилизация($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('мобилизация');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'мобилизация');
        }

        return $this;
    }

    /**
     * Use the мобилизация relation мобилизация object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \мобилизацияQuery A secondary query class using the current class as primary query
     */
    public function useмобилизацияQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinмобилизация($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'мобилизация', '\мобилизацияQuery');
    }

    /**
     * Filter the query by a related \мобилизацияпомесяцам object
     *
     * @param \мобилизацияпомесяцам|ObjectCollection $�обилизацияпомесяцам the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function filterByмобилизацияпомесяцам($�обилизацияпомесяцам, $comparison = null)
    {
        if ($�обилизацияпомесяцам instanceof \мобилизацияпомесяцам) {
            return $this
                ->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $�обилизацияпомесяцам->getучастокработ(), $comparison);
        } elseif ($�обилизацияпомесяцам instanceof ObjectCollection) {
            return $this
                ->useмобилизацияпомесяцамQuery()
                ->filterByPrimaryKeys($�обилизацияпомесяцам->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByмобилизацияпомесяцам() only accepts arguments of type \мобилизацияпомесяцам or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the мобилизацияпомесяцам relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function joinмобилизацияпомесяцам($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('мобилизацияпомесяцам');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'мобилизацияпомесяцам');
        }

        return $this;
    }

    /**
     * Use the мобилизацияпомесяцам relation мобилизацияпомесяцам object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \мобилизацияпомесяцамQuery A secondary query class using the current class as primary query
     */
    public function useмобилизацияпомесяцамQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinмобилизацияпомесяцам($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'мобилизацияпомесяцам', '\мобилизацияпомесяцамQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Childучасткиработмобилизация $�часткиработмобилизация Object to remove from the list of results
     *
     * @return $this|ChildучасткиработмобилизацияQuery The current query, for fluid interface
     */
    public function prune($�часткиработмобилизация = null)
    {
        if ($�часткиработмобилизация) {
            $this->addUsingAlias(участкиработмобилизацияTableMap::COL_ID, $�часткиработмобилизация->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the Участки_работ_мобилизация table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(участкиработмобилизацияTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            участкиработмобилизацияTableMap::clearInstancePool();
            участкиработмобилизацияTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(участкиработмобилизацияTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(участкиработмобилизацияTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            участкиработмобилизацияTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            участкиработмобилизацияTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // участкиработмобилизацияQuery
