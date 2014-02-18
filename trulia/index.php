<?php

define('API_ID', '-- Enter <APPID> here --');

require_once('trulia.php');

function debug($value = null) {
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}


$trulia = new Trulia(API_ID);



/*
// Query 1
$result =  $trulia->getCitiesInState(
	array(		
		'state' => 'CA'
	)
);
*/


/*// Query 2
$result = $trulia->getCountiesInState(
	array(		
		'state' => 'CA'
	)
);*/


/*
// Query 3
$result = $trulia->getZipCodeStats(
	array(		
		'zipCode' => '94002'
	)
);*/

/*
// Query 4
$result = $trulia->getStateStats(
	array(		
		'state' => 'NY'
	)
);*/

/*// Query 5
$result = $trulia->getNeighborhoodStats(
	array(		
		'endDate' => '2009-02-07'
		'startDate' => '2009-02-06',
		'neighborhoodId' => '1386',
	)
);*/

/*// Query 5
$result = $trulia->getCountyStats(
	array(		
		'state'     => 'CA',
		'county'    => 'Santa Clara',
		'endDate'   => '2009-02-07'
		'startDate' => '2009-02-06',
	)
);*/

/*// Query 6
$result = $trulia->getCityStats(
	array(		
		'city'      => 'New York',
		'state'     => 'NY',
		'endDate'   => '2009-02-07',
		'startDate' => '2009-02-06',
	)
);*/

/*
// Query 6
$result = $trulia->getStates();
*/

// Query 7
$result = $trulia->getZipCodesInState(
	array(
		'state' => 'CA'
	)
);



debug( simplexml_load_string($result) );

/*$options = array(
  	CURLOPT_URL => 'http://api.trulia.com/webservices.php?library=LocationInfo&apikey=mwvtmxk8uxky4qmun5r2xdb4'
);
*/




?>