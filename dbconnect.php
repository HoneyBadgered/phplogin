<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbtest"

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
    
}

?>