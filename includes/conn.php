<?php
	$conn = new mysqli('localhost', 'root', 'admin', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>