<?php
	session_start();

	$host = 'siftscience.mysql.database.azure.com';
	$username = 'bryantbudiman@siftscience';
	$password = 'KopiLuwak88';
	$db_name = 'people';

	$loginSuccess = true; 

	//Establishes the connection
	$mysqli = mysqli_init();
	mysqli_real_connect($mysqli, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($mysqli)) {
		$errorMessage = mysqli_connect_error();
		header('Location: ../login.php?sqlFail=' . $errorMessage); 
	}

	if ($mysqli->connect_errno) {
		$errorMessage = mysqli_connect_error();
		header('Location: ../login.php?sqlFail=' . $errorMessage); 
	} else {
		$username = $_GET['username'];
		$password = $_GET['password'];

		$statement = "SELECT username FROM people.users where username='" . $username . "' and password='" . $password . "'";

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			if($result_count > 0) {
				// login sukses
				// redirect to home page, but with different nav bar 
				if(!isset($_SESSION['user'])) {
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

	if($loginSuccess == true) {
		header('Location: ../index.php'); 
	} else {
		header('Location: ../login.php?jsDone=true'); 
	}
?>