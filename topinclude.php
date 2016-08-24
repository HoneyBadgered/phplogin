<?php
//session_start();
//ob_start();
$servername 	= "localhost";
$username 		= "root";
$password 		= "root";
$db_name 		= "dbtest";
$conn = mysqli_connect($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>