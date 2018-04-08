<?php

	$user = 'root';
	$host = 'localhost';
	$pass = 'adbjco0814';
	$db = 'phptraineeapplication_schema';

	$con = mysqli_connect($host,$user,$pass,$db);

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to the database " . mysqli_connect_errno() ;
	};

	

?>