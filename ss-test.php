<?php
	$ch = curl_init('https://api.siftscience.com/v205/events?return_score=true');

	$itemInfo = array(
						'$product_title' => 'Sukses', 
						'$price' => 8,
						'$currency_code' => 'USD',
						'$quantity' => 8,
						'$item_id' => '1',
					);

	$itemInfoJSON = json_encode($itemInfo);

	$data = array(
					'$type' => '$add_item_to_cart',
					'$api_key' => 'd5e30e6affe617f1',
					'$user_id' => 'bryantbudiman',
				);

	$data['$item'] = json_decode($itemInfoJSON, true);

	$data_string = json_encode($data, JSON_PRETTY_PRINT);

	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
	curl_setopt($ch, CURLOPT_TIMEOUT, 5000);    
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($data_string))
	);

	$response = curl_exec($ch);

	echo $response;

	echo "idk";
?>