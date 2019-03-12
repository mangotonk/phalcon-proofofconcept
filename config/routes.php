<?php

use Phalcon\Mvc\Router;

$router = new Router();

function bob ($router){
	$router->mount(require_once '../apps/viator/routes.php');
}
bob($router);
