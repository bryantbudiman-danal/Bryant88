<?php
	session_start();

	$ch = curl_init('https://api.siftscience.com/v205/events');

	session_start();
	$username = $_SESSION['user'];

	$data = array(
					"$type" => "$logout",
					"$api_key" => "d5e30e6affe617f1",
					"$user_id" => $username
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

	session_destroy();
	header('Location: ../index.php');
?>