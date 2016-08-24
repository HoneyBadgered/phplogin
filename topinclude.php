<?php
//session_start();
//ob_start();
$servername 	= "******";
$username 		= "****";
$password 		= "****";
$db_name 		= "******";
$conn = mysqli_connect($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
