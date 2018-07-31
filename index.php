<?php
            
 $ch = curl_init('https://api.siftscience.com/v205/score/'. 'bob.johnson' . '/?api_key=e7e2cfa100771efb');
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
                      $response = curl_exec($ch); 
                      echo $response;

             // $host = 'siftscience.mysql.database.azure.com';
             //    $username = 'bryantbudiman@siftscience';
             //    $password = 'KopiLuwak88';
             //    $db_name = 'people';

             //    $mysqli = mysqli_init();
             //    mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
             //    if (mysqli_connect_errno($mysqli)) {
             //      echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
             //    } else {
             //      if (($handle = fopen("badPeople5.csv", "r")) !== FALSE) {
             //        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

             //          $username = urlencode($data[0]);
             //          $ch = curl_init('https://api.siftscience.com/v205/score/'. $username . '/?api_key=e7e2cfa100771efb');
             //          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
             //          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
             //          $response = curl_exec($ch); 
             //          $result = json_decode($response, true);

             //          $accountAbuseScore = trim($result["scores"]["account_abuse"]["score"]);
             //          $accountAbuseReasons = $result["scores"]["account_abuse"]["reasons"];
             //          $accountAbuseReasonsString = "";
             //          $accountAbuseReasonsScores = "";
             //          for($i=0; $i<count($accountAbuseReasons); $i++) {
             //            if($i < count($accountAbuseReasons)-1) {
             //              $accountAbuseReasonsString .= $accountAbuseReasons[$i]["name"] . "+";
             //              $accountAbuseReasonsScores .=$accountAbuseReasons[$i]["value"] . "+";
             //            }
             //            else if($i == count($accountAbuseReasons)-1) {
             //              $accountAbuseReasonsString .= $accountAbuseReasons[$i]["name"];
             //              $accountAbuseReasonsScores .=$accountAbuseReasons[$i]["value"];
             //            }
             //          }

             //          $accountTakeoverScore = trim($result["scores"]["account_takeover"]["score"]);
             //          $accountTakeoverReasons = $result["scores"]["account_takeover"]["reasons"];
             //          $accountTakeoverReasonsString = "";
             //          $accountTakeoverReasonsScores = "";
             //          for($i=0; $i<count($accountTakeoverReasons); $i++) {
             //            if($i < count($accountTakeoverReasons)-1) {
             //              $accountTakeoverReasonsString .= $accountTakeoverReasons[$i]["name"] . "+";
             //              $accountTakeoverReasonsScores .= $accountTakeoverReasons[$i]["value"] . "+";
             //            }
             //            else if($i == count($accountTakeoverReasons)-1) {
             //              $accountTakeoverReasonsString .= $accountTakeoverReasons[$i]["name"];
             //              $accountTakeoverReasonsScores .= $accountTakeoverReasons[$i]["value"];
             //            }
             //          }

             //          $paymentAbuseScore = trim($result["scores"]["payment_abuse"]["score"]);
             //          $paymentAbuseReasons = $result["scores"]["payment_abuse"]["reasons"];
             //          $paymentAbuseReasonsString = "";
             //          $paymentAbuseReasonsScores = "";
             //          for($i=0; $i<count($paymentAbuseReasons); $i++) {
             //            if($i < count($paymentAbuseReasons)-1) {
             //              $paymentAbuseReasonsString .= $paymentAbuseReasons[$i]["name"] . "+";
             //              $paymentAbuseReasonsScores .= $paymentAbuseReasons[$i]["value"] . "+";
             //            }
             //            else if($i == count($paymentAbuseReasons)-1) {
             //              $paymentAbuseReasonsString .= $paymentAbuseReasons[$i]["name"];
             //              $paymentAbuseReasonsScores .= $paymentAbuseReasons[$i]["value"];
             //            }
             //          } 

             //          $sql = "INSERT INTO people.badpeople5score (username, accountAbuseScore, accountAbuseReasons, accountAbuseReasonsScores,
             //          accountTakeoverScore, accountTakeoverReasons, accountTakeoverReasonsScores, paymentAbuseScore, paymentAbuseReasons, paymentAbuseReasonsScores)
             //            VALUES ('" . $username  . "', '" . 
             //            $accountAbuseScore . "', '" . $accountAbuseReasonsString  . "', '" . $accountAbuseReasonsScores . "', '" . 
             //            $accountTakeoverScore . "', '" .  $accountTakeoverReasonsString . "', '" . $accountTakeoverReasonsScores . "', '" . 
             //            $paymentAbuseScore . "', '" . $paymentAbuseReasonsString . "', '" . $paymentAbuseReasonsScores ."');";
                
             //          $sqlResult = $mysqli->query($sql);
             //          if (!$sqlResult) {
             //            echo $mysqli->error;
             //          }                      
     
             //          usleep(88888);
             //        }

             //        fclose($handle);
             //      } 
             //    }
?>