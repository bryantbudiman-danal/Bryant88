<?php
	session_start();
	 
	// get the product id
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
	 
	// make quantity a minimum of 1
	$quantity=$quantity<=0 ? 1 : $quantity;
	$cart_item = array('quantity'=>$quantity);
	 
	/*
	 * check if the 'cart' session array was created
	 * if it is NOT, create the 'cart' session array
	 */
	if(!isset($_SESSION['cart'])){
	    $_SESSION['cart'] = array();
	}
	 
	if(array_key_exists($id, $_SESSION['cart'])){
		$new_quantity = $quantity + $_SESSION['cart'][$id]['quantity'];
		$new_cart_item = array('quantity'=>$new_quantity);
		$_SESSION['cart'][$id] = $new_cart_item;
	}
	else{
	    $_SESSION['cart'][$id] = $cart_item;
	}

	header('Location: ../cart.php');
?>