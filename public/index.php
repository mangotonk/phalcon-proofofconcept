<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault();

// Specify routes for modules
$di->set(
    'router',
    function () {
		//means we dont need a default i think
        $router = new Router(false);
		//wildcard match for the module
		$router->add('/:module/', array(
			'module' => 1,
			'controller' => 'index',
			'controller' => 'index',
			
		));
		
//        $router->setDefaultModule('viator');
//		//don tknow why this doesnt work
//        $router->add(
//            '/:module/login/',
//            [
//                'controller' => 'index',
//                'action'     => 'index',
//            ]
//        );
//		
	
		
//		  $router->add(
//            '/viator/',
//            [
//				'module'     => 'viator',
//                'controller' => 'index',
//                'action'     => 'index',
//            ]
//			);
//		  
//		   $router->add(
//            '/dcm/',
//            [
//				'module'     => 'dcm',
//                'controller' => 'index',
//                'action'     => 'index',
//            ]
//			);
//
//        $router->add(
//            '/admin/products/:action',
//            [
//                'module'     => 'backend',
//                'controller' => 'products',
//                'action'     => 1,
//            ]
//        );
//
//        $router->add(
//            '/products/:action',
//            [
//                'controller' => 'products',
//                'action'     => 1,
//            ]
//        );

        return $router;
    }
);

// Create an application
$application = new Application($di);

// Register the installed modules
$application->registerModules(
    [
        'dcm' => [
            'className' => 'ConnectiveTissue\DCM\Module',
            'path'      => '../apps/dcm/Module.php',
        ],
        'viator'  => [
            'className' => 'ConnectiveTissue\Viator\Module',
            'path'      => '../apps/viator/Module.php',
        ]
    ]
);

try {
    // Handle the request
    $response = $application->handle();

    $response->send();
} catch (\Exception $e) {
    echo $e->getMessage();
}
