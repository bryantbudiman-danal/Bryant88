<?php
	session_start();

	function randString() {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 14; $i ++) {
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

	//$authenticationKey = $_GET['authenticationKey'];

	date_default_timezone_set('UTC');

	$parameters = array("merchantId" => "0218000710B56C", 
				  "attributeGroups" => "matchScores,serviceInfo,accountInfo", 
				  "correlationId" => $randomID, 
				  "intendedUseCase" => "RM",
				  "authenticationKey" => "AK4444441001",
				  "consentId" => randString(),
				  "consentTimeStamp" => date("YmdHis")
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
	$result = json_encode($result,JSON_PRETTY_PRINT);

	$phoneIDResult = json_encode($_SESSION['phoneIdResult-match'], JSON_PRETTY_PRINT);

	// echo nl2br("PHONE API CALL RESULT: \n");
	// echo nl2br($phoneIDResult);

	// echo nl2br("\n");

	// echo nl2br("MATCHANDATTRIBUTES API CALL RESULT: \n");
	// echo nl2br($result);


	if ( isset($_SESSION['user']) ) {
		$userID = $_SESSION['user'];
		$ch = curl_init('https://api3.siftscience.com/v3/accounts/5b46980a4f0c05de1da1b600/users/' . $userID . '/decisions');

		$decisionInfo = array(
							  "decision_id" => "order_looks_bad_account_abuse",
							  "source" => "AUTOMATED_RULE",
							);

  		$decisionInfoJSON = json_encode($decisionInfo, JSON_PRETTY_PRINT);
                                                           
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                   

		curl_setopt($ch, CURLOPT_POSTFIELDS, $parametersJSON);            

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                         

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: 3203af73a23bcb46',
		    'Accept: application/json',
		    'Content-Type: application/json',                                          
		    'Content-Length: ' . strlen($parametersJSON))        
		);   

		$response = curl_exec($ch);

		//echo $response;
	}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bryant88 Cool Sneakers</title>

  </head>

  <body >
  	<?php
  		echo $phoneIDResult;

  		echo $result;

  	?>

  </body>

</html>



