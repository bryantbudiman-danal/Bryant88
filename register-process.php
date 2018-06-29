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
		$fullName = "'" . $_POST['firstName'] . "' '" . $_POST['lastName'] . "'";
		$address = "'" . $_POST['address1'] . " " . $_POST['address2'] . " " . $_POST['cityTown'] . " " .
			$_POST['stateProvinceRegion'] ." " . $_POST['country'] . "'";
		$email = "'" . $_POST['email'] . "'";
		$phone = "'". $_POST['phone'] . "'";
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
				// edit below to match with bryant88 users database 
				echo "hmm: " . $fullName . ", " . $address . ", " . $email . ", " . $phone . ", " . $username . ", " . $password . ");/\n";
				$sql = "INSERT INTO users.people (fullname, address, email, phone, username, password)
					VALUES (" . $fullName . ", " . $address . ", " . $email . ", " . $phone . ", " . $username . ", " . $password . ");";
						
				$register = $mysqli->query($sql);

				if (!$register) {
					echo $mysqli->error;
				} else {
					// go back to home page
					echo "here!";
					$_SESSION['user'] = $username;
					header('Location: ../index.php?login=success'); 
					$results->close();
				}
			}
		}
	}
?>