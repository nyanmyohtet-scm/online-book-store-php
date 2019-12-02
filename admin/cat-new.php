<?php include("confs/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cat New</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>New Category</h1>

	<ul class="menu">
		<li><a href="book-list.php">Manage Books</a></li>
		<li><a href="cat-list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Orders</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

	<form action="cat-add.php" method="POST">
		<label for="naem">Category Name</label>
		<input type="text" name="name" id="name">

		<label for="remark">Remark</label>
		<textarea name="remark" id="remark"></textarea>
		<br>
		<input type="submit" value="Add Category">
	</form>
</body>
</html>
