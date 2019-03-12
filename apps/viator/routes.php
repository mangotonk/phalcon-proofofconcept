<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

// Create a group with a common module and controller
$blog = new RouterGroup(
    [
        'module'     => 'viator',
        'controller' => 'index',
    ]
);

// All the routes start with /blog
$blog->setPrefix('/viator');

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

return $blog;