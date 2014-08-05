<?php
session_start();
require_once 'dbconfig.php';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	echo $id;
	echo "<br/>";
} else {
	
}

if(isset($_GET['action'])) {
	$action = $_GET['action'];
	echo $action;
	echo "<br/>";
} else {
	$action = 'view';
	
}

if(isset($_SESSION['cart'])) {
	if($action == 'add') {
		$_SESSION['cart'][$id] = $id;
	}
	
} else {
	$_SESSION['cart'] = array();
	$_SESSION['cart'][0] = $id;
	
}

foreach($_SESSION['cart'] as $id) {
	echo $id . '<a href="cart.php?action=remove&id=' . $id . '">Remove</a>';
	echo "<br/>";
}

echo '<a href="">Empty Cart</a>';
//session_destroy();

?>
