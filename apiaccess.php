<?php
class apiaccessfunction {
	public $access_url;
	public function apidategetfunction(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->access_url,
		  	CURLOPT_RETURNTRANSFER => true,
		  	CURLOPT_ENCODING => "",
		  	CURLOPT_MAXREDIRS => 10,
		  	CURLOPT_TIMEOUT => 30,
		  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  	CURLOPT_CUSTOMREQUEST => "GET",
		  	CURLOPT_HTTPHEADER => array(
		    	"accept-language: application/json",
		    	"cache-control: no-cache",
		  	),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
		 	return "cURL Error #:" . $err;
		} else {
			$json = json_decode($response, true);
			return $json;
		  	//return json_encode($json, JSON_PRETTY_PRINT);
		}
	}
}
?>