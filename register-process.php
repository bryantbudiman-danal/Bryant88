<?php
	session_start();

	$host = 'bryant88.mysql.database.azure.com';
	$username = 'bryantbudiman@bryant88';
	$password = 'KopiLuwak88';
	$db_name = 'users';

	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		die('Failed to connect to MySQL: '.mysqli_connect_error());
	}

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		$username = "'" . $_POST['userName'] . "'";
		$firstName = "'" . $_POST['firstName'] . "'";
		$lastName = "'" . $_POST['lastName'] . "'";
		$email = "'" . $_POST['email'] . "'";
		$address1 = "'" . $_POST['address1'] . "'";
		$address2 = "'" . $_POST['address2'] . "'";
		$city = "'" . $_POST['city'] . "'";
		$state = "'" . $_POST['state'] . "'";
		$zip = "'" . $_POST['zip'] . "'";
		$country = "'" . $_POST['country'] . "'";
		$password = "'" . $_POST['password'] + "'";

		$statement = "SELECT username FROM users.people where username=" . $username; 

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			
			if($result_count > 0) {
				// credentials already used 
				header('Location: ../register.php?fail=true'); 
				$results->close();
			} else {
				$sql = "INSERT INTO users.people (username, firstName, lastName, email, address1, address2, city, state, zip, country, password)
					VALUES (" . $fullName . ", " . $address . ", " . $email . ", " . $phone . ", " . $username . ", " . $password . ");";
						
				$register = $mysqli->query($sql);

				if (!$register) {
					echo $mysqli->error;
				} else {
					// go back to home page
					$_SESSION['user'] = $username;
					header('Location: ../index.php?login=success'); 
					$results->close();
				}
			}
		}
	}
?>