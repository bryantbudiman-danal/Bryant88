<?php
	session_start();

	echo $_GET['url'];

	$ipStackURL = 'http://api.ipstack.com/' . $_SERVER['REMOTE_ADDR'] . '?access_key=46060a72ff525ad6e6f6a8998eefa90d';

	$ch = curl_init($ipStackURL);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

	$response = curl_exec($ch);

	$response = json_decode($response, true);

	$latitude = $response['latitude'];

	$longitude = $response['longitude'];
	
	$host = 'siftscience.mysql.database.azure.com';
	$username = 'bryantbudiman@siftscience';
	$password = 'KopiLuwak88';
	$db_name = 'javascriptsnippet';

	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
	} else {
		$username = $_GET['userID'];
		$timestamp = date("Y-m-d H:i:s", $_GET['timestamp']);

		echo $username . "\n";
		echo $latitude . "\n";
		echo $longitude . "\n";
		echo $timestamp . "\n";

		// $sql = "CREATE TABLE IF NOT EXISTS `javascriptsnippet`.`" . $username . "`(
		// 		  `latitute` VARCHAR(45) NOT NULL,
		// 		  `longitude` VARCHAR(45) NOT NULL,
		// 		  `timestamp` VARCHAR(45) NOT NULL);";

		// $exec = $mysqli->query($sql);

		// if (!$exec) {
		// 	echo $mysqli->error;
		// }		  

		// $sql = "INSERT INTO `javascriptsnippet`.`" . $username . "`
		// 		(latitude, longitude, timestamp)
		// 			VALUES (" . $username . ", " . $firstName . ", " .
		// 				$lastName . ", " . $email . ", " . $address1 . ", " . $address2 . ", " . $city . ", " . $state . ", " . $zip . ", " . $country . ", " . $password . ");";
						
		// $exec = $mysqli->query($sql);

		// if (!$exec) {
		// 	echo $mysqli->error;
		// }
	}

	// header('Location: index.php?jsDone=true');
?>