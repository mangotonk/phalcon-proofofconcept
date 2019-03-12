<?php

namespace ConnectiveTissue\Viator\Controllers;

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo('VIATOR');
		die();
    }
	
	public function route404Action() 
	{
		echo('nonsense, try again');
		die();
	}

}

