<?php
	session_start();
	$id = $_GET['id'];
	/**
	 * add $id index of array with value 1
	 * if $id index already exist increase value
	 */
	$_SESSION['cart'][$id]++;
	header("location: index.php");
?>
