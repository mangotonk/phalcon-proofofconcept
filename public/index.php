<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;

//php way, seems to be satandard, despite the Loader func, because Composer generates its own autoload
require '../vendor/autoload.php';

$di = new FactoryDefault();

// Create an application
$application = new Application($di);

// Register the installed modules
$application->registerModules(
    [
        'dcm' => [
            'className' => 'ConnectiveTissue\DCM\Module',
            'path'      => '../apps/dcm/Module.php',
			'routes'  => '../apps/dcm/routes.php',
        ],
        'viator'  => [
            'className' => 'ConnectiveTissue\Viator\Module',
            'path'      => '../apps/viator/Module.php',
			'routes'  => '../apps/viator/routes.php',
        ]
    ]
);

$router = new Router();

foreach($application->getModules() as $app){
	$router->mount(require_once $app['routes']);
}

$di->set('router',$router);

try {
    // Handle the request
    $response = $application->handle();

    $response->send();
} catch (\Exception $e) {
    echo $e->getMessage();
}
