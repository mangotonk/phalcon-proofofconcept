<?php

use Phalcon\Mvc\Router\Group as RouterGroup;
namespace ConnectiveTissue\Viator\Contr;

class ViatorRouterGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'module'    => 'viator',
                'namespace' => 'ConnectiveTissue\Viator\Controllers',
            ]
        );

        // All the routes start with /blog
        $this->setPrefix('/viator');

        // Add a route to the group
//        $this->add(
//            '/save',
//            [
//                'action' => 'save',
//            ]
//        );
//
//        // Add another route to the group
//        $this->add(
//            '/edit/{id}',
//            [
//                'action' => 'edit',
//            ]
//        );
//
//        // This route maps to a controller different than the default
//        $this->add(
//            '/blog',
//            [
//                'controller' => 'blog',
//                'action'     => 'index',
//            ]
//        );
    }
}

