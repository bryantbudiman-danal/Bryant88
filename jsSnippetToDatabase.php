<?php
	session_start();

	echo $_GET['url'];

	$ipStackURL = 'http://api.ipstack.com/' . $_SERVER['REMOTE_ADDR'] . '?access_key=46060a72ff525ad6e6f6a8998eefa90d';

	$ch = curl_init($ipStackURL);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

	$response = curl_exec($ch);
	
	echo $response;  
?>