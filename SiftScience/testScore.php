<?php
	$ch = curl_init('https://api.siftscience.com/v205/score/tracey.hagenes/?api_key=e7e2cfa100771efb');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_exec($ch); 
?>