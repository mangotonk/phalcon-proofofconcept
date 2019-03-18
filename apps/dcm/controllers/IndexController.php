<?php

namespace ConnectiveTissue\DCM\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		echo('DCM');
//		die();
    }
	
	 public function avail1Action()
    {
		
		$xml = simplexml_load_string($this->request->getRawBody());
		$json = json_encode($xml);
		$array = json_decode($json,TRUE);
		print_r($array);
//		return;
//		
		print_r($xml);
		return;
//		echo $this->request->get($bob);
		$client = new \GuzzleHttp\Client(['stream'=>false]);
		$res = $client->get(
//			'https://beta.junction6travel.com/api/modelservice/v1/LimitedAvailabilityProduct_TimedEvent.json?ProductID=5111&CalendarStartDate=2019-03-13&CalendarEndDate=2019-03-20'
			'https://api-beta.junction6travel.com/jsonservice/v1/availability?token=8530ef6c4af54fa5f9eb01769015d972&productid=1795&productvariation=19142&startdate=2019-03-14&enddate=2019-03-15'
		);
		$this->response->setHeader('Content-Type', 'application/json');
		echo $res->getBody();
		
		// Cast to a string: { ... }
//		echo(json_decode($json)$body);
		// Rewind the body
//		$body->read(50);
		// Read bytes of the body;
//		echo $body;
		
    }

}

