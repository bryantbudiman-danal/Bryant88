<?php
	session_start();

	$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'bryant88-users');

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$statement = "SELECT username FROM users where username='" . $username . "' and password='" . $password . "'";

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