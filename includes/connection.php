<?php
	$dsn = 'mysql:host=localhost; dbname=pet_battles';
	$username = 'root';
	$password = '';
	
	/*$dsn = "mysql:host=mysql5.000webhost.com; dbname=a8969653_battles";
	$username = "a8969653_user";
	$password = "battle1234";*/
	
	$db = new PDO($dsn, $username, $password);
?>