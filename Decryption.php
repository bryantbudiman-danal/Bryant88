<?php
	// The response in json format, contains the payload and the cipher salt
  	$result = json_decode($resultJSON, true);

	// base64 decrypt the aes key first
	$aesKey = base64_decode("BbRDqr+rvcdHsb63w49xJA==");

	// get cipher salt from payload
 	$iv = trim($result['results']['cipherSalt']);

 	// the encrypted payload
  	$encryptedPayload = trim($result['results']['encryptedData']);

  	// base64 decode the payload
  	$decodedPayload = base64_decode($encryptedPayload);

  	// aes decrypt the payload
  	$pleaseDecode = openssl_decrypt($decodedPayload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);
?>