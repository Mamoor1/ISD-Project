<?php
	$servername = "localhost";
	$username = "username";
	$password = "";
	$dbname = "hriday";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>
