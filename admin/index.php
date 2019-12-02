<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Login to Book Store Administration</h1>
	<form action="login.php" method="POST">
		<label for="name">Name</label>
		<input type="text" id="name" name="name">

		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<br>

		<input type="submit" value="Admin Login">
	</form>
</body>
</html>
