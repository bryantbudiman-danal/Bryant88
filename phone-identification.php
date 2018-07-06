<?php
	function randString() {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 38; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	function generateEVURL() {
		$url =  "http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo";

		echo "url is: " . $url . "\n\n\n";

		$payload = "correlationid=" . randString() . "&timestamp=" . date("YmdHis") .
			"&nonce=" . rand(pow(10, 4), pow(10, 4)-1);

		echo "payload is: " . $payload . "\n\n\n";

		$aesKey = "ExNYKNKh2iCwPGijJdP64A==";
	    // Remove the base64 encoding from our key
	    $aesKey = base64_decode($aesKey);

	    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-ctr'));

	    $encryptedPayload = openssl_encrypt($payload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	    $encryptedPayload = base64_encode($encryptedPayload);

	    $EVURL = $url . "?data=" . rawurlencode($encryptedPayload) . "&cipherSalt=" . rawurlencode($iv);

	    //return $EVURL;
	}

	echo generateEVURL();
?>