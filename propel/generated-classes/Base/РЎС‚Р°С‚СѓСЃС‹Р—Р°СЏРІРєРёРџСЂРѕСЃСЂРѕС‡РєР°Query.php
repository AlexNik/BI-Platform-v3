<?php

namespace Base;

use \СтатусыЗаявкиПросрочка as ChildСтатусыЗаявкиПросрочка;
use \СтатусыЗаявкиПросрочкаQuery as ChildСтатусыЗаявкиПросрочкаQuery;
use \Exception;
use \PDO;
use Map\СтатусыЗаявкиПросрочкаTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'Статусы_заявки_просрочка' table.
 *
 * 
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildСтатусыЗаявкиПросрочкаQuery orderByстатуспросрочки($order = Criteria::ASC) Order by the Статус_просрочки column
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery groupById() Group by the id column
 * @method     ChildСтатусыЗаявкиПросрочкаQuery groupByстатуспросрочки() Group by the Статус_просрочки column
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildСтатусыЗаявкиПросрочкаQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildСтатусыЗаявкиПросрочкаQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildСтатусыЗаявкиПросрочкаQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildСтатусыЗаявкиПросрочкаQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery leftJoinПредписания($relationAlias = null) Adds a LEFT JOIN clause to the query using the Предписания relation
 * @method     ChildСтатусыЗаявкиПросрочкаQuery rightJoinПредписания($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Предписания relation
 * @method     ChildСтатусыЗаявкиПросрочкаQuery innerJoinПредписания($relationAlias = null) Adds a INNER JOIN clause to the query using the Предписания relation
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery joinWithПредписания($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Предписания relation
 *
 * @method     ChildСтатусыЗаявкиПросрочкаQuery leftJoinWithПредписания() Adds a LEFT JOIN clause and with to the query using the Предписания relation
 * @method     ChildСтатусыЗаявкиПросрочкаQuery rightJoinWithПредписания() Adds a RIGHT JOIN clause and with to the query using the Предписания relation
 * @method     ChildСтатусыЗаявкиПросрочкаQuery innerJoinWithПредписания() Adds a INNER JOIN clause and with to the query using the Предписания relation
 *
 * @method     \ПредписанияQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildСтатусыЗаявкиПросрочка findOne(ConnectionInterface $con = null) Return the first ChildСтатусыЗаявкиПросрочка matching the query
 * @method     ChildСтатусыЗаявкиПросрочка findOneOrCreate(ConnectionInterface $con = null) Return the first ChildСтатусыЗаявкиПросрочка matching the query, or a new ChildСтатусыЗаявкиПросрочка object populated from the query conditions when no match is found
 *
 * @method     ChildСтатусыЗаявкиПросрочка findOneById(int $id) Return the first ChildСтатусыЗаявкиПросрочка filtered by the id column
 * @method     ChildСтатусыЗаявкиПросрочка findOneByстатуспросрочки(string $Статус_просрочки) Return the first ChildСтатусыЗаявкиПросрочка filtered by the Статус_просрочки column *

 * @method     ChildСтатусыЗаявкиПросрочка requirePk($key, ConnectionInterface $con = null) Return the ChildСтатусыЗаявкиПросрочка by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildСтатусыЗаявкиПросрочка requireOne(ConnectionInterface $con = null) Return the first ChildСтатусыЗаявкиПросрочка matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildСтатусыЗаявкиПросрочка requireOneById(int $id) Return the first ChildСтатусыЗаявкиПросрочка filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildСтатусыЗаявкиПросрочка requireOneByстатуспросрочки(string $Статус_просрочки) Return the first ChildСтатусыЗаявкиПросрочка filtered by the Статус_просрочки column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildСтатусыЗаявкиПросрочка[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildСтатусыЗаявкиПросрочка objects based on current ModelCriteria
 * @method     ChildСтатусыЗаявкиПросрочка[]|ObjectCollection findById(int $id) Return ChildСтатусыЗаявкиПросрочка objects filtered by the id column
 * @method     ChildСтатусыЗаявкиПросрочка[]|ObjectCollection findByстатуспросрочки(string $Статус_просрочки) Return ChildСтатусыЗаявкиПросрочка objects filtered by the Статус_просрочки column
 * @method     ChildСтатусыЗаявкиПросрочка[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class СтатусыЗаявкиПросрочкаQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\СтатусыЗаявкиПросрочкаQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\СтатусыЗаявкиПросрочка', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildСтатусыЗаявкиПросрочкаQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildСтатусыЗаявкиПросрочкаQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildСтатусыЗаявкиПросрочкаQuery) {
            return $criteria;
        }
        $query = new ChildСтатусыЗаявкиПросрочкаQuery();
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
     * @return ChildСтатусыЗаявкиПросрочка|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = СтатусыЗаявкиПросрочкаTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(СтатусыЗаявкиПросрочкаTableMap::DATABASE_NAME);
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
     * @return ChildСтатусыЗаявкиПросрочка A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, Статус_просрочки FROM Статусы_заявки_просрочка WHERE id = :p0';
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
            /** @var ChildСтатусыЗаявкиПросрочка $obj */
            $obj = new ChildСтатусыЗаявкиПросрочка();
            $obj->hydrate($row);
            СтатусыЗаявкиПросрочкаTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildСтатусыЗаявкиПросрочка|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Статус_просрочки column
     *
     * Example usage:
     * <code>
     * $query->filterByстатуспросрочки('fooValue');   // WHERE Статус_просрочки = 'fooValue'
     * $query->filterByстатуспросрочки('%fooValue%'); // WHERE Статус_просрочки LIKE '%fooValue%'
     * </code>
     *
     * @param     string $�татуспросрочки The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function filterByстатуспросрочки($�татуспросрочки = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($�татуспросрочки)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $�татуспросрочки)) {
                $�татуспросрочки = str_replace('*', '%', $�татуспросрочки);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_СТАТУС_ПРОСРОЧКИ, $�татуспросрочки, $comparison);
    }

    /**
     * Filter the query by a related \Предписания object
     *
     * @param \Предписания|ObjectCollection $�редписания the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function filterByПредписания($�редписания, $comparison = null)
    {
        if ($�редписания instanceof \Предписания) {
            return $this
                ->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $�редписания->getстатусзаявкипросрочка(), $comparison);
        } elseif ($�редписания instanceof ObjectCollection) {
            return $this
                ->useПредписанияQuery()
                ->filterByPrimaryKeys($�редписания->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByПредписания() only accepts arguments of type \Предписания or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Предписания relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function joinПредписания($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Предписания');

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
            $this->addJoinObject($join, 'Предписания');
        }

        return $this;
    }

    /**
     * Use the Предписания relation Предписания object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ПредписанияQuery A secondary query class using the current class as primary query
     */
    public function useПредписанияQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinПредписания($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Предписания', '\ПредписанияQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildСтатусыЗаявкиПросрочка $�татусыЗаявкиПросрочка Object to remove from the list of results
     *
     * @return $this|ChildСтатусыЗаявкиПросрочкаQuery The current query, for fluid interface
     */
    public function prune($�татусыЗаявкиПросрочка = null)
    {
        if ($�татусыЗаявкиПросрочка) {
            $this->addUsingAlias(СтатусыЗаявкиПросрочкаTableMap::COL_ID, $�татусыЗаявкиПросрочка->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the Статусы_заявки_просрочка table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(СтатусыЗаявкиПросрочкаTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            СтатусыЗаявкиПросрочкаTableMap::clearInstancePool();
            СтатусыЗаявкиПросрочкаTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(СтатусыЗаявкиПросрочкаTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(СтатусыЗаявкиПросрочкаTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            СтатусыЗаявкиПросрочкаTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            СтатусыЗаявкиПросрочкаTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // СтатусыЗаявкиПросрочкаQuery
