<?php
error_reporting(E_ALL);

session_start();
include 'topinclude.php';

//variables for registration
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['emailReg'];
$username = $_POST['usernameReg'];
$pwd = $_POST['passwordReg'];



if (empty($first)){
    header('Location: http://localhost:8888/LoginSystem/registration.php?error=empty');
}

if (empty($last)){
    header('Location: registration.php?error=empty');
    exit();
}
if (empty($email)){
    header('Location: registration.php?error=empty');
    exit();
}
if (empty($username)){
    header('Location: registration.php?error=empty');
    exit();
}
if (empty($pwd)){
    header('Location: registration.php?error=empty');
    exit();
}

else{

    $sql="SELECT userName FROM users WHERE userName ='$username'";
    $result = mysqli_query($conn, $sql);
    $unamecheck = mysqli_num_rows($result);

    if($unamecheck > 0){
        
        header('Location: registration.php?error=username');
        exit();
    } 
    
        else{
            
            $hashpass = password_hash($pwd, PASSWORD_DEFAULT)

            $sql = "INSERT INTO users (userName, first, last, userEmail, userPass) VALUES ( '$username', '$first', '$last', '$email', '$hashpass')";

            $result = mysqli_query($conn, $sql);

            header('Location: main.php');
        }
    }
    
?>