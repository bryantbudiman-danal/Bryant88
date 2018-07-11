<?php
	session_start();

	function randString() {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 50; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

    session_start();

  	$firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $address1 = $_SESSION['address1'];
    $address2 = $_SESSION['address2'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $zip = $_SESSION['zip']; 
    $country = $_SESSION['country'];

	$identityArray = array("consumerFirstName" => "" . $firstName . "",
						   "consumerLastName" => "" . $lastName . "",
						   "consumerAddress1" => "" . $address1 . "",
						   "consumerAddress2" => "" . $address2 . "",
						   "consumerCity" => "" . $city . "",
						   "consumerState" => "" . $state . "",
						   "consumerPostalCode" => "" . $zip . "",
						   "consumerEmailAddress" => "" . $email . ""
				 	);

	$_SESSION['firstName'] = "";
    $_SESSION['lastName'] = "";
    $_SESSION['email'] = "";
    $_SESSION['address1'] = "";
    $_SESSION['address2'] = "";
    $_SESSION['city'] = "";
    $_SESSION['state'] = "";
    $_SESSION['zip'] = "";
    $_SESSION['country'] = "";

	$identityJSON = json_encode($identityArray);

	$randomID = randString();

	$authenticationKey = $_GET['authenticationKey'];

	$parameters = array("merchantId" => "0218000710B56C", 
				  "attributeGroups" => "matchScores,serviceInfo,accountInfo,additionAccountInfo,deviceInfo,tok
enInfo,changeInfo", 
				  "correlationId" => $randomID, 
				  "intendedUseCase" => "RM",
				  "authenticationKey" => $authenticationKey
				);

	$parameters['identity'] = json_decode($identityJSON, true); 

	$parametersJSON = json_encode($parameters, JSON_PRETTY_PRINT);

	$date = date("c");
                                                           
	$ch = curl_init('https://api-sbox.dnlsrv.com/cigateway/id/v1/matchAndAttributes');
	
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parametersJSON);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
		'Authorization: qNl25zFXkJgsGR8vlhk57BelKaZPS20K',
		'Accept: application/json',
		'RequestTime: ' . $date,
	    'Content-Type: application/json',                                          
	    'Content-Length: ' . strlen($parametersJSON))                                
	);                     
	                                                                                                                     
	$resultJSON = curl_exec($ch);
	$result = json_decode($resultJSON, true);

	$aesKey = base64_decode("BbRDqr+rvcdHsb63w49xJA==");

	$iv =  trim($result['results']['cipherSalt']);

	$encryptedPayload = trim($result['results']['encryptedData']);

	$decodedPayload = base64_decode($encryptedPayload);

	$pleaseDecode = openssl_decrypt($decodedPayload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

	$result['results']['encryptedData'] = $pleaseDecode;

	echo nl2br($result['results']['encryptedData']);

	echo nl2br($_SESSION['phoneIdResult-match']);
?>