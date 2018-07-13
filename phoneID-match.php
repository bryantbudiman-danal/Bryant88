<?php
	function randString($length) {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	$correlationId = randString(11);

	date_default_timezone_set('UTC');
 
	$payload = 'correlationid=' . $correlationId .
			   '&timestamp=' . date("YmdHis") .
			   '&nonce=' . rand(10000,99999);

	// Remove the base64 encoding from our key
	$aesKey = base64_decode("ExNYKNKh2iCwPGijJdP64A==");

	$iv = randString(14);

	$encryptedPayload = openssl_encrypt($payload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	$encryptedPayload = base64_encode($encryptedPayload);

	$encryptedPayload = urlencode($encryptedPayload);

    $iv = urlencode($iv);

    session_start();

    $_SESSION['firstName'] = $_GET['firstName'];
    $_SESSION['lastName'] = $_GET['lastName'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['address1'] = $_GET['address1'];
    $_SESSION['address2'] =  $_GET['address2'];
    $_SESSION['city'] =  $_GET['city'];
    $_SESSION['state'] =  $_GET['state'];
    $_SESSION['zip'] =  $_GET['zip'];
    $_SESSION['country'] =  $_GET['country'];
    $_SESSION['phone'] = $_GET['phone'];

	$requestBody = '&redirect=https://bryant88.azurewebsites.net/phoneID-result-match.php?id=' . $correlationId . '&data=' . $encryptedPayload . '&cipherSalt=' . $iv;

	$EVURL = 'http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo?' . $requestBody;

	header('Location: ' . $EVURL);
?>