<?php
namespace Skeleton;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
	{

	}

    /**
     * Service Locator Config
     *
     * @return array
     */
    public function getServiceConfig() 
    {

    }

    /**
     * View Helper Config
     *
     * @return array
     */
    public function getViewHelperConfig()
    {

    }

    /**
     * Modules Merge Config
     *
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    /**
     * Zend Auto loader (by default) Config
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
