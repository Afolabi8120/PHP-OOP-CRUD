<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "php_oop";

	$conn = new mysqli($servername, $username, $password, $database);

	if($conn->connect_error){
		echo "Failed to connect to database";
	}

?>