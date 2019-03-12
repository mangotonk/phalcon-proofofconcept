<?php

use Phalcon\Mvc\Router\Group as RouterGroup;
namespace ConnectiveTissue\DCM\Routing;

class DCMRouterGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'module'    => 'dcm',
                'namespace' => 'ConnectiveTissue\DCM\Controllers',
            ]
        );

        // All the routes start with /blog
        $this->setPrefix('/dcm');

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

