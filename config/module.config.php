<?php
return array(
    # add an item into default navigation menu
    'navigation' => array(
        'default' => array(
            # MVC pages are link to on-site web pages, and are defined using -
            # MVC parameters (action, controller, route, params).
            array(
                'label'  => 'YiMa Modules',
                'uri'    => 'http://github.com/yimaProject',
                'target' => '_blank',
                'order'  => 1000,
            ),
            # URI pages are defined by a single property uri, which give you the -
            # full flexibility to link off-site pages

        ),
    ),

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
        /**
         * Register additional mvc rendering strategies
         * If there is a "mvc_strategies" key of the view manager configuration, loop
         * through it. Pull each as a service from the service manager, and, if it
         * is a ListenerAggregate, attach it to the view, at priority 100. This
         * latter allows each to trigger before the default mvc rendering strategy,
         * and for them to trigger in the order they are registered.
         * @see \Zend\Mvc\View\Http\ViewManager::registerMvcRenderingStrategies
         */
        'mvc_strategies' => array(),
        /**
         * Register additional view strategies
         * If there is a "strategies" key of the view manager configuration, loop
         * through it. Pull each as a service from the service manager, and, if it
         * is a ListenerAggregate, attach it to the view, at priority 100. This
         * latter allows each to trigger before the default strategy, and for them
         * to trigger in the order they are registered.
         * @see \Zend\Mvc\View\Http\ViewManager::registerViewStrategies
         */
        'strategies' => array(),

        'template_path_stack' => array(
           __DIR__ . '/../view',
        ),
    ),

    # _________________________________________________________________________________________________________

    'router' => array(
        // 'router_class'  => 'Zend\Mvc\Router\Http\TreeRouteStack', // default, class name autoload
        // 'route_plugins' => new RoutePluginManager(),              // default, class object

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
