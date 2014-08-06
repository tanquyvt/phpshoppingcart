<?php
session_start();
require_once 'dbconfig.php';

$id = isset($_GET['id']) ? $_GET['id'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if(($action == 'remove') && (count($_SESSION['cart']) != 0)) {
	$_SESSION['cart'] = array_diff($_SESSION['cart'], array($id));
	header('Location: cart.php');
}

if($action == 'empty') {
	session_destroy();
	header('Location: cart.php');
}

echo '<a href="products.php">Continue Shopping</a>';
echo '<br/>';

if(isset($_SESSION['cart']) && (count($_SESSION['cart']) != 0)) {

	foreach($_SESSION['cart'] as $id) {
		echo $id . ' <a href="cart.php?action=remove&id=' . $id . '">Remove</a>';
		echo "<br/>";
	}

	echo '<a href="cart.php?action=empty">Empty Cart</a>';
} else {
	
}

if(!isset($_SESSION['cart']) || (count($_SESSION['cart']) == 0)) {
	echo "Your cart is empty.";
}


?>
