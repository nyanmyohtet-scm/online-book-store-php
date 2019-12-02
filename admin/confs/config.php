<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "store";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass); // connect with database
	mysqli_select_db($conn, $dbname); // select database
?>
