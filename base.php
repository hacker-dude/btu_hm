<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "base_1";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("connection failed");
	}
?>