<?php

namespace ContainerQWaUlxc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec882 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7f047 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties61cfa = [
        
    ];

    public function getConnection()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getConnection', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getMetadataFactory', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getExpressionBuilder', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'beginTransaction', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getCache', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'transactional', array('func' => $func), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->transactional($func);
    }

    public function commit()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'commit', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->commit();
    }

    public function rollback()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'rollback', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getClassMetadata', array('className' => $className), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'createQuery', array('dql' => $dql), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'createNamedQuery', array('name' => $name), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'createQueryBuilder', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'flush', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'clear', array('entityName' => $entityName), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->clear($entityName);
    }

    public function close()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'close', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->close();
    }

    public function persist($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'persist', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'remove', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'refresh', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'detach', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'merge', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'contains', array('entity' => $entity), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getEventManager', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getConfiguration', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'isOpen', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getUnitOfWork', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getProxyFactory', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'initializeObject', array('obj' => $obj), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'getFilters', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'isFiltersStateClean', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'hasFilters', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return $this->valueHolderec882->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7f047 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec882) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec882 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec882->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__get', ['name' => $name], $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        if (isset(self::$publicProperties61cfa[$name])) {
            return $this->valueHolderec882->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec882;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec882;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec882;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec882;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__isset', array('name' => $name), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec882;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec882;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__unset', array('name' => $name), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec882;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec882;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__clone', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        $this->valueHolderec882 = clone $this->valueHolderec882;
    }

    public function __sleep()
    {
        $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, '__sleep', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;

        return array('valueHolderec882');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7f047 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7f047;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7f047 && ($this->initializer7f047->__invoke($valueHolderec882, $this, 'initializeProxy', array(), $this->initializer7f047) || 1) && $this->valueHolderec882 = $valueHolderec882;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec882;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec882;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
