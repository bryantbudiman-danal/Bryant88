<?php
  function randString($length) {
    $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";

    $char = str_shuffle($char);

    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < 50; $i ++) {
      $rand .= $char{mt_rand(0, $l)};
    }
      
    return $rand;
  }

  $correlationId = randString(11);
  $associationKey = $_GET['id'];

  $parameters = array("merchantId" => "0218000710B56C", 
                      "correlationId" => $correlationId,
                      "associationKey" => $associationKey
                );

  $parametersJSON = json_encode($parameters, JSON_PRETTY_PRINT);

  date_default_timezone_set('UTC');
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
  
  $result = json_decode($resultJSON, true);

  $authenticationKey = trim($result['results']['phoneIdResult']['authenticationKey']);

  echo "authenticationKey is: " . $authenticationKey;

  //header('Location: ../getConsumerInfo.php?authenticationKey=' . $authenticationKey);
?>