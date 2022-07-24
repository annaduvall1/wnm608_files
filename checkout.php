<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">	
	<title>Checkout</title>

	<?php include "parts/meta.php"; ?>


</head>
<body>


	<?php include "parts/navbar.php"; ?>
	


<div class="container">
	<div class="card soft">
		<h2>Checkout</h2>


				<p>This is item # <?= $_GET['id'] ?></p>

			</div>
		</div>


<div div class="container">
	<div class="card soft">
		<h2>In Your Cart</h2>
		<p>What's in your cart?</p>


				<p>This is item # <?= $_GET['id'] ?></p>

			</div>
		</div>


		<div class="container" id="forms">
		<h3>Your Information</h3>

		 <div class="card soft">
                <h3>Address</h3>
                <form>
                	<lable class="form-label">Name</lable>
                    <input type="Name"><br>
                    <lable class="form-label">Address</lable>
                    <input type="Address"><br>
                    <lable class="form-label">City</lable>
                    <input type="City"><br>
                    <lable class="form-label">State</lable>
                    <input type="State"><br>
                    <lable class="form-label">Zipcode</lable>
                    <input type="Zipcode"><br>

          <div class="form-control">
			<button type="button" class="form-button">Submit</button>
			</div>
         </form>


          <h3>Billing</h3>
                <form>
                	<lable class="form-label">Credit Card Number</lable>
                    <input type="Name"><br>
                    <lable class="form-label">Name on Card</lable>
                    <input type="State"><br>
                    <lable class="form-label">Expiration</lable>
                    <input type="Address"><br>
                    <lable class="form-label">Security Code</lable>
                    <input type="City"><br>

          <div class="form-control">
			<button type="button" class="form-button">Submit</button>
			</div>
         </form>


</body>
</html>