<?php

namespace Container1DD5Wpy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0d985 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2fb84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4e3ee = [
        
    ];

    public function getConnection()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getConnection', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getMetadataFactory', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getExpressionBuilder', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'beginTransaction', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getCache', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'transactional', array('func' => $func), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->transactional($func);
    }

    public function commit()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'commit', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->commit();
    }

    public function rollback()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'rollback', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getClassMetadata', array('className' => $className), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'createQuery', array('dql' => $dql), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'createNamedQuery', array('name' => $name), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'createQueryBuilder', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'flush', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'clear', array('entityName' => $entityName), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->clear($entityName);
    }

    public function close()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'close', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->close();
    }

    public function persist($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'persist', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'remove', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'refresh', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'detach', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'merge', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'contains', array('entity' => $entity), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getEventManager', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getConfiguration', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'isOpen', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getUnitOfWork', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getProxyFactory', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'initializeObject', array('obj' => $obj), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'getFilters', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'isFiltersStateClean', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'hasFilters', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return $this->valueHolder0d985->hasFilters();
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

        $instance->initializer2fb84 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0d985) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0d985 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0d985->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__get', ['name' => $name], $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        if (isset(self::$publicProperties4e3ee[$name])) {
            return $this->valueHolder0d985->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d985;

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

        $targetObject = $this->valueHolder0d985;
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
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d985;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0d985;
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
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__isset', array('name' => $name), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d985;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0d985;
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
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__unset', array('name' => $name), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d985;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0d985;
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
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__clone', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        $this->valueHolder0d985 = clone $this->valueHolder0d985;
    }

    public function __sleep()
    {
        $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, '__sleep', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;

        return array('valueHolder0d985');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2fb84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2fb84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2fb84 && ($this->initializer2fb84->__invoke($valueHolder0d985, $this, 'initializeProxy', array(), $this->initializer2fb84) || 1) && $this->valueHolder0d985 = $valueHolder0d985;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0d985;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0d985;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
