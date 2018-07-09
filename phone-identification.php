<?php
	function randString($length) {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	function generateRequestBody() {
		$correlationid = randString(11);

		date_default_timezone_set('UTC');
 
		$payload = 'correlationid=' . $correlationid .
				   '&timestamp=' . date("YmdHis") .
				   '&nonce=' . rand(10000,99999);

	    // Remove the base64 encoding from our key
	    $aesKey = base64_decode("ExNYKNKh2iCwPGijJdP64A==");

	    $iv = randString(14);

	    $encryptedPayload = openssl_encrypt($payload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	    $encryptedPayload = base64_encode($encryptedPayload);

	    $encryptedPayload = urlencode($encryptedPayload);

		$iv = urlencode($iv);

	    $requestBody = 'data=' . $encryptedPayload . '&cipherSalt=' . $iv;


		//
	 //    $encryptedPayload = urldecode($encryptedPayload);
	 //    $iv = urldecode($iv);

		// $decodedPayload = base64_decode($encryptedPayload);

		// $pleaseDecode = openssl_decrypt($decodedPayload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

		// echo "decodedPayload: " . $pleaseDecode;
		//

		return $requestBody;
	}          

	$postBody = generateRequestBody();

	$EVURL = 'http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo?' . $postBody;

	$evurlRequest = curl_init();
	curl_setopt($evurlRequest, CURLOPT_URL, $EVURL);
	curl_setopt($evurlRequest, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($evurlRequest, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($evurlRequest, CURLOPT_AUTOREFERER, true);

	$result = curl_exec($evurlRequest);
	echo $result;
?>