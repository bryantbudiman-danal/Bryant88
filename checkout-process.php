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

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];	
	$country = $_POST['country'];

	$identityArray = array("consumerFirstName" => "" . $firstName . "",
						   "consumerLastName" => "" . $lastName . "",
						   "consumerAddress1" => "" . $address1 . "",
						   "consumerAddress2" => "" . $address2 . "",
						   "consumerCity" => "" . $city . "",
						   "consumerState" => "" . $state . "",
						   "consumerPostalCode" => "" . $zip . "",
						   "consumerEmailAddress" => "" . $email . ""
				 	);

	$identityJSON = json_encode($identityArray);

	$randomID = randString();

	$parameters = array("merchantId" => "0218000710B56C", 
				  "attributeGroups" => "matchScores", 
				  "correlationId" => $randomID, 
				  "intendedUseCase" => "RM",
				  "consumerMdn" => "+14444441002"
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

	$aesKey = base64_decode('BbRDqr+rvcdHsb63w49xJA==');

	echo "aesKey after decode: " . $aesKey . "\n";
	$iv =  trim($result['results']['cipherSalt']);

	echo "iv: " . $iv . "\n";

	$encryptedPayload = trim($result['results']['encryptedData']);

	echo "encryptedPayload: " . $encryptedPayload . "\n\n";

	$decodedPayload = base64_decode($encryptedPayload);

	$decodedPayload = openssl_encrypt($decodedPayload, 'AES-128-CTR', $aesKey, 0, hex2bin($iv));

	echo "decodedPayload: " . $decodedPayload; 
?>