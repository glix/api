<?php 
// Api id
define('ZWSID', '--Enter <ZWSID> here--');

// include zillow api function
include_once('zillow_api.php');

$zillow_api = new Zillow_Api(ZWSID); // $zws_id is your Zillow API Key
$search_result = $zillow_api->GetMonthlyPayments(
	array(
		'price' => '300000',
		'down' => '15',
		'zip' => '98104'
	)
); 


echo "<pre>";
print_r($search_result);
echo "</pre>";
?>