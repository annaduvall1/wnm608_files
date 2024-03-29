<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

	<div class="container">
		
		<h2>Product List</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control">
			<div class="card soft">
				<div class="display-flex flex-wrap">
					<div class="display-flex flex-stretch">
					     <div class="flex-none">
						    <button data-filter="category" data-value="" type="button" class="form-button button-stretch">All</button>
					    </div>
					    <div class="flex-none">
						    <button data-filter="category" data-value="vase" type="button" class="form-button button-stretch">Vases</button>
					    </div>
					    <div class="flex-none">
						    <button data-filter="category" data-value="frame" type="button" class="form-button button-stretch">Frames</button>
					    </div>
					</div>
	            	<div class="flex-none">
						<div class="form-select">
				    		<select class="js-sort">
					    	    <option value="1">Newest</option>
					    	    <option value="2">Oldest</option>
					    	    <option value="3">Least Expensive</option>
					    	    <option value="4">Most Expensive</option>
					    	</select>
				    	</div>
					</div>
				</div>
			</div>
		</div>
	    
	    <div class='productlist grid gap'></div>
    </div>
</body>
</html>