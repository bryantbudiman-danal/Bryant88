<?php
	function randString() {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 38; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	function generateRequestBody() {
		$correlationid = randString();

		$payload = "correlationid=" . $correlationid .
				   '&amp;timestamp=' . date("YmdHis") .
				   '&amp;nonce='.rand(10000,99999);

        echo "correlationid is: " . $correlationid;
        
	    // Remove the base64 encoding from our key
	    $aesKey = base64_decode("ExNYKNKh2iCwPGijJdP64A==");

 	    // Generate the cipher salt
	    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-ctr'));
	    $iv = bin2hex($iv);

	    $encryptedPayload = openssl_encrypt($payload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	    $encryptedPayload = base64_encode($encryptedPayload);

	    $encryptedPayload = urlencode($encryptedPayload);

		$iv = urlencode($iv);

	    $requestBody = "cipherSalt=" . $iv . "&amp;data=" . $encryptedPayload;

		///
	 //    $encryptedPayload = urldecode($encryptedPayload);
	 //    $iv = urldecode($iv);

		// $decodedPayload = base64_decode($encryptedPayload);

		// $pleaseDecode = openssl_decrypt($decodedPayload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

		// echo "decodedPayload: " . $pleaseDecode;
		///

		return $requestBody;
	}

	// $ch = curl_init('http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo');          

	$postBody = generateRequestBody();

	// curl_setopt($ch, CURLOPT_POST, true);      

	// curl_setopt($ch, CURLOPT_POSTFIELDS, $postBody);

	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

 //    $date = date("c"); 

 //    curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
 //    	'Authorization: qNl25zFXkJgsGR8vlhk57BelKaZPS20K',
 //        'Accept: application/json',
 //        'RequestTime: ' . $date,
	// 	'Content-Length: ' . strlen($postBody))                                
 //    );                          

	// $result = curl_exec($ch);

	echo 'http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo?' . $postBody;
?>