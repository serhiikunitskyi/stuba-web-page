<?php
	$sql_server="localhost";
	$sql_user="root";
	$sql_pass="";
	$sql_db="register";

	$mysqli = new mysqli('localhost', 'root', '', 'register');

	if ($mysqli->connect_error)
	{
		die("Spojenie neuspesne: " . $mysqli->connect_error);
	}
?>