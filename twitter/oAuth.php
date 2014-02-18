<?php

require_once('TwitterAPIExchange.php');

	/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1138855820-v9dh3NP0wau6VdVdEN5lDBzStY7oq8ZzJuEVXvt",
    'oauth_access_token_secret' => "r7p2FwDfLAo3EjcqehMBSmOSjrZmwRDfbRbXvtaTXI",
    'consumer_key' => "q7qGcLxtbEhFfakQqZwtnA",
    'consumer_secret' => "CUPf0CviGNJpaU9lHHnctj4esIvFlvEOnd2tlq9Odg"
);
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();



/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?username=J7mbo';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();     



$url = 'https://api.twitter.com/1.1/followers/list.json';
$getfield = '?username=J7mbo&skip_status=1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();  