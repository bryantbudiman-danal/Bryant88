<?php
	// john.wick

	$time = 1483232461;
	$ip = '79.107.228.135';

	$createAccount = (
		'$type' => '$create_account',
		'$api_key' => '3203af73a23bcb46',
		'$user_id' => 'john.wick',
		'$ip' => $ip,
		'$time' => $time,
	);

	$billing_address = array(
							'$name' => "John Wick", 
							'$phone' => "1-213-888-8888",
							'$address_1' => "325 West Adams Blvd.",
							'$city' => "Los Angeles",
							'$region' => "California",
							'$country' => "US",
							'$zipcode' => "90007"
						);

	$billing_address = json_encode($billing_address);

	$shipping_address = array(
							'$name' => "John Wick", 
							'$phone' => "1-213-888-8888",
							'$address_1' => "325 West Adams Blvd.",
							'$city' => "Los Angeles",
							'$region' => "California",
							'$country' => "US",
							'$zipcode' => "90007"
						);

	$shipping_address = json_encode($shipping_address);

	$createAccount['$billing_address'] = json_decode($billing_address, true);
	$createAccount['$shipping_address'] = json_decode($shipping_address, true);

	$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$jsondData = json_encode($createAccount);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($json))
	);

	$response = curl_exec($ch); 
	echo $response . "//end for john.wick//";

	//////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// Allariel

	$time = 1426561893;
	$ip = '34.45.219.196';

	$createAccount = (
		'$type' => '$create_account',
		'$api_key' => '3203af73a23bcb46',
		'$user_id' => 'allariel',
		'$ip' => $ip,
		'$time' => $time,
	);

	$billing_address = array(
							'$name' => "Allariel Everqueen", 
							'$phone' => "1-555-555-5555",
							'$address_1' => "820 Aspen Court",
							'$city' => "Franklin",
							'$region' => "Massachusetts",
							'$country' => "US",
							'$zipcode' => "02038"
						);

	$billing_address = json_encode($billing_address);

	$shipping_address = array(
							'$name' => "Allariel Everqueen", 
							'$phone' => "1-555-555-5555",
							'$address_1' => "820 Aspen Court",
							'$city' => "Franklin",
							'$region' => "Massachusetts",
							'$country' => "US",
							'$zipcode' => "02038"
						);

	$shipping_address = json_encode($shipping_address);

	$createAccount['$billing_address'] = json_decode($billing_address, true);
	$createAccount['$shipping_address'] = json_decode($shipping_address, true);

	$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$jsondData = json_encode($createAccount);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($json))
	);

	$response = curl_exec($ch); 
	echo $response . "//end for allariel//";

	//////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// Tom Sizemore

	$time = 1502181535;
	$ip = '107.59.46.176';

	$createAccount = (
		'$type' => '$create_account',
		'$api_key' => '3203af73a23bcb46',
		'$user_id' => 'tom.sizemore',
		'$ip' => $ip,
		'$time' => $time,
	);

	$billing_address = array(
							'$name' => "Tom Sizemore", 
							'$phone' => "1-917-257-0947",
							'$address_1' => "1874 Turkey Pen Road",
							'$city' => "New York",
							'$region' => "New York",
							'$country' => "US",
							'$zipcode' => "10013"
						);

	$billing_address = json_encode($billing_address);

	$shipping_address = array(
							'$name' => "Tom Sizemore", 
							'$phone' => "1-917-257-0947",
							'$address_1' => "1874 Turkey Pen Road",
							'$city' => "New York",
							'$region' => "New York",
							'$country' => "US",
							'$zipcode' => "10013"
						);

	$shipping_address = json_encode($shipping_address);

	$createAccount['$billing_address'] = json_decode($billing_address, true);
	$createAccount['$shipping_address'] = json_decode($shipping_address, true);

	$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$jsondData = json_encode($createAccount);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($json))
	);

	$response = curl_exec($ch); 
	echo $response . "//end for tom sizemore//";

	//////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// Jane Kusuma

	$time = 1508511735;
	$ip = '135.253.205.101';

	$createAccount = (
		'$type' => '$create_account',
		'$api_key' => '3203af73a23bcb46',
		'$user_id' => 'jane.kusuma',
		'$ip' => $ip,
		'$time' => $time,
	);

	$billing_address = array(
							'$name' => "Jane Kusuma", 
							'$phone' => "1-917-257-0947",
							'$address_1' => "398 Raccoon Run",
							'$city' => "Seattle",
							'$region' => "Washington",
							'$country' => "US",
							'$zipcode' => "98109"
						);

	$billing_address = json_encode($billing_address);

	$shipping_address = array(
							'$name' => "Jane Kusuma", 
							'$phone' => "1-917-257-0947",
							'$address_1' => "398 Raccoon Run",
							'$city' => "Seattle",
							'$region' => "Washington",
							'$country' => "US",
							'$zipcode' => "98109"
						);

	$shipping_address = json_encode($shipping_address);

	$createAccount['$billing_address'] = json_decode($billing_address, true);
	$createAccount['$shipping_address'] = json_decode($shipping_address, true);

	$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$jsondData = json_encode($createAccount);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($json))
	);

	$response = curl_exec($ch); 
	echo $response . "//end for Jane Kusuma//";
?>