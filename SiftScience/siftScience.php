<?php
	class SiftScienceSimulator {
		private $id;
		private $price;
		private $quantity;
		private $amount;
		private $fullname;
		private $username;

		public function __construct($firstName, $lastName) {
			$this->id = mt_rand(1,3);
			$this->id = (string)$this->id;

			$this->quantity = mt_rand(1,10);

			$this->price = 8; 
			if($this->id == '2') {
				$this->price = 88;
			} else if($this->id == '3') {
				$this->price = 888;
			}
			$this->price = $this->price;
			$this->amount = (int)$this->price*$this->quantity;

			$this->fullname = $firstName . " " . $lastName;

			$this->username = strtolower($firstName) . "." . strtolower($lastName);
		}

		public function makeAccount($timestamp) {
			$createAccount = array(
				'$type' => '$create_account',
				'$api_key' => 'e7e2cfa100771efb',
				'$user_id' => $this->username,
				'$time' => $timestamp,
			);

			$billing_address = array(
									'$name' => $this->fullname, 
									'$phone' => "1-388-8888-888",
									'$address_1' => "325 West Adams Boulevard",
									'$city' => "Los Angeles",
									'$region' => "California",
									'$country' => "US",
									'$zipcode' => "90007",
								);

			$billing_address = json_encode($billing_address);

			$shipping_address = array(
									'$name' => $this->fullname, 
									'$phone' => "1-388-8888-888",
									'$address_1' => "325 West Adams Boulevard",
									'$city' => "Los Angeles",
									'$region' => "California",
									'$country' => "US",
									'$zipcode' => "90007",
								);

			$shipping_address = json_encode($shipping_address);

			$createAccount['$billing_address'] = json_decode($billing_address, true);
			$createAccount['$shipping_address'] = json_decode($shipping_address, true);

			$ch = curl_init('https://api.siftscience.com/v205/events');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
			$jsonData = json_encode($createAccount);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);      
			curl_setopt($ch, CURLOPT_HEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($jsonData))
			);

			$result = curl_exec($ch); 
			echo $result . "\n";			
		}

		public function addToCart($timestamp) {
			$ch = curl_init('https://api.siftscience.com/v205/events');

			$itemInfo = array(
								'$product_title' => $this->id, 
								'$price' => $this->price,
								'$currency_code' => 'USD',
								'$quantity' => $this->quantity,
								'$item_id' => $this->id,
							);

			$itemInfoJSON = json_encode($itemInfo);

			$data = array(
							'$type' => '$add_item_to_cart',
							'$api_key' => 'e7e2cfa100771efb',
							'$user_id' => $this->username,
							'$time' => $timestamp,
						);

			$data['$item'] = json_decode($itemInfoJSON, true);

			$data_string = json_encode($data, JSON_PRETTY_PRINT);

			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
			curl_setopt($ch, CURLOPT_HEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($data_string))
			);

			$result = curl_exec($ch);
			echo $result . "\n";			
		}

		public function login($timestamp) {
			$loginAttempt = array(
				'$type' => '$login',
				'$api_key' => 'e7e2cfa100771efb',
				'$user_id' => $this->username,
				'$time' => $timestamp,
			);

			$ch = curl_init('https://api.siftscience.com/v205/events');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
			$jsonData = json_encode($loginAttempt);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);      
			curl_setopt($ch, CURLOPT_HEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($jsonData))
			);

			$result = curl_exec($ch); 
			echo $result . "\n";					
		}

		public function createOrder($timestamp) {
			$ch = curl_init('https://api.siftscience.com/v205/events');

			$itemInfo = array(
				'$product_title' => $this->id, 
				'$price' => $this->price,
				'$currency_code' => 'USD',
				'$quantity' => $this->quantity,
				'$item_id' => $this->id,
			);

			$itemInfoJSON = json_encode($itemInfo);

			$data = array(
				'$type' => '$create_order',
				'$api_key' => 'e7e2cfa100771efb',
				'$amount' => $this->amount,
				'$currency_code' => 'USD',
				'$time' => $timestamp,
				'$user_id' => $this->username,
			);

			$data_string = json_encode($data, JSON_PRETTY_PRINT);

			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
			curl_setopt($ch, CURLOPT_HEADER, array(
			'Content-Type: application/json', 
			'Content-Length: ' . strlen($data_string))
			);

			$result = curl_exec($ch);		
			echo $result . "\n";
		}

		public function transaction($timestamp) {
			$ch = curl_init('https://api.siftscience.com/v205/events');

			$billing_address = array(
				'$name' => "Bad Person", 
				'$phone' => "123456890",
				'$address_1' => "Very Bad Street",
				'$city' => "Not Nice City",
				'$region' => "New Mexico",
				'$country' => "US",
				'$zipcode' => "33333",		
			);

			$billing_address = json_encode($billing_address);

		    $data = array(
				'$type' => '$transaction',
				'$api_key' => 'e7e2cfa100771efb',
				'$amount' => $this->amount,
				'$currency_code' => 'USD',
				'$time' => $timestamp,	
				'$user_id' => $this->username,
			);

			$data['$billing_address'] = json_decode($billing_address, true);

			$data_string = json_encode($data, JSON_PRETTY_PRINT);

			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
			curl_setopt($ch, CURLOPT_HEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($data_string))
			);

			$result = curl_exec($ch);	
			echo $result . "\n";	
		}

		public function updateAccount($timestamp) {
			$ch = curl_init('https://api.siftscience.com/v205/events');

			$data = array(
				'$type' => '$update_account',
				'$api_key' => 'e7e2cfa100771efb',
				'$time' => $timestamp,
				'$user_id' => $this->username,
			);

			$shipping_address = array(
				'$name' => "Bad Person", 
				'$phone' => "123456890",
				'$address_1' => "Very Bad Street",
				'$city' => "Not Nice City",
				'$region' => "North Dakota",
				'$country' => "US",
				'$zipcode' => "33333",	
			);

			$shipping_address = json_encode($shipping_address);

			$data['$shipping_address'] = json_decode($shipping_address, true);

			$data_string = json_encode($data, JSON_PRETTY_PRINT);

			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
			curl_setopt($ch, CURLOPT_HEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($data_string))
			);

			$result = curl_exec($ch);		
			echo $result . "\n";
		}			
	}

	$makeAccountTime = 1529965014;
	$updateAccountTime = 1532487600; 
	$addToCartTime = 1532487900;
	$createOrderTime = 1532488020;
	$transactionTime = 1532488140;

	$ss = new SiftScienceSimulator("Bob","Johnson");

	$ss->makeAccount($makeAccountTime);
	$ss->updateAccount($updateAccountTime);
	$ss->addToCart($addToCartTime);
	$ss->createOrder($createOrderTime);
	$ss->transaction($transactionTime);
?>