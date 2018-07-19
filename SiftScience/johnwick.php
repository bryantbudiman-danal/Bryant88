<?php
	$startDateRandom = 1483232461;
	$endDateRandom = 1531761875;
	$time = mt_rand($startDateRandom, $endDateRandom);

	$addToCart_Events = array();
	$createOrder_Events = array();
	$transaction_Events = array();

	$response = "heheh";
	for ($x = 0; $x <= 1; $x++) {
		////////////////////////////////////ADD TO CART//////////////////////////////////////////////
		$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');

		$id = mt_rand(1,3);
		$id = (string)$id;
		$quantity = mt_rand(1,10);

		$price = 8; 
		if($id == '2') {
			$price = 88;
		} else if($id == '3') {
			$price = 888;
		}

		$itemInfo = array(
							'$product_title' => $id, 
							'$price' => (int)$price,
							'$currency_code' => 'USD',
							'$quantity' => (int)$quantity,
							'$item_id' => $id,
						);

		$itemInfoJSON = json_encode($itemInfo);

		$data = array(
						'$type' => '$add_item_to_cart',
						'$api_key' => 'd5e30e6affe617f1',
						'$time' => $time,
						'$user_id' => "john.wick",
					);

		$data['$item'] = json_decode($itemInfoJSON, true);

		$addToCart_Events[] = $data;

		$data_string = json_encode($data, JSON_PRETTY_PRINT);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($data_string))
		);

		$response = curl_exec($ch);
		////////////////////////////////////ADD TO CART END//////////////////////////////////////////////

		/////////////////////////////////////CREATE_ORDER////////////////////////////////////////////////
		$ch = curl_init('https://api.siftscience.com/v205/events');

		$itemInfo = array(
							'$product_title' => $id, 
							'$price' => (int)$price,
							'$currency_code' => 'USD',
							'$quantity' => (int)$quantity,
							'$item_id' => $id,
						);

		$itemInfoJSON = json_encode($itemInfo);

		$time = $time + 200; 

		$data = array(
						'$type' => '$create_order',
						'$api_key' => 'd5e30e6affe617f1',
						'$amount' => 88888888,
						'$currency_code' => 'USD',
						'$time' => $time,
						'$user_id' => "john.wick",
					);

		$createOrder_Events[] = $data;

		$data_string = json_encode($data, JSON_PRETTY_PRINT);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($data_string))
		);

		$response = curl_exec($ch);
		////////////////////////////////////CREATE-ORDER END/////////////////////////////////////////////

		////////////////////////////////////TRANSACTION//////////////////////////////////////////////////
		$ch = curl_init('https://api.siftscience.com/v205/events');

		$billing_address = array(
							'$name' => "John Wick", 
							'$phone' => "1-213-888-8888",
							'$address_1' => "325 West Adams Blvd.",
							'$city' => "Los Angeles",
							'$region' => "CA",
							'$country' => "US",
							'$zipcode' => "90007",
						);

		$billing_address = json_encode($billing_address);

		$data = array(
						'$type' => '$transaction',
						'$api_key' => 'd5e30e6affe617f1',
						'$amount' => 88888888,
						'$currency_code' => 'USD',
						'$time' => $time,
						'$user_id' => "john.wick",
					);

		$data['$billing_address'] = json_decode($billing_address, true);

		$transaction_Events[] = $data;

		$data_string = json_encode($data, JSON_PRETTY_PRINT);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($data_string))
		);

		$response = curl_exec($ch);
	 ///////////////////////////////////TRANSACTION END//////////////////////////////////////////////
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  </head>

  <body >
  	<?php
  		var_dump($addToCart_Events);
  		var_dump($createOrder_Events);
  		var_dump($transaction_Events);
  		echo "response is: " . $response;
  	?>
  </body>

</html>