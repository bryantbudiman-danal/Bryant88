<?php
	session_start();
	 
	// get the product id
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
	 
	// make quantity a minimum of 1
	$quantity=$quantity<=0 ? 1 : $quantity;
	$cart_item = array('quantity'=>$quantity);
	 
	/*
	 * check if the 'cart' session array was created
	 * if it is NOT, create the 'cart' session array
	 */
	if(!isset($_SESSION['cart'])){
	    $_SESSION['cart'] = array();
	}
	 
	if(array_key_exists($id, $_SESSION['cart'])){
		$new_quantity = $quantity + $_SESSION['cart'][$id]['quantity'];
		$new_cart_item = array('quantity'=>$new_quantity);
		$_SESSION['cart'][$id] = $new_cart_item;
	}
	else{
	    $_SESSION['cart'][$id] = $cart_item;
	}


	$price = 8; 
	if($id==2) {
		$price = 88;
	} else if($id==3) {
		$price = 888;
	}
	
	// API CALL TO SIFT SCIENCE - ADD ITEM
	if ( isset($_SESSION['user']) ) {
		$ch = curl_init('https://api.siftscience.com/v205/events');

		$itemInfo = array(
							"$product_title" => $id, 
							"$price" => $price,
							"$currency_code" => "USD",
							"$quantity" => $quantity
						);

		$session_id = randString();
		$username = $_SESSION['user'];

		$data = array(
						"$type" => "$add_item_to_cart",
						"$api_key" => "3203af73a23bcb46",
						"$user_id" => $username,
						"$session_id" => $session_id,
						"$item" => $itemInfo
					);

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
	}

	//header('Location: ../cart.php');
?>