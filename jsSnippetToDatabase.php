<?php
	session_start();

	if($_GET['userID'] != "-88") {

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

		$sql = "CREATE TABLE IF NOT EXISTS javascriptsnippet." . $username . "(
				  latitude VARCHAR(45) NOT NULL,
				  longitude VARCHAR(45) NOT NULL,
				  timestamp DATETIME NOT NULL);";

		$exec = $mysqli->query($sql);

		if (!$exec) {
			echo $mysqli->error;
		}		  

		$sql = "INSERT INTO javascriptsnippet." . $username . "(latitude, longitude, timestamp)
					VALUES ('" . $latitude . "', '" . $longitude . "', '" . date("Y-m-d H:i:s", $timestamp) . "');";
						
		$exec = $mysqli->query($sql);

		if (!$exec) {
			echo $mysqli->error;
		}
	}

	$_SESSION['jsDone'] = true; 

	echo "test";

	//header('Location: ../index.php');
	}

	//header('Location: ../index.php');
?>