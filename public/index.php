<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault();

// Specify routes for modules
$di->set(
    'router',
    function () {
		require '../config/routes.php';
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
