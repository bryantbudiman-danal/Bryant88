<?php
	$userID = "135014";
	$password = "GUp1giLKX7wN";

	$output = array();

	if (($handle = fopen("PhoneNumbers.csv", "r")) !== FALSE) {
		
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	    	$rowInfo = array();

	    	$phoneNumber = $data[0];
	    	$ipAddress = $data[1];
	    	array_push($rowInfo, $phoneNumber);
	    	array_push($rowInfo, $ipAddress);

	    	if($ipAddress != "") {
				$ch = curl_init('https://geoip.maxmind.com/geoip/v2.1/city/' . $ipAddress);

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

				array_push($rowInfo, $city);
				array_push($rowInfo, $country);
				array_push($rowInfo, $latitude);
				array_push($rowInfo, $longitude);
				array_push($rowInfo, $isp);
	    	}

	    	array_push($output, $rowInfo);
	    }

	    fclose($handle);
	}

	$file = fopen("outputCSV.csv","w");

	foreach ($output as $info) {
  		fputcsv($file, $info);
  	}

  	fclose($file);
?>