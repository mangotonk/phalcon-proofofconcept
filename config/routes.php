<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/',
    [
		'module' => 'viator',
        'controller' => 'index',
        'action'     => 'bob',
    ]
);


return $router;

