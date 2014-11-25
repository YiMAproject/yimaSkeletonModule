<?php
namespace yimaSkeletonModule;

use Zend\ModuleManager\Feature\InitProviderInterface;
use Zend\ModuleManager\ModuleManagerInterface;

use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\EventManager\EventInterface;
use Zend\Mvc\MvcEvent;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ControllerPluginProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

use Zend\ModuleManager\Feature\LocatorRegisteredInterface;

class Module implements
    InitProviderInterface,
    BootstrapListenerInterface,
    AutoloaderProviderInterface,

    ConfigProviderInterface,

    ServiceProviderInterface,
    ControllerProviderInterface,
    ControllerPluginProviderInterface,
    ViewHelperProviderInterface,

    LocatorRegisteredInterface
{
    /**
     * Initialize workflow
     *
     * @param  ModuleManagerInterface $moduleManager
     * @return void
     */
    public function init(ModuleManagerInterface $moduleManager)
    {
        // TODO: Implement init() method.
    }

    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface|MvcEvent $e
     * @return array
     */
    public function onBootstrap(EventInterface $e)
    {
        // TODO: Implement onBootstrap() method.
    }


    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            # this one may speed up classes autoloading instead of StandardAutoload
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/../../autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        // TODO: Implement getConfig() method.
        // ...

        // usually return like this
        return include __DIR__ . '/../../config/module.config.php';
    }


    /**
     * Implemented Service Listener Features --------------------------------------------------\
     *
     */

    /**
     * @inheritdoc
     *
     * @see \Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                # be aware to using "\" separator
                # 'factory_service' => __NAMESPACE__.'\Service\StaticUriFactory'
            ),
        );
    }

    /**
     * @inheritdoc
     *
     */
    public function getControllerConfig()
    {
        /* Merged Config Key "controller" */
        return array(
            'invokables' => array(
                'yimaSkeletonModule\Controller\Index' => 'yimaSkeletonModule\Controller\IndexController'
            )
        );
    }

    /**
     * @inheritdoc
     *
     */
    public function getControllerPluginConfig()
    {
        // TODO: Implement getControllerPluginConfig() method.
    }

    /**
     * @inheritdoc
     *
     */
    public function getViewHelperConfig()
    {
        // TODO: Implement getViewHelperConfig() method.
    }
}
