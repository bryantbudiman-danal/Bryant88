<?php
	session_start();
	
	// delete item id from session array
	if(!isset($_GET['id']) || !isset($_SESSION['cart'])) {
		header('Location: ../cart.php');
	} else {
		// API CALL TO SIFT SCIENCE - ADD ITEM
		$ch = curl_init('https://api.siftscience.com/v205/events');

		$id = $_GET['id'];
		$quantity = $_SESSION['cart'][$id]['quantity'];
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
						'$type' => '$remove_item_from_cart',
						'$api_key' => '3203af73a23bcb46'
					);

		if ( isset($_SESSION['user']) ) {
			$user_id = $_SESSION['user'];
			$data['$user_id'] = $user_id;
		} else {
			$session_id = randString(11);
			$data['$session_id'] = $session_id;
		}

		$data['$item'] = json_decode($itemInfoJSON, true);

		$data_string = json_encode($data, JSON_PRETTY_PRINT);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
		curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($data_string))
		);

		$response = curl_exec($ch);
		echo $response;
		//END OF SIFT SCIENCE API CALL

		// unset($_SESSION['cart'][$_GET['id']]);
		// header('Location: ../cart.php');
	}
?>