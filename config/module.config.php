<?php
use Zend\Mvc\Router\RoutePluginManager;

return array(
    # set service manager configs
    'service_manager' => array(
        'factories' => array(
            // ...
        ),
        'initializers' => array(
            // ...
        ),
        // ...  ),
    ),

    # _________________________________________________________________________________________________________

    'view_manager' => array(
        'template_path_stack' => array(
           __DIR__ . '/../view',
        ),
    ),

    # _________________________________________________________________________________________________________

    'router' => array(
        'router_class'  => 'Zend\Mvc\Router\Http\TreeRouteStack', // default, class name autoload
        'route_plugins' => new RoutePluginManager(),              // default, class object

        # all this options will pass to 'router_class'::factory()
        // 'route_options' => 'value',

        # 'router_class'::addRoutes()
        'routes' => array(
            'skeleton-core' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/skeleton',
                    'defaults' => array(
                        'controller' => 'YimaSkeletonModule\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),

        # 'router_class'::setDefaultParams
        'default_params' => array(

        ),

        # 'router_class'::addPrototypes()
        'prototypes' => array(
            //'name' => RouteInterface $class
            //'name' => array $Arr, TreeRoutStack::routeFromArray($Arr)
        ),
    ),

    # _________________________________________________________________________________________________________

	# translation enabled by text-domain speccialy use for this module
	'translator' => array(
		'translation_file_patterns' => array(
			array(
				'type'     	  => 'phparray',
				'base_dir' 	  => realpath(__DIR__ . '/../language'),
				'pattern'  	  => '%s.php',
				'text_domain' => 'YimaSkeletonModule',
			),
		),
	),

    // console ===========================================================================================

    'console' => array(
        'router' => array(
            'router_class' => 'Zend\Mvc\Router\Console\SimpleRouteStack', // default, class name autoload
        ),
    ),
);
