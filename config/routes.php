<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

// Create a group with a common module and controller
$blog = new RouterGroup(
    [
        'module'     => 'viator',
        'controller' => 'index',
    ]
);

// All the routes start with /blog
$blog->setPrefix('/blog');

// Add a route to the group
//$blog->add(
//    '/save',
//    [
//        'action' => 'save',
//    ]
//);
//
//// Add another route to the group
$blog->add(
    '/edit/{id}',
    [
        'action' => 'edit',
    ]
);

// This route maps to a controller different than the default
$blog->add(
    '/glob',
    [
        'controller' => 'index',
        'action'     => 'steve',
    ]
);

// Add the group to the router
$router->mount($blog);

return $router;

