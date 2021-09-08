<?php

namespace ContainerPtpRIDk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54182 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2121 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties96286 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getConnection', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getMetadataFactory', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getExpressionBuilder', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'beginTransaction', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getCache', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'transactional', array('func' => $func), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->transactional($func);
    }

    public function commit()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'commit', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->commit();
    }

    public function rollback()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'rollback', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getClassMetadata', array('className' => $className), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'createQuery', array('dql' => $dql), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'createNamedQuery', array('name' => $name), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'createQueryBuilder', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'flush', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'clear', array('entityName' => $entityName), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->clear($entityName);
    }

    public function close()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'close', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->close();
    }

    public function persist($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'persist', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'remove', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'refresh', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'detach', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'merge', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'contains', array('entity' => $entity), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getEventManager', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getConfiguration', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'isOpen', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getUnitOfWork', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getProxyFactory', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'initializeObject', array('obj' => $obj), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'getFilters', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'isFiltersStateClean', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'hasFilters', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return $this->valueHolder54182->hasFilters();
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

        $instance->initializerc2121 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54182) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54182 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54182->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__get', ['name' => $name], $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        if (isset(self::$publicProperties96286[$name])) {
            return $this->valueHolder54182->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54182;

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

        $targetObject = $this->valueHolder54182;
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
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54182;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54182;
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
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__isset', array('name' => $name), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54182;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54182;
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
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__unset', array('name' => $name), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54182;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54182;
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
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__clone', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        $this->valueHolder54182 = clone $this->valueHolder54182;
    }

    public function __sleep()
    {
        $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, '__sleep', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;

        return array('valueHolder54182');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc2121 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc2121;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2121 && ($this->initializerc2121->__invoke($valueHolder54182, $this, 'initializeProxy', array(), $this->initializerc2121) || 1) && $this->valueHolder54182 = $valueHolder54182;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54182;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54182;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
