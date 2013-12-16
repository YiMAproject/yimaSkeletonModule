<?php
return array(
    'view_manager' => array(
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
