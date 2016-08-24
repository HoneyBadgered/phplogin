<?php

session_start();

include 'header.php';

?>
<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
    
   
    
<?php  
    //checks if error is thrown/ displays error
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
   
    if(strpos($url, 'error=empty') !== false){
        echo "All fields must be filled. Try again.";
    }
    elseif(strpos($url, 'error=username') !==false){
        echo "Username taken. Please pick another.";
    }
    
    
     //checks if session, if not displays registration form
    if(isset($_SESSION['id'])){
                    echo "You are already logged in.";
                } else{
                    echo "<form id='signup' method='POST' action='signup.php' name='signup'>
        <label>First Name</label>
        <input type='text' name='first' autocomplete='off' /><br>
        <label>Last Name</label>  
        <input type='text' name='last' autocomplete='off' /><br>
        <label>Email</label>
        <input type='text' name='emailReg' autocomplete='off' /><br>
        <label>Username</label>
        <input type='text' name='usernameReg' autocomplete='off' /><br>
        <label>Password</label>
        <input type='password' name='passwordReg' autocomplete='off'/><br>
        <input type='submit' class='button' name='signupSubmit' value='Signup'>
        </form>";
                }
    
    
    ?>
    

           
    
        
        

</html>