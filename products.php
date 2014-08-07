<?php
	require_once 'dbconfig.php';

	$sql = 'SELECT * FROM shoppingcart_products';

	if($dbconnect->connect_errno) {
		printf ("Connect failed: %s\n", $dbconnect->connect_error);
		exit();
	}

	if(!$result = $dbconnect->query($sql)) {
		printf ("Error message: %s\n", $dbconnect->error);
		exit();
	}
?>
<html>
	<head>
		<title>Product List</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
		<?php

			if($result->num_rows > 0) {
				echo '<table class="table">';
				echo '<tr><th>Name</th><th>Price</th></tr>';
				while(list($id, $name, $price) = $result->fetch_array()) {
					echo '<tr>';
					echo '<td>' . $name . '</td>';
					echo '<td>' . '$' . $price . '</td>';
					echo '<td><a href="addtocart.php?action=add&id=' . $id . '">Add To Cart</a></td>';
					echo '</tr>';
				}
				echo '<tr><td><a href="cart.php">View Cart</a></td><td></td><td></td></tr>';
				echo '</table>';
			}			
		?>
	</body>
</html>
