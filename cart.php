<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">	
	<title>Shopping Cart</title>

	<?php include "parts/meta.php"; ?>


</head>
<body>


	<?php include "parts/navbar.php"; ?>
	


<div class="container">
	<div class="card soft">
		<h2>Shopping Cart</h2>


				<p>This is item # <?= $_GET['id'] ?></p>

			</div>
		</div>


<div div class="container">
	<div class="card soft">
		<h2>In Your Cart</h2>
		<p>What's in your cart?</p>


				<p>This is item # <?= $_GET['id'] ?></p>
				__________________________________________

				<p><a href="checkout.php">Go To Checkout >></a></p>

			</div>
		</div>

</body>
</html>