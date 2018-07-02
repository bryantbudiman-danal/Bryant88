<?php
	session_start();

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];	
	$country = $_POST['country'];


	$data = array("name" => "Hagrid", "age" => "36");                                                                    
	$data_string = json_encode($data);                                                                                   
	                                                                                                                     
	$ch = curl_init('https://api-sbox.dnlsrv.com/cigateway/id/v1/matchAndAttributes');             
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	    'Content-Type: application/json',                                                                                
	    'Content-Length: ' . strlen($data_string))                                                                       
	);                                                                                                                   
	                                                                                                                     
	$result = curl_exec($ch);


	// { 
	// 	"merchantId":"00DF00000015", 
	// 	"subMerchantId":"00DF00000016", 
	// 	"consentID":"uyciydfoudqwg912863017", 
	// 	"consentTimeStamp":"20130220142059", 
	// 	"correlationId":"ABC0881973286793", 
	// 	"authenticationKey":"abc0123456789", 
	// 	"attributeGroups":"matchScores,serviceInfo,accountInfo,additionAccountInfo,deviceInfo,tok enInfo,changeInfo", 
	// 	"intendedUseCase": "RM", 
	// 	"identity": { 
	// 	        "consumerFirstName":"Jane", 
	// 	        "consumerLastName":"Smith", 
	// 	        "consumerAddress1":"321 Main Street", 
	// 	        "consumerAddress2":"Suite 22", 
	// 	        "consumerCity":"New York", 
	// 	        "consumerState":"NY", 
	// 	        "consumerPostalCode":"10021", 
	// 	        "consumerEmailAddress":jane.smith@email.com 
	// 	} 
	// } 
?>