<?php
	session_start();
	
	// delete item id from session array
	if(!isset($_GET['id']) || !isset($_SESSION['cart'])) {
		header('Location: ../cart.php');
	} else {
		unset($_SESSION['cart'][$_GET['id']]);
		header('Location: ../cart.php');
	}
?>