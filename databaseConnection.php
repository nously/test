<?php

$servername = 'database-2.cnu4bsgtuywz.us-east-1.rds.amazonaws.com';
$username = 'admin';
$password = 'adminadmin';
$dbname = 'test';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("failed");

}

?>
