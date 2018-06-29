<?php

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($mysqli->connect_errno) {
		// DB Error
		echo $mysqli->connect_error;
	} else {
		$username = $_GET['username'];
		$password = $_GET['password'];

		$statement = "SELECT id FROM users where username='" . $username . "' and password='" . $password . "'";

		$results = $mysqli->query($statement);

		if(!$results) {
			echo $mysqli->error;
		} else {
			$result_count = $results->num_rows;
			if($result_count > 0) {
				// login
				// redirect to home page, but with different nav bar 
				$results->close();
			} else {
				// don't login - redirect back to login.php
				$results->close();
			}
		}
	}
?>