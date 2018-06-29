<?php
	session_start();

	$host = 'bryant88.mysql.database.azure.com';
	$username = 'bryantbudiman@bryant88';
	$password = 'KopiLuwak88';
	$db_name = 'users';

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
		$username = $_POST['username'];
		$password = $_POST['password'];

		$statement = "SELECT username FROM users.people where username='" . $username . "' and password='" . $password . "'";

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			if($result_count > 0) {
				// login sukses
				// redirect to home page, but with different nav bar 
				$_SESSION['user'] = $username;
				$_SESSION['login'] = true; 
				header('Location: ../index.php'); 
				$results->close();
			} else {
				// don't login - redirect back to login.php
				header('Location: ../login.php?fail=true'); 
				$results->close();
			}
		}
	}
?>