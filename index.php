              <?php
                $ch = curl_init('https://api3.siftscience.com/v3/accounts/5b5215a24f0cdbcd952c0811/users/bella.haddad/decisions');

                $data = array(
                        'decision_id' => 'compromised_account_account_takeover',
                        'source' => 'MANUAL_REVIEW',
                        'analyst' => "Chow Kahn",
                        'description' => "This woman is a bad!",
                );

                $data_string = json_encode($data, JSON_PRETTY_PRINT);

                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
                curl_setopt($ch, CURLOPT_HEADER, array(
                  'Content-Type: application/json', 
                ));

                $response = curl_exec($ch);

                echo $response;

                echo "hi!";
              ?>