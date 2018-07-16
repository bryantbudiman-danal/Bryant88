<?php
	// $create_order - different addresses 

	include 'address_faker.php';

	$startDateRandom = 1483232461;
	$endDateRandom = 1531761875;
	$time = mt_rand($startDateRandom, $endDateRandom);
	
	for ($x = 0; $x <= 100; $x++) {
	   	$createOrder = (
	   					'$time' => $time,
						'$type' => '$transaction',
						'$api_key' => '3203af73a23bcb46',
						'$user_id' => 'luna.moon',
						'$currency_code' => 'USD',
					);
	
		$id= mt_rand(1,3);
		$quantity mt_rand(1,10);
		$price = 8; 
		if($id == '2') {
			$price = 88;
		} else if($id == '3') {
			$price = 888;
		}

		$address = streetName();
		$city = city();
		$state = state();
		$zip = zipCode();

		$billing_address = array(
							'$name' => "John Wick", 
							'$phone' => $price,
							'$address_1' => $address,
							'$city' => $city,
							'$region' => $state,
							'$country' => "US",
							'$zipcode' => $zip
						);

		$billing_address = json_encode($billing_address);

		$createOrder['$billing_address'] = json_decode($billing_address, true);

		$json = json_encode($createOrder);

		$ch = curl_init('https://api.siftscience.com/v205/events');

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($json))
		);

		$response = curl_exec($ch);

		error_log($response, 3, "C:\Users\bryant.budiman\Desktop\Bryant88\Logs\transaction\differentAddresses");
	} 
?>

<?php
	// $create_order - different addresses 

	include 'SiftScience/address_faker.php';

	$startDateRandom = 1483232461;
	$endDateRandom = 1531761875;
	$time = mt_rand($startDateRandom, $endDateRandom);
	
	for ($x = 0; $x <= 100; $x++) {
	   	$createOrder = (
	   					'$time' => $time,
						'$type' => '$create_order',
						'$api_key' => '3203af73a23bcb46',
						'$user_id' => 'john.wick'
					);
	
		$id= mt_rand(1,3);
		$quantity mt_rand(1,10);
		$price = 8; 
		if($id == '2') {
			$price = 88;
		} else if($id == '3') {
			$price = 888;
		}

		$address = streetName();
		$city = city();
		$state = state();
		$zip = zipCode();

		$billing_address = array(
							'$name' => "John Wick", 
							'$phone' => $price,
							'$address_1' => $address,
							'$city' => $city,
							'$region' => $state,
							'$country' => "US",
							'$zipcode' => $zip
						);

		$billing_address = json_encode($billing_address);

		$createOrder['$billing_address'] = json_decode($billing_address, true);

		$json = json_encode($createOrder);

		$ch = curl_init('https://api.siftscience.com/v205/events');

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($json))
		);

		$response = curl_exec($ch);

		error_log($response, 3, "C:\Users\bryant.budiman\Desktop\Bryant88\Logs\create_order\differentAddresses");
	} 
?>

<?php
	// $create_order - many orders in short period of time
	
	for ($x = 0; $x <= 100; $x++) {
		$startDateRandom = 1531760000;
		$endDateRandom = 1531761875;
		$time = mt_rand($startDateRandom, $endDateRandom);

	   	$createOrder = (
						'$type' => '$create_order',
						'$api_key' => '3203af73a23bcb46',
						'$user_id' => 'bryantbudiman'
					);
	
		$id= mt_rand(1,3);
		$quantity mt_rand(1,10);
		$price = 8; 
		if($id == '2') {
			$price = 88;
		} else if($id == '3') {
			$price = 888;
		}

		$itemInfo = array(
							'$product_title' => $id, 
							'$price' => $price,
							'$currency_code' => 'USD',
							'$quantity' => $quantity,
							'$item_id' => $id,
						);

		$itemInfo = json_encode($itemInfo);

		$createOrder['$items'][] = json_decode($itemInfo, true);

		$json = json_encode($createOrder);

		$ch = curl_init('https://api.siftscience.com/v205/events');

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($json))
		);

		$response = curl_exec($ch);

		error_log($response, 3, "C:\Users\bryant.budiman\Desktop\Bryant88\Logs\create_order\manyItemsInstantly");
	} 
?>