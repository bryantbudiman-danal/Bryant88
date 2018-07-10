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

    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];	
	$country = $_POST['country'];

	$getURL = 'id=' . $id . '&firstName=' . $firstName . '&lastName=' . $lastName . '&email=' . $email . '&address1=' . $address1 . '&address2=' . $address2 . '&city=' . $city . '&state=' . $state . '&zip=' . $zip . '&country=' . $country;

	$requestBody = '&redirect=https://bryant88.azurewebsites.net/phoneID-result-match.php?' . $getURL . '&data=' . $encryptedPayload . '&cipherSalt=' . $iv;

	$EVURL = 'http://mi-sbox.dnlsrv.com/msbox/id/kJlSiWWo?' . $requestBody;

	header('Location: ' . $EVURL);
?>