<?php
class Trulia {

	private $app_id;
	
	public function __construct($zws_id = null) {
		if ( ! empty($zws_id)) {
			$this->app_id = $zws_id;
			$this->url = 'http://api.trulia.com/webservices.php';
		}
	}

/**
 *  These All Method Belongs To Trulia LocationInfo Library
 */
	
	public function getCitiesInState($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey']   = $this->app_id;
		$params['library']  = 'LocationInfo';
		$params['function'] = 'getCitiesInState';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getCountiesInState($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'LocationInfo';
		$params['function'] = 'getCountiesInState';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getNeighborhoodsInCity($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'LocationInfo';
		$params['function'] = 'getNeighborhoodsInCity';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getStates() {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'LocationInfo';
		$params['function'] = 'getStates';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getZipCodesInState($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'LocationInfo';
		$params['function'] = 'getZipCodesInState';
		$result = $this->request($this->url, $params);
		return $result;
	}

/**
 *  All Method Belongs To Trulia TruliaStats Library
 */
	
	public function getZipCodeStats($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'TruliaStats';
		$params['function'] = 'getZipCodeStats';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getStateStats($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'TruliaStats';
		$params['function'] = 'getStateStats';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getNeighborhoodStats($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'TruliaStats';
		$params['function'] = 'getNeighborhoodStats';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getCountyStats($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'TruliaStats';
		$params['function'] = 'getCountyStats';
		$result = $this->request($this->url, $params);
		return $result;
	}

	public function getCityStats($params) {
		if ( empty($this->app_id)) {
			throw new Exception('Application key is required.');
		}
		$params['apikey'] = $this->app_id;
		$params['library'] = 'TruliaStats';
		$params['function'] = 'getCityStats';
		$result = $this->request($this->url, $params);
		return $result;
	}

/**
 *  Call a curl request.
 */

	public function request($url,$params) {

		if( empty($params) || empty($url) ) {
			throw new Exception("Error Processing Request...");
		}

		$options = array(
			CURLOPT_URL => $url.'?'.http_build_query($params),
			CURLOPT_RETURNTRANSFER => true
		);
		
		$ch = curl_init(); //Initialize curl in $ch
		curl_setopt_array($ch, $options); //add params values to $ch
		$content = curl_exec($ch); //execute

		curl_close($ch); 

		return $content;
	}

}
?>