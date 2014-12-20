<?php
return array(
    # add an item into default navigation menu
    'navigation' => [
        # note: you can build navigation with extending default factory -
        #       service "Zend\Navigation\Service\DefaultNavigationFactory"
        #       getName() method of that service will equal to config name
        #       like "default" as below
        'default' => [
            # MVC pages are link to on-site web pages, and are defined using -
            # MVC parameters (action, controller, route, params).
            [
                'label'  => 'YiMa Modules',
                'uri'    => 'http://github.com/yimaProject',
                'target' => '_blank',
                'order'  => 1000,
            ],
            [
                'label' => 'Mvc Item',
                'route' => 'home',

                #'action' => 'index',
                #'controller' => 'index',
                #'routeMatch' => RouteMatch,

                'pages' => [
                    // same above structure recursively
                ],

                'order' => -1000,
            ],
            # URI pages are defined by a single property uri, which give you the -
            # full flexibility to link off-site pages
        ],

        // OR

        # 'default' => 'path_to_config_file' // support with Zend\Config\Factory::fromfile(..)
    ],

    # set service manager configs
    'service_manager' => [
        'factories' => [
            // ...
        ],
        'initializers' => [
            // ...
        ],
        // ...  ),
    ],

    # _________________________________________________________________________________________________________

    'view_manager' => [
        /**
         * Register additional mvc rendering strategies
         * If there is a "mvc_strategies" key of the view manager configuration, loop
         * through it. Pull each as a service from the service manager, and, if it
         * is a ListenerAggregate, attach it to the view, at priority 100. This
         * latter allows each to trigger before the default mvc rendering strategy,
         * and for them to trigger in the order they are registered.
         * @see \Zend\Mvc\View\Http\ViewManager::registerMvcRenderingStrategies
         */
        'mvc_strategies' => [],
        /**
         * Register additional view strategies
         * If there is a "strategies" key of the view manager configuration, loop
         * through it. Pull each as a service from the service manager, and, if it
         * is a ListenerAggregate, attach it to the view, at priority 100. This
         * latter allows each to trigger before the default strategy, and for them
         * to trigger in the order they are registered.
         * @see \Zend\Mvc\View\Http\ViewManager::registerViewStrategies
         */
        'strategies' => [],

        'template_path_stack' => [
           __DIR__ . '/../view',
        ],
    ],

    # _________________________________________________________________________________________________________

    'router' => [
        // 'router_class'  => 'Zend\Mvc\Router\Http\TreeRouteStack', // default, class name autoload
        // 'route_plugins' => new RoutePluginManager(),              // default, class object

        # all this options will pass to 'router_class'::factory()
        // 'route_options' => 'value',

        # 'router_class'::addRoutes()
        'routes' => [
            'skeleton-core' => [
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => [
                    'route'    => '/skeleton',
                    'defaults' => [
                        'controller' => 'YimaSkeletonModule\Controller\Index',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],

        # 'router_class'::setDefaultParams
        'default_params' => [

        ],

        # 'router_class'::addPrototypes()
        'prototypes' => [
            //'name' => RouteInterface $class
            //'name' => array $Arr, TreeRoutStack::routeFromArray($Arr)
        ],
    ],

    # _________________________________________________________________________________________________________

	# translation enabled by text-domain speccialy use for this module
	'translator' => [
		'translation_file_patterns' => [
			[
				'type'     	  => 'phparray',
				'base_dir' 	  => realpath(__DIR__ . '/../language'),
				'pattern'  	  => '%s.php',
				'text_domain' => 'YimaSkeletonModule',
			],
		],
	],

    // console ===========================================================================================

    'console' => [
        'router' => [
            'router_class' => 'Zend\Mvc\Router\Console\SimpleRouteStack', // default, class name autoload
        ],
    ],
);
