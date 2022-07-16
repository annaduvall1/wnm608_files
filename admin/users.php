<?php 

include"../lib/php/functions.php";




$users = file_get_json ("../data/users.json");






function showUserPage($user){
	
$classes = implode(",", $user->classes);


	//heredoc
	echo <<<HTML
	<nav class = "nav nav-crumbs">
		<ul>
			<li><a href="admin/users.php">Back</a></li>
		</ul>
	</nav>
	
	<div>
		<h2>$user->name</h2>
	<form>
		<label for = "type">Type:</label><br>
		<input type="text" id="type" name="type"><br>
		<label for = "email">Email:</label><br>
		<input type="text" id="email" name="email"><br><br>
		<input type = "submit">
	<form>
	</div>	
	HTML;
	}






?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>


	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<div class="card soft">


			<?php 

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			} else {

			
			?>
	
		<h2>Users List</h2>


		<nav class="nav">
			<ul>
	
	<?php 

	 	for($i=0;$i<count($users);$i++){
	 		echo "<li>
	 			<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>	
	 		</li>";
	 	}

	 	 ?>

			</ul>
		</nav>

	<?php } ?>

	<nav class="nav">
			<ul>
	 	<li>
	 			<a href='admin/users.php?id=0'>Anna</a>	
	 		</li><li>
	 			<a href='admin/users.php?id=1'>Layla</a>	
	 		</li><li>
	 			<a href='admin/users.php?id=2'>Audrey</a>	
	 		</li><li>
	 			<a href='admin/users.php?id=3'>Sarah</a>	
	 		</li><li>
	 			<a href='admin/users.php?id=4'>Michael</a>	
	 		</li>
			</ul>
		</nav>


	</div>
	</div>

</body>
</html>