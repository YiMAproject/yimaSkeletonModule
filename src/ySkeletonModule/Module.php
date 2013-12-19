<?php
namespace ySkeletonModule;

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
     * @param  ModuleManagerInterface $manager
     * @return void
     */
    public function init(ModuleManagerInterface $manager)
    {
        // TODO: Implement init() method.
    }

    /**
     * Listen to the bootstrap event
     *
     * @param MvcEvent $e
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
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'Skeleton' => __DIR__,
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
     * @see \Zend\ServiceManager\Config
     */

    /**
     * @inheritdoc
     *
     */
    public function getServiceConfig()
    {
        // TODO: Implement getServiceConfig() method.
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
                'Skeleton\Controller\Index' => 'Skeleton\Controller\IndexController'
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