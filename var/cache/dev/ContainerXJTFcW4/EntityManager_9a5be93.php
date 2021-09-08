<?php

namespace ContainerXJTFcW4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder44946 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0995a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b59b = [
        
    ];

    public function getConnection()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getConnection', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getMetadataFactory', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getExpressionBuilder', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'beginTransaction', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getCache', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'transactional', array('func' => $func), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->transactional($func);
    }

    public function commit()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'commit', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->commit();
    }

    public function rollback()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'rollback', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getClassMetadata', array('className' => $className), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'createQuery', array('dql' => $dql), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'createNamedQuery', array('name' => $name), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'createQueryBuilder', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'flush', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'clear', array('entityName' => $entityName), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->clear($entityName);
    }

    public function close()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'close', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->close();
    }

    public function persist($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'persist', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'remove', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'refresh', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'detach', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'merge', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'contains', array('entity' => $entity), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getEventManager', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getConfiguration', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'isOpen', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getUnitOfWork', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getProxyFactory', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'initializeObject', array('obj' => $obj), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'getFilters', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'isFiltersStateClean', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'hasFilters', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return $this->valueHolder44946->hasFilters();
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

        $instance->initializer0995a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder44946) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44946 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder44946->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__get', ['name' => $name], $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        if (isset(self::$publicProperties4b59b[$name])) {
            return $this->valueHolder44946->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44946;

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

        $targetObject = $this->valueHolder44946;
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
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44946;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder44946;
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
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__isset', array('name' => $name), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44946;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder44946;
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
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__unset', array('name' => $name), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44946;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder44946;
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
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__clone', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        $this->valueHolder44946 = clone $this->valueHolder44946;
    }

    public function __sleep()
    {
        $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, '__sleep', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;

        return array('valueHolder44946');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0995a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0995a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0995a && ($this->initializer0995a->__invoke($valueHolder44946, $this, 'initializeProxy', array(), $this->initializer0995a) || 1) && $this->valueHolder44946 = $valueHolder44946;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44946;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44946;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
