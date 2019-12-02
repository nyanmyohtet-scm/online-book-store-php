<?php
	session_start();
	/**
	 * clear cart session
	 */
	unset($_SESSION['cart']);
	header("location: index.php");
?>
