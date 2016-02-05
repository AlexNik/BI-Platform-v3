<?php

namespace Base;

use \мтр as Childмтр;
use \мтрQuery as ChildмтрQuery;
use \Exception;
use \PDO;
use Map\мтрTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'МТР' table.
 *
 * 
 *
 * @method     ChildмтрQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildмтрQuery orderByVin($order = Criteria::ASC) Order by the VIN column
 * @method     ChildмтрQuery orderByтиптехники($order = Criteria::ASC) Order by the Тип_техники column
 * @method     ChildмтрQuery orderByдата($order = Criteria::ASC) Order by the Дата column
 * @method     ChildмтрQuery orderByсостояниетехники($order = Criteria::ASC) Order by the Состояние_техники column
 * @method     ChildмтрQuery orderByподрядчик($order = Criteria::ASC) Order by the Подрядчик column
 * @method     ChildмтрQuery orderByпроект($order = Criteria::ASC) Order by the Проект column
 * @method     ChildмтрQuery orderByдатаотчёта($order = Criteria::ASC) Order by the Дата_отчёта column
 *
 * @method     ChildмтрQuery groupById() Group by the id column
 * @method     ChildмтрQuery groupByVin() Group by the VIN column
 * @method     ChildмтрQuery groupByтиптехники() Group by the Тип_техники column
 * @method     ChildмтрQuery groupByдата() Group by the Дата column
 * @method     ChildмтрQuery groupByсостояниетехники() Group by the Состояние_техники column
 * @method     ChildмтрQuery groupByподрядчик() Group by the Подрядчик column
 * @method     ChildмтрQuery groupByпроект() Group by the Проект column
 * @method     ChildмтрQuery groupByдатаотчёта() Group by the Дата_отчёта column
 *
 * @method     ChildмтрQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildмтрQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildмтрQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildмтрQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildмтрQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildмтрQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildмтрQuery leftJoinКалендарь($relationAlias = null) Adds a LEFT JOIN clause to the query using the Календарь relation
 * @method     ChildмтрQuery rightJoinКалендарь($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Календарь relation
 * @method     ChildмтрQuery innerJoinКалендарь($relationAlias = null) Adds a INNER JOIN clause to the query using the Календарь relation
 *
 * @method     ChildмтрQuery joinWithКалендарь($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Календарь relation
 *
 * @method     ChildмтрQuery leftJoinWithКалендарь() Adds a LEFT JOIN clause and with to the query using the Календарь relation
 * @method     ChildмтрQuery rightJoinWithКалендарь() Adds a RIGHT JOIN clause and with to the query using the Календарь relation
 * @method     ChildмтрQuery innerJoinWithКалендарь() Adds a INNER JOIN clause and with to the query using the Календарь relation
 *
 * @method     ChildмтрQuery leftJoinподрядчикимтр($relationAlias = null) Adds a LEFT JOIN clause to the query using the подрядчикимтр relation
 * @method     ChildмтрQuery rightJoinподрядчикимтр($relationAlias = null) Adds a RIGHT JOIN clause to the query using the подрядчикимтр relation
 * @method     ChildмтрQuery innerJoinподрядчикимтр($relationAlias = null) Adds a INNER JOIN clause to the query using the подрядчикимтр relation
 *
 * @method     ChildмтрQuery joinWithподрядчикимтр($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the подрядчикимтр relation
 *
 * @method     ChildмтрQuery leftJoinWithподрядчикимтр() Adds a LEFT JOIN clause and with to the query using the подрядчикимтр relation
 * @method     ChildмтрQuery rightJoinWithподрядчикимтр() Adds a RIGHT JOIN clause and with to the query using the подрядчикимтр relation
 * @method     ChildмтрQuery innerJoinWithподрядчикимтр() Adds a INNER JOIN clause and with to the query using the подрядчикимтр relation
 *
 * @method     ChildмтрQuery leftJoinПроекты($relationAlias = null) Adds a LEFT JOIN clause to the query using the Проекты relation
 * @method     ChildмтрQuery rightJoinПроекты($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Проекты relation
 * @method     ChildмтрQuery innerJoinПроекты($relationAlias = null) Adds a INNER JOIN clause to the query using the Проекты relation
 *
 * @method     ChildмтрQuery joinWithПроекты($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Проекты relation
 *
 * @method     ChildмтрQuery leftJoinWithПроекты() Adds a LEFT JOIN clause and with to the query using the Проекты relation
 * @method     ChildмтрQuery rightJoinWithПроекты() Adds a RIGHT JOIN clause and with to the query using the Проекты relation
 * @method     ChildмтрQuery innerJoinWithПроекты() Adds a INNER JOIN clause and with to the query using the Проекты relation
 *
 * @method     ChildмтрQuery leftJoinстатуссостояниятехники($relationAlias = null) Adds a LEFT JOIN clause to the query using the статуссостояниятехники relation
 * @method     ChildмтрQuery rightJoinстатуссостояниятехники($relationAlias = null) Adds a RIGHT JOIN clause to the query using the статуссостояниятехники relation
 * @method     ChildмтрQuery innerJoinстатуссостояниятехники($relationAlias = null) Adds a INNER JOIN clause to the query using the статуссостояниятехники relation
 *
 * @method     ChildмтрQuery joinWithстатуссостояниятехники($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the статуссостояниятехники relation
 *
 * @method     ChildмтрQuery leftJoinWithстатуссостояниятехники() Adds a LEFT JOIN clause and with to the query using the статуссостояниятехники relation
 * @method     ChildмтрQuery rightJoinWithстатуссостояниятехники() Adds a RIGHT JOIN clause and with to the query using the статуссостояниятехники relation
 * @method     ChildмтрQuery innerJoinWithстатуссостояниятехники() Adds a INNER JOIN clause and with to the query using the статуссостояниятехники relation
 *
 * @method     ChildмтрQuery leftJoinтипытехникимтр($relationAlias = null) Adds a LEFT JOIN clause to the query using the типытехникимтр relation
 * @method     ChildмтрQuery rightJoinтипытехникимтр($relationAlias = null) Adds a RIGHT JOIN clause to the query using the типытехникимтр relation
 * @method     ChildмтрQuery innerJoinтипытехникимтр($relationAlias = null) Adds a INNER JOIN clause to the query using the типытехникимтр relation
 *
 * @method     ChildмтрQuery joinWithтипытехникимтр($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the типытехникимтр relation
 *
 * @method     ChildмтрQuery leftJoinWithтипытехникимтр() Adds a LEFT JOIN clause and with to the query using the типытехникимтр relation
 * @method     ChildмтрQuery rightJoinWithтипытехникимтр() Adds a RIGHT JOIN clause and with to the query using the типытехникимтр relation
 * @method     ChildмтрQuery innerJoinWithтипытехникимтр() Adds a INNER JOIN clause and with to the query using the типытехникимтр relation
 *
 * @method     \КалендарьQuery|\подрядчикимтрQuery|\ПроектыQuery|\статуссостояниятехникиQuery|\типытехникимтрQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     Childмтр findOne(ConnectionInterface $con = null) Return the first Childмтр matching the query
 * @method     Childмтр findOneOrCreate(ConnectionInterface $con = null) Return the first Childмтр matching the query, or a new Childмтр object populated from the query conditions when no match is found
 *
 * @method     Childмтр findOneById(int $id) Return the first Childмтр filtered by the id column
 * @method     Childмтр findOneByVin(string $VIN) Return the first Childмтр filtered by the VIN column
 * @method     Childмтр findOneByтиптехники(int $Тип_техники) Return the first Childмтр filtered by the Тип_техники column
 * @method     Childмтр findOneByдата(string $Дата) Return the first Childмтр filtered by the Дата column
 * @method     Childмтр findOneByсостояниетехники(int $Состояние_техники) Return the first Childмтр filtered by the Состояние_техники column
 * @method     Childмтр findOneByподрядчик(int $Подрядчик) Return the first Childмтр filtered by the Подрядчик column
 * @method     Childмтр findOneByпроект(int $Проект) Return the first Childмтр filtered by the Проект column
 * @method     Childмтр findOneByдатаотчёта(string $Дата_отчёта) Return the first Childмтр filtered by the Дата_отчёта column *

 * @method     Childмтр requirePk($key, ConnectionInterface $con = null) Return the Childмтр by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOne(ConnectionInterface $con = null) Return the first Childмтр matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     Childмтр requireOneById(int $id) Return the first Childмтр filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByVin(string $VIN) Return the first Childмтр filtered by the VIN column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByтиптехники(int $Тип_техники) Return the first Childмтр filtered by the Тип_техники column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByдата(string $Дата) Return the first Childмтр filtered by the Дата column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByсостояниетехники(int $Состояние_техники) Return the first Childмтр filtered by the Состояние_техники column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByподрядчик(int $Подрядчик) Return the first Childмтр filtered by the Подрядчик column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByпроект(int $Проект) Return the first Childмтр filtered by the Проект column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     Childмтр requireOneByдатаотчёта(string $Дата_отчёта) Return the first Childмтр filtered by the Дата_отчёта column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     Childмтр[]|ObjectCollection find(ConnectionInterface $con = null) Return Childмтр objects based on current ModelCriteria
 * @method     Childмтр[]|ObjectCollection findById(int $id) Return Childмтр objects filtered by the id column
 * @method     Childмтр[]|ObjectCollection findByVin(string $VIN) Return Childмтр objects filtered by the VIN column
 * @method     Childмтр[]|ObjectCollection findByтиптехники(int $Тип_техники) Return Childмтр objects filtered by the Тип_техники column
 * @method     Childмтр[]|ObjectCollection findByдата(string $Дата) Return Childмтр objects filtered by the Дата column
 * @method     Childмтр[]|ObjectCollection findByсостояниетехники(int $Состояние_техники) Return Childмтр objects filtered by the Состояние_техники column
 * @method     Childмтр[]|ObjectCollection findByподрядчик(int $Подрядчик) Return Childмтр objects filtered by the Подрядчик column
 * @method     Childмтр[]|ObjectCollection findByпроект(int $Проект) Return Childмтр objects filtered by the Проект column
 * @method     Childмтр[]|ObjectCollection findByдатаотчёта(string $Дата_отчёта) Return Childмтр objects filtered by the Дата_отчёта column
 * @method     Childмтр[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class мтрQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\мтрQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\мтр', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildмтрQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildмтрQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildмтрQuery) {
            return $criteria;
        }
        $query = new ChildмтрQuery();
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
     * @return Childмтр|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = мтрTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(мтрTableMap::DATABASE_NAME);
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
     * @return Childмтр A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, VIN, Тип_техники, Дата, Состояние_техники, Подрядчик, Проект, Дата_отчёта FROM МТР WHERE id = :p0';
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
            /** @var Childмтр $obj */
            $obj = new Childмтр();
            $obj->hydrate($row);
            мтрTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return Childмтр|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(мтрTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(мтрTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the VIN column
     *
     * Example usage:
     * <code>
     * $query->filterByVin('fooValue');   // WHERE VIN = 'fooValue'
     * $query->filterByVin('%fooValue%'); // WHERE VIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByVin($vin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vin)) {
                $vin = str_replace('*', '%', $vin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_VIN, $vin, $comparison);
    }

    /**
     * Filter the query on the Тип_техники column
     *
     * Example usage:
     * <code>
     * $query->filterByтиптехники(1234); // WHERE Тип_техники = 1234
     * $query->filterByтиптехники(array(12, 34)); // WHERE Тип_техники IN (12, 34)
     * $query->filterByтиптехники(array('min' => 12)); // WHERE Тип_техники > 12
     * </code>
     *
     * @see       filterByтипытехникимтр()
     *
     * @param     mixed $�иптехники The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByтиптехники($�иптехники = null, $comparison = null)
    {
        if (is_array($�иптехники)) {
            $useMinMax = false;
            if (isset($�иптехники['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ТИП_ТЕХНИКИ, $�иптехники['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�иптехники['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ТИП_ТЕХНИКИ, $�иптехники['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ТИП_ТЕХНИКИ, $�иптехники, $comparison);
    }

    /**
     * Filter the query on the Дата column
     *
     * Example usage:
     * <code>
     * $query->filterByдата('2011-03-14'); // WHERE Дата = '2011-03-14'
     * $query->filterByдата('now'); // WHERE Дата = '2011-03-14'
     * $query->filterByдата(array('max' => 'yesterday')); // WHERE Дата > '2011-03-13'
     * </code>
     *
     * @param     mixed $�ата The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByдата($�ата = null, $comparison = null)
    {
        if (is_array($�ата)) {
            $useMinMax = false;
            if (isset($�ата['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ДАТА, $�ата['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�ата['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ДАТА, $�ата['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ДАТА, $�ата, $comparison);
    }

    /**
     * Filter the query on the Состояние_техники column
     *
     * Example usage:
     * <code>
     * $query->filterByсостояниетехники(1234); // WHERE Состояние_техники = 1234
     * $query->filterByсостояниетехники(array(12, 34)); // WHERE Состояние_техники IN (12, 34)
     * $query->filterByсостояниетехники(array('min' => 12)); // WHERE Состояние_техники > 12
     * </code>
     *
     * @see       filterByстатуссостояниятехники()
     *
     * @param     mixed $�остояниетехники The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByсостояниетехники($�остояниетехники = null, $comparison = null)
    {
        if (is_array($�остояниетехники)) {
            $useMinMax = false;
            if (isset($�остояниетехники['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_СОСТОЯНИЕ_ТЕХНИКИ, $�остояниетехники['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�остояниетехники['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_СОСТОЯНИЕ_ТЕХНИКИ, $�остояниетехники['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_СОСТОЯНИЕ_ТЕХНИКИ, $�остояниетехники, $comparison);
    }

    /**
     * Filter the query on the Подрядчик column
     *
     * Example usage:
     * <code>
     * $query->filterByподрядчик(1234); // WHERE Подрядчик = 1234
     * $query->filterByподрядчик(array(12, 34)); // WHERE Подрядчик IN (12, 34)
     * $query->filterByподрядчик(array('min' => 12)); // WHERE Подрядчик > 12
     * </code>
     *
     * @see       filterByподрядчикимтр()
     *
     * @param     mixed $�одрядчик The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByподрядчик($�одрядчик = null, $comparison = null)
    {
        if (is_array($�одрядчик)) {
            $useMinMax = false;
            if (isset($�одрядчик['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ПОДРЯДЧИК, $�одрядчик['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�одрядчик['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ПОДРЯДЧИК, $�одрядчик['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ПОДРЯДЧИК, $�одрядчик, $comparison);
    }

    /**
     * Filter the query on the Проект column
     *
     * Example usage:
     * <code>
     * $query->filterByпроект(1234); // WHERE Проект = 1234
     * $query->filterByпроект(array(12, 34)); // WHERE Проект IN (12, 34)
     * $query->filterByпроект(array('min' => 12)); // WHERE Проект > 12
     * </code>
     *
     * @see       filterByПроекты()
     *
     * @param     mixed $�роект The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByпроект($�роект = null, $comparison = null)
    {
        if (is_array($�роект)) {
            $useMinMax = false;
            if (isset($�роект['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ПРОЕКТ, $�роект['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�роект['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ПРОЕКТ, $�роект['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ПРОЕКТ, $�роект, $comparison);
    }

    /**
     * Filter the query on the Дата_отчёта column
     *
     * Example usage:
     * <code>
     * $query->filterByдатаотчёта('2011-03-14'); // WHERE Дата_отчёта = '2011-03-14'
     * $query->filterByдатаотчёта('now'); // WHERE Дата_отчёта = '2011-03-14'
     * $query->filterByдатаотчёта(array('max' => 'yesterday')); // WHERE Дата_отчёта > '2011-03-13'
     * </code>
     *
     * @param     mixed $�атаотчёта The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function filterByдатаотчёта($�атаотчёта = null, $comparison = null)
    {
        if (is_array($�атаотчёта)) {
            $useMinMax = false;
            if (isset($�атаотчёта['min'])) {
                $this->addUsingAlias(мтрTableMap::COL_ДАТА_ОТЧЁТА, $�атаотчёта['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($�атаотчёта['max'])) {
                $this->addUsingAlias(мтрTableMap::COL_ДАТА_ОТЧЁТА, $�атаотчёта['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(мтрTableMap::COL_ДАТА_ОТЧЁТА, $�атаотчёта, $comparison);
    }

    /**
     * Filter the query by a related \Календарь object
     *
     * @param \Календарь|ObjectCollection $�алендарь The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildмтрQuery The current query, for fluid interface
     */
    public function filterByКалендарь($�алендарь, $comparison = null)
    {
        if ($�алендарь instanceof \Календарь) {
            return $this
                ->addUsingAlias(мтрTableMap::COL_ДАТА, $�алендарь->getдата(), $comparison);
        } elseif ($�алендарь instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(мтрTableMap::COL_ДАТА, $�алендарь->toKeyValue('PrimaryKey', 'дата'), $comparison);
        } else {
            throw new PropelException('filterByКалендарь() only accepts arguments of type \Календарь or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Календарь relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function joinКалендарь($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Календарь');

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
            $this->addJoinObject($join, 'Календарь');
        }

        return $this;
    }

    /**
     * Use the Календарь relation Календарь object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \КалендарьQuery A secondary query class using the current class as primary query
     */
    public function useКалендарьQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinКалендарь($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Календарь', '\КалендарьQuery');
    }

    /**
     * Filter the query by a related \подрядчикимтр object
     *
     * @param \подрядчикимтр|ObjectCollection $�одрядчикимтр The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildмтрQuery The current query, for fluid interface
     */
    public function filterByподрядчикимтр($�одрядчикимтр, $comparison = null)
    {
        if ($�одрядчикимтр instanceof \подрядчикимтр) {
            return $this
                ->addUsingAlias(мтрTableMap::COL_ПОДРЯДЧИК, $�одрядчикимтр->getId(), $comparison);
        } elseif ($�одрядчикимтр instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(мтрTableMap::COL_ПОДРЯДЧИК, $�одрядчикимтр->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByподрядчикимтр() only accepts arguments of type \подрядчикимтр or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the подрядчикимтр relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function joinподрядчикимтр($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('подрядчикимтр');

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
            $this->addJoinObject($join, 'подрядчикимтр');
        }

        return $this;
    }

    /**
     * Use the подрядчикимтр relation подрядчикимтр object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \подрядчикимтрQuery A secondary query class using the current class as primary query
     */
    public function useподрядчикимтрQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinподрядчикимтр($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'подрядчикимтр', '\подрядчикимтрQuery');
    }

    /**
     * Filter the query by a related \Проекты object
     *
     * @param \Проекты|ObjectCollection $�роекты The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildмтрQuery The current query, for fluid interface
     */
    public function filterByПроекты($�роекты, $comparison = null)
    {
        if ($�роекты instanceof \Проекты) {
            return $this
                ->addUsingAlias(мтрTableMap::COL_ПРОЕКТ, $�роекты->getId(), $comparison);
        } elseif ($�роекты instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(мтрTableMap::COL_ПРОЕКТ, $�роекты->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByПроекты() only accepts arguments of type \Проекты or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Проекты relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function joinПроекты($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Проекты');

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
            $this->addJoinObject($join, 'Проекты');
        }

        return $this;
    }

    /**
     * Use the Проекты relation Проекты object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ПроектыQuery A secondary query class using the current class as primary query
     */
    public function useПроектыQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinПроекты($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Проекты', '\ПроектыQuery');
    }

    /**
     * Filter the query by a related \статуссостояниятехники object
     *
     * @param \статуссостояниятехники|ObjectCollection $�татуссостояниятехники The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildмтрQuery The current query, for fluid interface
     */
    public function filterByстатуссостояниятехники($�татуссостояниятехники, $comparison = null)
    {
        if ($�татуссостояниятехники instanceof \статуссостояниятехники) {
            return $this
                ->addUsingAlias(мтрTableMap::COL_СОСТОЯНИЕ_ТЕХНИКИ, $�татуссостояниятехники->getId(), $comparison);
        } elseif ($�татуссостояниятехники instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(мтрTableMap::COL_СОСТОЯНИЕ_ТЕХНИКИ, $�татуссостояниятехники->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByстатуссостояниятехники() only accepts arguments of type \статуссостояниятехники or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the статуссостояниятехники relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function joinстатуссостояниятехники($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('статуссостояниятехники');

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
            $this->addJoinObject($join, 'статуссостояниятехники');
        }

        return $this;
    }

    /**
     * Use the статуссостояниятехники relation статуссостояниятехники object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \статуссостояниятехникиQuery A secondary query class using the current class as primary query
     */
    public function useстатуссостояниятехникиQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinстатуссостояниятехники($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'статуссостояниятехники', '\статуссостояниятехникиQuery');
    }

    /**
     * Filter the query by a related \типытехникимтр object
     *
     * @param \типытехникимтр|ObjectCollection $�ипытехникимтр The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildмтрQuery The current query, for fluid interface
     */
    public function filterByтипытехникимтр($�ипытехникимтр, $comparison = null)
    {
        if ($�ипытехникимтр instanceof \типытехникимтр) {
            return $this
                ->addUsingAlias(мтрTableMap::COL_ТИП_ТЕХНИКИ, $�ипытехникимтр->getId(), $comparison);
        } elseif ($�ипытехникимтр instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(мтрTableMap::COL_ТИП_ТЕХНИКИ, $�ипытехникимтр->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByтипытехникимтр() only accepts arguments of type \типытехникимтр or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the типытехникимтр relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function joinтипытехникимтр($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('типытехникимтр');

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
            $this->addJoinObject($join, 'типытехникимтр');
        }

        return $this;
    }

    /**
     * Use the типытехникимтр relation типытехникимтр object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \типытехникимтрQuery A secondary query class using the current class as primary query
     */
    public function useтипытехникимтрQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinтипытехникимтр($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'типытехникимтр', '\типытехникимтрQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Childмтр $�тр Object to remove from the list of results
     *
     * @return $this|ChildмтрQuery The current query, for fluid interface
     */
    public function prune($�тр = null)
    {
        if ($�тр) {
            $this->addUsingAlias(мтрTableMap::COL_ID, $�тр->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the МТР table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(мтрTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            мтрTableMap::clearInstancePool();
            мтрTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(мтрTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(мтрTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            мтрTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            мтрTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // мтрQuery
