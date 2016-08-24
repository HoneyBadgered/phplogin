<?php

session_start();
$servername = "*******";
$username = "****";
$password = "****";
$dbname = "******"

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
    
}

?>
