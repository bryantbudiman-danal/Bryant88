<?php
	session_start();
	 
	// get the product id
	$id = $_GET['id'];
	$quantity = $_GET['quantity'];
	 
	if(array_key_exists($id, $_SESSION['cart'])){
		if($quantity == 0) {
			unset($_SESSION['cart'][$id]);
		} else {
			$new_cart_item = array('quantity'=>$quantity);
			$_SESSION['cart'][$id] = $new_cart_item;
		}
	}

	header('Location: ../cart.php');
?>