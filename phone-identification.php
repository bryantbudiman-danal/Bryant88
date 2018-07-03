<?php
	function randString() {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 50; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	function generateEVURL() {
		$url =  "http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo";

		$aesKey = "ExNYKNKh2iCwPGijJdP64A==";

		$payload = "correlationid=" . randString() . "&TimeStamp=" . date("YmdHis") .
			"&Nonce=" . rand(pow(10, 4), pow(10, 4)-1);

		echo $payload . "\n"; // TEST

	    // Remove the base64 encoding from our key
	    $aesKey = base64_decode($aesKey);

	    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-ctr'));

	    // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
	    $encryptedPayload = openssl_encrypt($payload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	    $encryptedPayload = base64_encode($encryptedPayload);

	    $EVURL = $url . "?data=" . rawurlencode($encryptedPayload) . "&cipherSalt=" . rawurlencode($iv);

	    return $EVURL;
	}

	echo generateEVURL();
?>