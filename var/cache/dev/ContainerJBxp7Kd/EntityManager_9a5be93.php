<?php

namespace ContainerJBxp7Kd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0de74 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereaff3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6929 = [
        
    ];

    public function getConnection()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getConnection', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getMetadataFactory', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getExpressionBuilder', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'beginTransaction', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getCache', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getCache();
    }

    public function transactional($func)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'transactional', array('func' => $func), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->transactional($func);
    }

    public function commit()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'commit', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->commit();
    }

    public function rollback()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'rollback', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getClassMetadata', array('className' => $className), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'createQuery', array('dql' => $dql), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'createNamedQuery', array('name' => $name), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'createQueryBuilder', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'flush', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'clear', array('entityName' => $entityName), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->clear($entityName);
    }

    public function close()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'close', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->close();
    }

    public function persist($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'persist', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'remove', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'refresh', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'detach', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'merge', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getRepository', array('entityName' => $entityName), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'contains', array('entity' => $entity), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getEventManager', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getConfiguration', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'isOpen', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getUnitOfWork', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getProxyFactory', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'initializeObject', array('obj' => $obj), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'getFilters', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'isFiltersStateClean', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'hasFilters', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return $this->valueHolder0de74->hasFilters();
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

        $instance->initializereaff3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0de74) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0de74 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0de74->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__get', ['name' => $name], $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        if (isset(self::$publicPropertiesf6929[$name])) {
            return $this->valueHolder0de74->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de74;

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

        $targetObject = $this->valueHolder0de74;
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
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de74;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0de74;
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
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__isset', array('name' => $name), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de74;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0de74;
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
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__unset', array('name' => $name), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de74;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0de74;
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
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__clone', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        $this->valueHolder0de74 = clone $this->valueHolder0de74;
    }

    public function __sleep()
    {
        $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, '__sleep', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;

        return array('valueHolder0de74');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereaff3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereaff3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereaff3 && ($this->initializereaff3->__invoke($valueHolder0de74, $this, 'initializeProxy', array(), $this->initializereaff3) || 1) && $this->valueHolder0de74 = $valueHolder0de74;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0de74;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0de74;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
