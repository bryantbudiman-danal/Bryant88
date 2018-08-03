<?php
                $host = 'siftscience.mysql.database.azure.com';
                $username = 'bryantbudiman@siftscience';
                $password = 'KopiLuwak88';
                $db_name = 'people';

                $mysqli = mysqli_init();
                mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
                if (mysqli_connect_errno($mysqli)) {
                  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
                } else {
                  if (($handle = fopen("goodPeople.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                      $username = urlencode($data[0]);
                      $ch = curl_init('https://api.siftscience.com/v205/score/'. $username . '/?api_key=e7e2cfa100771efb');
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
                      $response = curl_exec($ch); 
                      $result = json_decode($response, true);

                      $accountAbuseScore = trim($result["scores"]["account_abuse"]["score"]);

                      $accountTakeoverScore = trim($result["scores"]["account_takeover"]["score"]);

                      $paymentAbuseScore = trim($result["scores"]["payment_abuse"]["score"]);

                      $sql = "INSERT INTO people.goodpeoplescorewithdecisions (username, accountAbuseScore,
                      accountTakeoverScore, paymentAbuseScore)
                        VALUES ('" . $username  . "', '" . 
                        $accountAbuseScore . "', '"  . 
                        $accountTakeoverScore . "', '" .  
                        $paymentAbuseScore ."');";
                
                      $sqlResult = $mysqli->query($sql);
                      if (!$sqlResult) {
                        echo $mysqli->error;
                      }                      
     
                      usleep(888);
                    }

                    fclose($handle);
                  } 
                }
?>