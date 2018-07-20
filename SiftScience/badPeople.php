<?php
	include 'randomNames.php';

	$host = 'bryant88.mysql.database.azure.com';
	$username = 'bryantbudiman@bryant88';
	$password = 'KopiLuwak88';
	$db_name = 'users';

	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		echo 'Failed to connect to MySQL: ' .mysqli_connect_error();
	}

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		for ($i = 0; $i <= 1; $i++) {
			$startDateRandom = 1515299327;
			$endDateRandom = 1531761875;
			$accountCreationTime = mt_rand($startDateRandom, $endDateRandom);

			////////////////////////////////////REGISTER ACCOUNT////////////////////////////////////////////// 
			$randomFirstName = randFirst();
			$randomLastName = randLast();
			$randomName = $randomFirstName . " " . $randomLastName;
			$randomPhone = phoneNumber();
			$randomAddress = streetAddress();
			$randomCity = city();
			$randomState = state();
			$randomZip = zipCode();
			$randomCountry = country();

			$randomUserName = strtolower($randomFirstName) . "." . strtolower($randomLastName);

			$createAccount = array(
				'$type' => '$create_account',
				'$api_key' => 'e7e2cfa100771efb',
				'$user_id' => $randomUserName,
				'$time' => $accountCreationTime,
			);

			$billing_address = array(
									'$name' => $randomName, 
									'$phone' => $randomPhone,
									'$address_1' => $randomAddress,
									'$city' => $randomCity,
									'$region' => $randomState,
									'$country' => "US",
									'$zipcode' => $randomZip,
								);

			$billing_address = json_encode($billing_address);

			$shipping_address = array(
									'$name' => $randomName, 
									'$phone' => $randomPhone,
									'$address_1' => $randomAddress,
									'$city' => $randomCity,
									'$region' => $randomState,
									'$country' => "US",
									'$zipcode' => $randomZip,
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

			curl_exec($ch); 

			$numberOfTimesPurchased = mt_rand(1,5);

			$randomPhone = phoneNumber();
			$randomAddress = streetAddress();
			$randomCity = city();
			$randomState = state();
			$randomZip = zipCode();
			$randomCountry = country();

			for ($x = 0; $x <= $numberOfTimesPurchased; $x++) {
				// 600000 is one week in UNIX time
				$endOfFraud = $accountCreationTime+600000;

				if($endOfFraud > 1531761875) {
					$endOfFraud = 1531761875;
				}

				$addToCartTime = mt_rand($accountCreationTime, $endOfFraud);

				////////////////////////////////////ADD TO CART//////////////////////////////////////////////
				$ch = curl_init('https://api.siftscience.com/v205/events');

				$id = mt_rand(1,3);
				$id = (string)$id;
				$quantity = mt_rand(30,100);

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
								'$api_key' => 'e7e2cfa100771efb',
								'$time' => $addToCartTime,
								'$user_id' => $randomUserName,
							);

				$data['$item'] = json_decode($itemInfoJSON, true);

				$data_string = json_encode($data, JSON_PRETTY_PRINT);

				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
				curl_setopt($ch, CURLOPT_HEADER, array(
					'Content-Type: application/json', 
					'Content-Length: ' . strlen($data_string))
				);

				curl_exec($ch);
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

				$orderCreationTime = $addToCartTime + 200; 

				$amount = (int)$price*(int)$quantity;

				$data = array(
								'$type' => '$create_order',
								'$api_key' => 'e7e2cfa100771efb',
								'$amount' => $amount,
								'$currency_code' => 'USD',
								'$time' => $orderCreationTime,
								'$user_id' => $randomUserName,
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

				curl_exec($ch);
				////////////////////////////////////CREATE-ORDER END/////////////////////////////////////////////

				////////////////////////////////////TRANSACTION//////////////////////////////////////////////////
				$ch = curl_init('https://api.siftscience.com/v205/events');

				$billing_address = array(
									'$name' => $randomName, 
									'$phone' => $randomPhone,
									'$address_1' => $randomAddress,
									'$city' => $randomCity,
									'$region' => $randomState,
									'$country' => "US",
									'$zipcode' => $randomZip,
								);



				$shipping_address = array(
									'$name' => $randomName, 
									'$phone' => $randomPhone,
									'$address_1' => $randomAddress,
									'$city' => $randomCity,
									'$region' => $randomState,
									'$country' => "US",
									'$zipcode' => $randomZip,
				);

				$billing_address = json_encode($billing_address);

				$transactionCreationTime = $orderCreationTime + 200;

				$data = array(
								'$type' => '$transaction',
								'$api_key' => 'e7e2cfa100771efb',
								'$amount' => $amount,
								'$currency_code' => 'USD',
								'$time' => $transactionCreationTime,
								'$user_id' => $randomUserName,
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

				curl_exec($ch);
			 ///////////////////////////////////TRANSACTION END//////////////////////////////////////////////
	
				$sql = "INSERT INTO users.people (fullName, userName, address, city, state, country, zip, accountCreationTime, itemBought, quantityBought, addToCartTime, orderCreationTime, transactionCreationTime)
					VALUES (" . $randomName . ", " . $randomUserName . ", " .
						$randomAddress . ", " . $randomState . ", " . $randomCountry . ", " . $randomZip . ", " . $accountCreationTime . ", " . $id . ", " . $quantity . ", " . $addToCartTime . ", " . $orderCreationTime . ", " . $transactionCreationTime . ");";
						
				$register = $mysqli->query($sql);
			}	

			sleep(1);
		}

		header('Location: ../index.php'); 
	}
?>