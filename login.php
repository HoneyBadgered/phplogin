<?php
ob_start();
session_start();

include 'topinclude.php';

$username = $_POST['userName'];
$pwd = $_POST['password'];


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash = $row['password'];
$dehash = password_verify($pwd, $hash);

if($hash == 0){
    header("Location: index.php?error=empty");
    exit();
    
    
} else{


    $sql = "SELECT * FROM users WHERE userName='$username' AND userPass='$hash'";
    $result = mysqli_query($conn, $sql);

        if (!$row = mysqli_fetch_assoc($result)){
          echo "Your username or password is incorrect!";

                }
        else{

              $_SESSION['id'] = $row['userId']; 
            header("Location: main.php");
        }
   
}


?>