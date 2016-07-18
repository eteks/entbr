<?php
//$result = file_get_contents("https://www.eventbriteapi.com/v3/categories/?token=EYCRVUUNSXMWLUD2F7KS");
// Will dump a beauty json :3
//echo "<pre>";
//print_r(json_decode($result, true));
//echo "</pre>";
function isJSON($string){
   return is_string($string) && is_array(json_decode($string, true)) ? true : false;
}
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.eventbriteapi.com/v3/events/?token=X2UCPDEQO3FIK42OYA32",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept-language: application/json",
    "cache-control: no-cache",
    "postman-token: a7abedbf-064c-5833-0bf6-690ff71b851a"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$json = json_decode($response, true);
	$data = json_encode($json, JSON_PRETTY_PRINT);
	echo "<pre>";
	print_r($json['events'][0]);
	echo "</pre>";
}

?>