<?php
/**
 * This file is placed here for compatibility with Zendframework 2's ModuleManager.
 * It allows usage of this module even without composer.
 * The original Module.php is in 'src/ySkeletonModule' in order to respect PSR-0
 *
 * if we use composer :
 * "autoload" : {
        "psr-0" : {
            "ySkeletonModule\\" : "src/"
    },
 *
 *  the autoloader never fallback into \Zend\Loader\ModuleAutoloader
 */
require_once __DIR__ . '/src/ySkeletonModule/Module.php';