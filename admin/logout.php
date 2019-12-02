<?php
	session_start();
	// remove authenticated session when logout
	unset($_SESSION['auth']);
	header("location: index.php");
?>
