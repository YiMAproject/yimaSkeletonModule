<?php
return array(
	'controllers' => array(
		'invokables' => array(
			'Skeleton\Controller\Index' => 'Skeleton\Controller\IndexController'
		),
	),

    'view_manager' => array(
        /* override by module.global.config.php
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        */
        'template_map' => array(
            #'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
        ),
        'template_path_stack' => array(
           __DIR__ . '/../view',
        ),
    ),

    'router' => array(
        'routes' => array(
            # application Home Page
            'skeleton-core' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/skeleton',
                    'defaults' => array(
                        'controller' => 'Skeleton\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

	# translation enabled by text-domain speccialy use for this module
	'translator' => array(
		'translation_file_patterns' => array(
			array(
				'type'     	  => 'phparray',
				'base_dir' 	  => realpath(__DIR__ . '/../language'),
				'pattern'  	  => '%s.php',
				'text_domain' => 'Skeleton',
			),
		),
	),
);
