<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "demo";

	// Create connection
	$conn = new mysqli("localhost", "root", "", "demo");
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>