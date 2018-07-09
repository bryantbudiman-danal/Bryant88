<?php
  function randString() {
    $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";

    $char = str_shuffle($char);

    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 50; $i ++) {
      $rand .= $char{mt_rand(0, $l)};
    }
      
    return $rand;
  }

  /////////////////////

//   $temp = curl_init('http://misbox.dnlsrv.com/msbox/id/vIZtkeID?data=hbJjZ0Rc%2Fw0NjZl0v3RACFIyqDt74Za3PgejS6PNxicSHj%2FRvZniIbYhpBrN
// 217JDBI8AaA3Zj3DlZXpRt6G&cipherSalt=BOeg3HVwm9aBacHT');               

//   curl_setopt($temp, CURLOPT_RETURNTRANSFER, true);   

//     curl_setopt($temp, CURLOPT_HTTPHEADER, array(  
//     'Content-Length: ' . strlen($postBody))                                
//     );                          

//      $date = date("c");

//       curl_setopt($temp, CURLOPT_HTTPHEADER, array(  
//     'Authorization: qNl25zFXkJgsGR8vlhk57BelKaZPS20K',
//     'Accept: application/json',
//     'RequestTime: ' . $date,
//     'Content-Type: application/json'                              
//   ));  

//   $result = curl_exec($temp);

//   echo $result;

/////////////////

  $correlationID = randString();

  $parameters = array("merchantId" => "0218000710B56C", 
                      "correlationId" => $correlationID,
                      "associationKey" => "aaaaa88888"
                );

  $parametersJSON = json_encode($parameters, JSON_PRETTY_PRINT);

  $date = date("c");
                                                           
  $ch = curl_init('https://api-sbox.dnlsrv.com/cigateway/id/v1/phoneIdResult');        

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

  echo $resultJSON;
  
  $result = json_decode($resultJSON, true);

  $aesKey = base64_decode("BbRDqr+rvcdHsb63w49xJA==");

  $iv =  trim($result['results']['cipherSalt']);

  $encryptedPayload = trim($result['results']['encryptedData']);

  $decodedPayload = base64_decode($encryptedPayload);

  $pleaseDecode = openssl_decrypt($decodedPayload, 'aes-128-ctr', $aesKey, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv);

  echo $pleaseDecode;

?>