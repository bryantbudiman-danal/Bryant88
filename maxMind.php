<?php
	$userID = "135014";
	$password = "GUp1giLKX7wN";

	$ch = curl_init('https://geoip.maxmind.com/geoip/v2.1/city/172.58.110.165');

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, $userID . ":" . $password);

	$response = curl_exec($ch);
	$response = json_decode($response, true);

	$city = $response["city"]["names"]["en"];
	$country = $response["country"]["names"]["en"];
	$latitude = $response["location"]["latitude"];
	$longitude = $response["location"]["longitude"];
	$isp = $response["traits"]["isp"];

	echo $city . "\n";
	echo $country . "\n";
	echo $latitude . "\n";
	echo $longitude . "\n";
	echo $isp;
?>