<?php
	function randString($length) {
    	$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345678987654321QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzqwertyuioplkjhgfdsa";
    	$char = str_shuffle($char);
    	for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
        	$rand .= $char{mt_rand(0, $l)};
    	}
    	return $rand;
    }

	session_start();

	$host = 'bryant88.mysql.database.azure.com';
	$username = 'bryantbudiman@bryant88';
	$password = 'KopiLuwak88';
	$db_name = 'users';

	$loginSuccess = true; 

	//Establishes the connection
	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		$username = $_GET['username'];
		$password = $_GET['password'];

		$statement = "SELECT username FROM users.people where username='" . $username . "' and password='" . $password . "'";

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			if($result_count > 0) {
				// login sukses
				// redirect to home page, but with different nav bar 
				if(!isset($_SESSION['user'])){
	    			$_SESSION['user'] = $username;
				}

				$_SESSION['login'] = true; 
				$loginSuccess = true;
				$results->close();
			} else {
				// don't login - redirect back to login.php
				$loginSuccess = false; 
				$results->close();
			}
		}
	}

	$ch = curl_init('https://api.siftscience.com/v205/events');

	$login_status = '$success';
	if($loginSuccess == false) $login_status = '$failure';

	$session_id = randString(11);
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
 
	$browser = array(
		        		"$user_agent" => $user_agent,
				    );	

	$data = array(
					'$type' => '$login',
					'$api_key' => '3203af73a23bcb46',
					'$user_id' => $_SESSION['user'],
					'$session_id' => $session_id,
					'$login_status' => $login_status,
					'$ip' => $ip,
					'$browser' => $browser,
			    );

	$data_string = json_encode($data, JSON_PRETTY_PRINT);
var_dump($data_string);
	echo "hehe";

	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);      
	curl_setopt($ch, CURLOPT_HEADER, array(
		'Content-Type: application/json', 
		'Content-Length: ' . strlen($data_string))
	);

	$response = curl_exec($ch);	

	// if($loginSuccess == true) {
	// 	header('Location: ../index.php'); 
	// } else {
	// 	header('Location: ../login.php?fail=true'); 
	// }
?>