<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
//require_once '/apps/viator/routing/ViatorRoutingGroup.php';
$di = new FactoryDefault();
 $router = new Router(false);
 $router->mount(new ConnectiveTissue\Viator\Controllers\ViatorRouterGroup());
// Specify routes for modules
$di->set(
    'router',
    $router
		);
//		$router->mount(new ConnectiveTissue\RouterGroups\ViatorRouterGroup());

		
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
//
//		
//		  $router->add(
//            '/viator/:action',
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

//        return $router;
//    }
//);

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
