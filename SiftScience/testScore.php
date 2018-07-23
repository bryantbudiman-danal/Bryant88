<?php
	$ch = curl_init('https://api.siftscience.com/v205/score/verda.wehner/?api_key=e7e2cfa100771efb');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_exec($ch); 
?>