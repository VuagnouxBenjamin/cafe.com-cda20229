<?php

namespace ContainerWVOcgZL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1dbec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09b18 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6cb7c = [
        
    ];

    public function getConnection()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getConnection', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getMetadataFactory', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getExpressionBuilder', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'beginTransaction', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getCache', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'transactional', array('func' => $func), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->transactional($func);
    }

    public function commit()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'commit', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->commit();
    }

    public function rollback()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'rollback', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getClassMetadata', array('className' => $className), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'createQuery', array('dql' => $dql), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'createNamedQuery', array('name' => $name), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'createQueryBuilder', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'flush', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'clear', array('entityName' => $entityName), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->clear($entityName);
    }

    public function close()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'close', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->close();
    }

    public function persist($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'persist', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'remove', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'refresh', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'detach', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'merge', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'contains', array('entity' => $entity), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getEventManager', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getConfiguration', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'isOpen', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getUnitOfWork', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getProxyFactory', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'initializeObject', array('obj' => $obj), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'getFilters', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'isFiltersStateClean', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'hasFilters', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return $this->valueHolder1dbec->hasFilters();
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

        $instance->initializer09b18 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1dbec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1dbec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1dbec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__get', ['name' => $name], $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        if (isset(self::$publicProperties6cb7c[$name])) {
            return $this->valueHolder1dbec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dbec;

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

        $targetObject = $this->valueHolder1dbec;
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
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dbec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1dbec;
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
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__isset', array('name' => $name), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dbec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1dbec;
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
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__unset', array('name' => $name), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1dbec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1dbec;
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
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__clone', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        $this->valueHolder1dbec = clone $this->valueHolder1dbec;
    }

    public function __sleep()
    {
        $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, '__sleep', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;

        return array('valueHolder1dbec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09b18 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09b18;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09b18 && ($this->initializer09b18->__invoke($valueHolder1dbec, $this, 'initializeProxy', array(), $this->initializer09b18) || 1) && $this->valueHolder1dbec = $valueHolder1dbec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1dbec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1dbec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
