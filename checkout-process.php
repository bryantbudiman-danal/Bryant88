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

	$parameters = array("merchantId" => "", 
				  "attributeGroups" => "matchScores", 
				  "correlationId" => $randomID, 
				  "intendedUseCase" => "RM",
				  "consumerMdn" => "+14444441002"
				);

	$parameters['identity'] = json_decode($identityJSON, true); 

	$parametersJSON = json_encode($parameters, JSON_PRETTY_PRINT);

	$date = date("c");
                                                           
	$ch = curl_init('');             
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $parametersJSON);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
		'Authorization: ',
		'Accept: application/json',
		'RequestTime: ' . $date,
	    'Content-Type: application/json',                                                                                
	    'Content-Length: ' . strlen($parametersJSON))                                                                       
	);                     
	                                                                                                                     
	$resultJSON = curl_exec($ch);
	$result = json_decode($resultJSON, true);

	$aesDecryptionKey = '';
	$decodedSecretKey = base64_decode($aesDecryptionKey);
	echo "decoded secret key: " . $decodedSecretKey . "\n";

	$encryptedPayload = $result['results']['encryptedData'];
	echo "encyptedData: " . $encryptedPayload . "\n";
	$decodedPayload = base64_decode($encryptedPayload);

// 	JSON Data Decryption AES Key: BbRDqr+rvcdHsb63w49xJA==
// JSON Decryption Algo: AES/CTR/NoPadding

	echo $result; 
?>