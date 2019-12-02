<?php
	session_start();
	$name = $_POST['name'];
	$password = $_POST['password'];

	if($name == "admin" and $password == "1234") {
		$_SESSION['auth'] = true;
		/**
		 * redirect to book-list.php
		 * when user name and password is correct
		 */
		header("location: book-list.php");
	} else {
		header("location: index.php");
	}
?>
