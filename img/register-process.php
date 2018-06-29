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
				// credentials already used 
				$results->close();
				// redirect back to register.php 
			} else {
				// edit below to match with bryant88 users database 
				$sql = "INSERT INTO schedule (name, race_type_id, distance, start_date, city, country_id, url)
								VALUES ('"
							. $_GET['name']
							. "', " 
							. $_GET['race_type']
							. ", "
							. $_GET['distance']
							. ", '"
							. $_GET['date']
							. "', '"
							. $_GET['city']
							. "', "
							. $country_id
							. ", '"
							. $_GET['url']
							. "');";

				$register = $mysqli->query($sql);

				if (!$register) {
					echo $mysqli->error;
				} else {
					// go back to home page
					$results->close();
				}
			}
		}
	}
?>