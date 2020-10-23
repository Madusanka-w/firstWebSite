<?php
	$servername ="localhost";
	$username ="root";
	$password ="";
	$dbName = "hims";

	// Creating the connection
	$connect =new mysqli($servername, $username, $password, $dbName);

	// Checking the connection
	if($connect->connect_error)
	{
		die("Connection failure: ". $connect->connect_error);
	}
	echo"";
?>