<?php
	function randString($length) {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	session_start();

	$host = 'bryant88.mysql.database.azure.com';
	$username = 'bryantbudiman@bryant88';
	$password = 'KopiLuwak88';
	$db_name = 'users';

	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		$username = "'" . $_POST['userName'] . "'";
		$firstName = "'" . $_POST['firstName'] . "'";
		$lastName = "'" . $_POST['lastName'] . "'";
		$email = "'" . $_POST['email'] . "'";
		$address1 = "'" . $_POST['address1'] . "'";
		$address2 = "'" . $_POST['address2'] . "'";
		$city = "'" . $_POST['city'] . "'";
		$state = "'" . $_POST['state'] . "'";
		$zip = "'" . $_POST['zip'] . "'";
		$country = "'" . $_POST['country'] . "'";
		$password = "'" . $_POST['password'] + "'";

		$statement = "SELECT username FROM users.people where username=" . $username; 

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			
			if($result_count > 0) {
				// credentials already used 
				header('Location: ../register.php?fail=true'); 
				$results->close();
			} else {
				$sql = "INSERT INTO users.people (username, firstName, lastName, email, address1, address2, city, state, zip, country, password)
					VALUES (" . $fullName . ", " . $address . ", " . $email . ", " . $phone . ", " . $username . ", " . $password . ");";
						
				$register = $mysqli->query($sql);

				if (!$register) {
					echo $mysqli->error;
				} else {
					// go back to home page
					$_SESSION['user'] = $username;
					header('Location: ../index.php?login=success'); 
					$results->close();
				}
			}
		}
	}

	// API CALL TO SIFT SCIENCE
	$ch = curl_init('https://api.siftscience.com/v205/events');

	$session_id = randString(11);
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$name = $_POST['firstName'] . " " . $_POST['lastName'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];

	$billing_address = array(
		             	"$name" => $name,
		             	"$phone" => $phone,
		             	"$address_1" => $address1,
		             	"$address_2" => $address2,
		             	"$city" => $city,
		             	"$region" => $state,
		             	"$country" => $country,
		             	"$zipcode" => $zip
				    );	

	$data = array(
					"$type" => "$create_account",
					"$api_key" => "d5e30e6affe617f1",
					"$user_id" => $username,
					"$session_id" => $session_id,
					"$user_email" => $email,
					"$phone" => $phone,
					"$billing_address" => $billing_address
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
?>