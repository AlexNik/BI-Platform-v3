<?php

namespace Base;

use \выработка as Childвыработка;
use \выработкаQuery as ChildвыработкаQuery;
use \типыработ as Childтипыработ;
use \типыработQuery as ChildтипыработQuery;
use \физическиеобъёмы as Childфизическиеобъёмы;
use \физическиеобъёмыQuery as ChildфизическиеобъёмыQuery;
use \Exception;
use \PDO;
use Map\выработкаTableMap;
use Map\типыработTableMap;
use Map\физическиеобъёмыTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'Типы_работ' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class типыработ implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\типыработTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     * 
     * @var        int
     */
    protected $id;

    /**
     * The value for the тип_работ field.
     * 
     * @var        string
     */
    protected $тип_работ;

    /**
     * The value for the единицы_измерения field.
     * 
     * @var        string
     */
    protected $единицы_измерения;

    /**
     * The value for the отображение field.
     * 
     * @var        boolean
     */
    protected $отображение;

    /**
     * @var        ObjectCollection|Childвыработка[] Collection to store aggregation of Childвыработка objects.
     */
    protected $collвыработкаs;
    protected $collвыработкаsPartial;

    /**
     * @var        ObjectCollection|Childфизическиеобъёмы[] Collection to store aggregation of Childфизическиеобъёмы objects.
     */
    protected $collфизическиеобъёмыs;
    protected $collфизическиеобъёмыsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|Childвыработка[]
     */
    protected $�ыработкаsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|Childфизическиеобъёмы[]
     */
    protected $�изическиеобъёмыsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\типыработ object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>типыработ</code> instance.  If
     * <code>obj</code> is an instance of <code>типыработ</code>, delegates to
     * <code>equals(типыработ)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|типыработ The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));
        
        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }
        
        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [тип_работ] column value.
     * 
     * @return string
     */
    public function getтипработ()
    {
        return $this->тип_работ;
    }

    /**
     * Get the [единицы_измерения] column value.
     * 
     * @return string
     */
    public function getединицыизмерения()
    {
        return $this->единицы_измерения;
    }

    /**
     * Get the [отображение] column value.
     * 
     * @return boolean
     */
    public function getотображение()
    {
        return $this->отображение;
    }

    /**
     * Get the [отображение] column value.
     * 
     * @return boolean
     */
    public function isотображение()
    {
        return $this->getотображение();
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[типыработTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [тип_работ] column.
     * 
     * @param string $v new value
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function setтипработ($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->тип_работ !== $v) {
            $this->тип_работ = $v;
            $this->modifiedColumns[типыработTableMap::COL_ТИП_РАБОТ] = true;
        }

        return $this;
    } // setтипработ()

    /**
     * Set the value of [единицы_измерения] column.
     * 
     * @param string $v new value
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function setединицыизмерения($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->единицы_измерения !== $v) {
            $this->единицы_измерения = $v;
            $this->modifiedColumns[типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ] = true;
        }

        return $this;
    } // setединицыизмерения()

    /**
     * Sets the value of the [отображение] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param  boolean|integer|string $v The new value
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function setотображение($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->отображение !== $v) {
            $this->отображение = $v;
            $this->modifiedColumns[типыработTableMap::COL_ОТОБРАЖЕНИЕ] = true;
        }

        return $this;
    } // setотображение()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : типыработTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : типыработTableMap::translateFieldName('типработ', TableMap::TYPE_PHPNAME, $indexType)];
            $this->тип_работ = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : типыработTableMap::translateFieldName('единицыизмерения', TableMap::TYPE_PHPNAME, $indexType)];
            $this->единицы_измерения = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : типыработTableMap::translateFieldName('отображение', TableMap::TYPE_PHPNAME, $indexType)];
            $this->отображение = (null !== $col) ? (boolean) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = типыработTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\типыработ'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(типыработTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildтипыработQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collвыработкаs = null;

            $this->collфизическиеобъёмыs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see типыработ::setDeleted()
     * @see типыработ::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(типыработTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildтипыработQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(типыработTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $isInsert = $this->isNew();
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                типыработTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->�ыработкаsScheduledForDeletion !== null) {
                if (!$this->�ыработкаsScheduledForDeletion->isEmpty()) {
                    \выработкаQuery::create()
                        ->filterByPrimaryKeys($this->�ыработкаsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->�ыработкаsScheduledForDeletion = null;
                }
            }

            if ($this->collвыработкаs !== null) {
                foreach ($this->collвыработкаs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->�изическиеобъёмыsScheduledForDeletion !== null) {
                if (!$this->�изическиеобъёмыsScheduledForDeletion->isEmpty()) {
                    \физическиеобъёмыQuery::create()
                        ->filterByPrimaryKeys($this->�изическиеобъёмыsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->�изическиеобъёмыsScheduledForDeletion = null;
                }
            }

            if ($this->collфизическиеобъёмыs !== null) {
                foreach ($this->collфизическиеобъёмыs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[типыработTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . типыработTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(типыработTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(типыработTableMap::COL_ТИП_РАБОТ)) {
            $modifiedColumns[':p' . $index++]  = 'Тип_работ';
        }
        if ($this->isColumnModified(типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ)) {
            $modifiedColumns[':p' . $index++]  = 'Единицы_измерения';
        }
        if ($this->isColumnModified(типыработTableMap::COL_ОТОБРАЖЕНИЕ)) {
            $modifiedColumns[':p' . $index++]  = 'Отображение';
        }

        $sql = sprintf(
            'INSERT INTO Типы_работ (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':                        
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'Тип_работ':                        
                        $stmt->bindValue($identifier, $this->тип_работ, PDO::PARAM_STR);
                        break;
                    case 'Единицы_измерения':                        
                        $stmt->bindValue($identifier, $this->единицы_измерения, PDO::PARAM_STR);
                        break;
                    case 'Отображение':
                        $stmt->bindValue($identifier, (int) $this->отображение, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = типыработTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getтипработ();
                break;
            case 2:
                return $this->getединицыизмерения();
                break;
            case 3:
                return $this->getотображение();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['типыработ'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['типыработ'][$this->hashCode()] = true;
        $keys = типыработTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getтипработ(),
            $keys[2] => $this->getединицыизмерения(),
            $keys[3] => $this->getотображение(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }
        
        if ($includeForeignObjects) {
            if (null !== $this->collвыработкаs) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = '�ыработкаs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'Выработкаs';
                        break;
                    default:
                        $key = 'выработкаs';
                }
        
                $result[$key] = $this->collвыработкаs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collфизическиеобъёмыs) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = '�изическиеобъёмыs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'Физические_объёмыs';
                        break;
                    default:
                        $key = 'физическиеобъёмыs';
                }
        
                $result[$key] = $this->collфизическиеобъёмыs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\типыработ
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = типыработTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\типыработ
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setтипработ($value);
                break;
            case 2:
                $this->setединицыизмерения($value);
                break;
            case 3:
                $this->setотображение($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = типыработTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setтипработ($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setединицыизмерения($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setотображение($arr[$keys[3]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\типыработ The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(типыработTableMap::DATABASE_NAME);

        if ($this->isColumnModified(типыработTableMap::COL_ID)) {
            $criteria->add(типыработTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(типыработTableMap::COL_ТИП_РАБОТ)) {
            $criteria->add(типыработTableMap::COL_ТИП_РАБОТ, $this->тип_работ);
        }
        if ($this->isColumnModified(типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ)) {
            $criteria->add(типыработTableMap::COL_ЕДИНИЦЫ_ИЗМЕРЕНИЯ, $this->единицы_измерения);
        }
        if ($this->isColumnModified(типыработTableMap::COL_ОТОБРАЖЕНИЕ)) {
            $criteria->add(типыработTableMap::COL_ОТОБРАЖЕНИЕ, $this->отображение);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildтипыработQuery::create();
        $criteria->add(типыработTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }
        
    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \типыработ (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setтипработ($this->getтипработ());
        $copyObj->setединицыизмерения($this->getединицыизмерения());
        $copyObj->setотображение($this->getотображение());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getвыработкаs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addвыработка($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getфизическиеобъёмыs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addфизическиеобъёмы($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \типыработ Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('выработка' == $relationName) {
            return $this->initвыработкаs();
        }
        if ('физическиеобъёмы' == $relationName) {
            return $this->initфизическиеобъёмыs();
        }
    }

    /**
     * Clears out the collвыработкаs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addвыработкаs()
     */
    public function clearвыработкаs()
    {
        $this->collвыработкаs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collвыработкаs collection loaded partially.
     */
    public function resetPartialвыработкаs($v = true)
    {
        $this->collвыработкаsPartial = $v;
    }

    /**
     * Initializes the collвыработкаs collection.
     *
     * By default this just sets the collвыработкаs collection to an empty array (like clearcollвыработкаs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initвыработкаs($overrideExisting = true)
    {
        if (null !== $this->collвыработкаs && !$overrideExisting) {
            return;
        }

        $collectionClassName = выработкаTableMap::getTableMap()->getCollectionClassName();

        $this->collвыработкаs = new $collectionClassName;
        $this->collвыработкаs->setModel('\выработка');
    }

    /**
     * Gets an array of Childвыработка objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Childтипыработ is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|Childвыработка[] List of Childвыработка objects
     * @throws PropelException
     */
    public function getвыработкаs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collвыработкаsPartial && !$this->isNew();
        if (null === $this->collвыработкаs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collвыработкаs) {
                // return empty collection
                $this->initвыработкаs();
            } else {
                $collвыработкаs = ChildвыработкаQuery::create(null, $criteria)
                    ->filterByтипыработ($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collвыработкаsPartial && count($collвыработкаs)) {
                        $this->initвыработкаs(false);

                        foreach ($collвыработкаs as $obj) {
                            if (false == $this->collвыработкаs->contains($obj)) {
                                $this->collвыработкаs->append($obj);
                            }
                        }

                        $this->collвыработкаsPartial = true;
                    }

                    return $collвыработкаs;
                }

                if ($partial && $this->collвыработкаs) {
                    foreach ($this->collвыработкаs as $obj) {
                        if ($obj->isNew()) {
                            $collвыработкаs[] = $obj;
                        }
                    }
                }

                $this->collвыработкаs = $collвыработкаs;
                $this->collвыработкаsPartial = false;
            }
        }

        return $this->collвыработкаs;
    }

    /**
     * Sets a collection of Childвыработка objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $�ыработкаs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|Childтипыработ The current object (for fluent API support)
     */
    public function setвыработкаs(Collection $�ыработкаs, ConnectionInterface $con = null)
    {
        /** @var Childвыработка[] $�ыработкаsToDelete */
        $�ыработкаsToDelete = $this->getвыработкаs(new Criteria(), $con)->diff($�ыработкаs);

        
        $this->�ыработкаsScheduledForDeletion = $�ыработкаsToDelete;

        foreach ($�ыработкаsToDelete as $�ыработкаRemoved) {
            $�ыработкаRemoved->setтипыработ(null);
        }

        $this->collвыработкаs = null;
        foreach ($�ыработкаs as $�ыработка) {
            $this->addвыработка($�ыработка);
        }

        $this->collвыработкаs = $�ыработкаs;
        $this->collвыработкаsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related выработка objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related выработка objects.
     * @throws PropelException
     */
    public function countвыработкаs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collвыработкаsPartial && !$this->isNew();
        if (null === $this->collвыработкаs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collвыработкаs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getвыработкаs());
            }

            $query = ChildвыработкаQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByтипыработ($this)
                ->count($con);
        }

        return count($this->collвыработкаs);
    }

    /**
     * Method called to associate a Childвыработка object to this object
     * through the Childвыработка foreign key attribute.
     *
     * @param  Childвыработка $l Childвыработка
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function addвыработка(Childвыработка $l)
    {
        if ($this->collвыработкаs === null) {
            $this->initвыработкаs();
            $this->collвыработкаsPartial = true;
        }

        if (!$this->collвыработкаs->contains($l)) {
            $this->doAddвыработка($l);

            if ($this->�ыработкаsScheduledForDeletion and $this->�ыработкаsScheduledForDeletion->contains($l)) {
                $this->�ыработкаsScheduledForDeletion->remove($this->�ыработкаsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param Childвыработка $�ыработка The Childвыработка object to add.
     */
    protected function doAddвыработка(Childвыработка $�ыработка)
    {
        $this->collвыработкаs[]= $�ыработка;
        $�ыработка->setтипыработ($this);
    }

    /**
     * @param  Childвыработка $�ыработка The Childвыработка object to remove.
     * @return $this|Childтипыработ The current object (for fluent API support)
     */
    public function removeвыработка(Childвыработка $�ыработка)
    {
        if ($this->getвыработкаs()->contains($�ыработка)) {
            $pos = $this->collвыработкаs->search($�ыработка);
            $this->collвыработкаs->remove($pos);
            if (null === $this->�ыработкаsScheduledForDeletion) {
                $this->�ыработкаsScheduledForDeletion = clone $this->collвыработкаs;
                $this->�ыработкаsScheduledForDeletion->clear();
            }
            $this->�ыработкаsScheduledForDeletion[]= clone $�ыработка;
            $�ыработка->setтипыработ(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this типыработ is new, it will return
     * an empty collection; or if this типыработ has previously
     * been saved, it will retrieve related выработкаs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in типыработ.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|Childвыработка[] List of Childвыработка objects
     */
    public function getвыработкаsJoinКалендарь(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildвыработкаQuery::create(null, $criteria);
        $query->joinWith('Календарь', $joinBehavior);

        return $this->getвыработкаs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this типыработ is new, it will return
     * an empty collection; or if this типыработ has previously
     * been saved, it will retrieve related выработкаs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in типыработ.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|Childвыработка[] List of Childвыработка objects
     */
    public function getвыработкаsJoinтипытехникивыработка(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildвыработкаQuery::create(null, $criteria);
        $query->joinWith('типытехникивыработка', $joinBehavior);

        return $this->getвыработкаs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this типыработ is new, it will return
     * an empty collection; or if this типыработ has previously
     * been saved, it will retrieve related выработкаs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in типыработ.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|Childвыработка[] List of Childвыработка objects
     */
    public function getвыработкаsJoinучасткиработ(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildвыработкаQuery::create(null, $criteria);
        $query->joinWith('участкиработ', $joinBehavior);

        return $this->getвыработкаs($query, $con);
    }

    /**
     * Clears out the collфизическиеобъёмыs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addфизическиеобъёмыs()
     */
    public function clearфизическиеобъёмыs()
    {
        $this->collфизическиеобъёмыs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collфизическиеобъёмыs collection loaded partially.
     */
    public function resetPartialфизическиеобъёмыs($v = true)
    {
        $this->collфизическиеобъёмыsPartial = $v;
    }

    /**
     * Initializes the collфизическиеобъёмыs collection.
     *
     * By default this just sets the collфизическиеобъёмыs collection to an empty array (like clearcollфизическиеобъёмыs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initфизическиеобъёмыs($overrideExisting = true)
    {
        if (null !== $this->collфизическиеобъёмыs && !$overrideExisting) {
            return;
        }

        $collectionClassName = физическиеобъёмыTableMap::getTableMap()->getCollectionClassName();

        $this->collфизическиеобъёмыs = new $collectionClassName;
        $this->collфизическиеобъёмыs->setModel('\физическиеобъёмы');
    }

    /**
     * Gets an array of Childфизическиеобъёмы objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Childтипыработ is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|Childфизическиеобъёмы[] List of Childфизическиеобъёмы objects
     * @throws PropelException
     */
    public function getфизическиеобъёмыs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collфизическиеобъёмыsPartial && !$this->isNew();
        if (null === $this->collфизическиеобъёмыs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collфизическиеобъёмыs) {
                // return empty collection
                $this->initфизическиеобъёмыs();
            } else {
                $collфизическиеобъёмыs = ChildфизическиеобъёмыQuery::create(null, $criteria)
                    ->filterByтипыработ($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collфизическиеобъёмыsPartial && count($collфизическиеобъёмыs)) {
                        $this->initфизическиеобъёмыs(false);

                        foreach ($collфизическиеобъёмыs as $obj) {
                            if (false == $this->collфизическиеобъёмыs->contains($obj)) {
                                $this->collфизическиеобъёмыs->append($obj);
                            }
                        }

                        $this->collфизическиеобъёмыsPartial = true;
                    }

                    return $collфизическиеобъёмыs;
                }

                if ($partial && $this->collфизическиеобъёмыs) {
                    foreach ($this->collфизическиеобъёмыs as $obj) {
                        if ($obj->isNew()) {
                            $collфизическиеобъёмыs[] = $obj;
                        }
                    }
                }

                $this->collфизическиеобъёмыs = $collфизическиеобъёмыs;
                $this->collфизическиеобъёмыsPartial = false;
            }
        }

        return $this->collфизическиеобъёмыs;
    }

    /**
     * Sets a collection of Childфизическиеобъёмы objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $�изическиеобъёмыs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|Childтипыработ The current object (for fluent API support)
     */
    public function setфизическиеобъёмыs(Collection $�изическиеобъёмыs, ConnectionInterface $con = null)
    {
        /** @var Childфизическиеобъёмы[] $�изическиеобъёмыsToDelete */
        $�изическиеобъёмыsToDelete = $this->getфизическиеобъёмыs(new Criteria(), $con)->diff($�изическиеобъёмыs);

        
        $this->�изическиеобъёмыsScheduledForDeletion = $�изическиеобъёмыsToDelete;

        foreach ($�изическиеобъёмыsToDelete as $�изическиеобъёмыRemoved) {
            $�изическиеобъёмыRemoved->setтипыработ(null);
        }

        $this->collфизическиеобъёмыs = null;
        foreach ($�изическиеобъёмыs as $�изическиеобъёмы) {
            $this->addфизическиеобъёмы($�изическиеобъёмы);
        }

        $this->collфизическиеобъёмыs = $�изическиеобъёмыs;
        $this->collфизическиеобъёмыsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related физическиеобъёмы objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related физическиеобъёмы objects.
     * @throws PropelException
     */
    public function countфизическиеобъёмыs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collфизическиеобъёмыsPartial && !$this->isNew();
        if (null === $this->collфизическиеобъёмыs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collфизическиеобъёмыs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getфизическиеобъёмыs());
            }

            $query = ChildфизическиеобъёмыQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByтипыработ($this)
                ->count($con);
        }

        return count($this->collфизическиеобъёмыs);
    }

    /**
     * Method called to associate a Childфизическиеобъёмы object to this object
     * through the Childфизическиеобъёмы foreign key attribute.
     *
     * @param  Childфизическиеобъёмы $l Childфизическиеобъёмы
     * @return $this|\типыработ The current object (for fluent API support)
     */
    public function addфизическиеобъёмы(Childфизическиеобъёмы $l)
    {
        if ($this->collфизическиеобъёмыs === null) {
            $this->initфизическиеобъёмыs();
            $this->collфизическиеобъёмыsPartial = true;
        }

        if (!$this->collфизическиеобъёмыs->contains($l)) {
            $this->doAddфизическиеобъёмы($l);

            if ($this->�изическиеобъёмыsScheduledForDeletion and $this->�изическиеобъёмыsScheduledForDeletion->contains($l)) {
                $this->�изическиеобъёмыsScheduledForDeletion->remove($this->�изическиеобъёмыsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param Childфизическиеобъёмы $�изическиеобъёмы The Childфизическиеобъёмы object to add.
     */
    protected function doAddфизическиеобъёмы(Childфизическиеобъёмы $�изическиеобъёмы)
    {
        $this->collфизическиеобъёмыs[]= $�изическиеобъёмы;
        $�изическиеобъёмы->setтипыработ($this);
    }

    /**
     * @param  Childфизическиеобъёмы $�изическиеобъёмы The Childфизическиеобъёмы object to remove.
     * @return $this|Childтипыработ The current object (for fluent API support)
     */
    public function removeфизическиеобъёмы(Childфизическиеобъёмы $�изическиеобъёмы)
    {
        if ($this->getфизическиеобъёмыs()->contains($�изическиеобъёмы)) {
            $pos = $this->collфизическиеобъёмыs->search($�изическиеобъёмы);
            $this->collфизическиеобъёмыs->remove($pos);
            if (null === $this->�изическиеобъёмыsScheduledForDeletion) {
                $this->�изическиеобъёмыsScheduledForDeletion = clone $this->collфизическиеобъёмыs;
                $this->�изическиеобъёмыsScheduledForDeletion->clear();
            }
            $this->�изическиеобъёмыsScheduledForDeletion[]= clone $�изическиеобъёмы;
            $�изическиеобъёмы->setтипыработ(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this типыработ is new, it will return
     * an empty collection; or if this типыработ has previously
     * been saved, it will retrieve related физическиеобъёмыs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in типыработ.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|Childфизическиеобъёмы[] List of Childфизическиеобъёмы objects
     */
    public function getфизическиеобъёмыsJoinучасткиработ(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildфизическиеобъёмыQuery::create(null, $criteria);
        $query->joinWith('участкиработ', $joinBehavior);

        return $this->getфизическиеобъёмыs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this типыработ is new, it will return
     * an empty collection; or if this типыработ has previously
     * been saved, it will retrieve related физическиеобъёмыs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in типыработ.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|Childфизическиеобъёмы[] List of Childфизическиеобъёмы objects
     */
    public function getфизическиеобъёмыsJoinКалендарь(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildфизическиеобъёмыQuery::create(null, $criteria);
        $query->joinWith('Календарь', $joinBehavior);

        return $this->getфизическиеобъёмыs($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->тип_работ = null;
        $this->единицы_измерения = null;
        $this->отображение = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collвыработкаs) {
                foreach ($this->collвыработкаs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collфизическиеобъёмыs) {
                foreach ($this->collфизическиеобъёмыs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collвыработкаs = null;
        $this->collфизическиеобъёмыs = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(типыработTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {

    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
