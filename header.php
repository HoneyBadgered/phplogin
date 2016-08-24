<?php
session_start();
include 'topinclude.php';
?>

<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

    <body>
    
        <header>
            <nav>
                <ul>
                     <li> <a href="http://localhost:8888/LoginSystem/index.php">Home</a></li>
                   
                   <?php
                    
                    if(isset($_SESSION['id']))
                    {
                  echo "<form action='logout.php'>
                    <button>Log Out</button>
  
                    </form>";
        
                    } else {
                
                    echo "<form method='post' action='login.php' name='login'>
                            
                            <input type='text' name='userName' autocomplete='off' placeholder='User Name' />
                            
                            <input type='password' name='password' autocomplete='off' placeholder='Password'/>
                            <input type='submit' class='button' name='loginSubmit' value='Login'>
                        </form>";
                    }
                    ?>
                     <li> <a href="http://localhost:8888/LoginSystem/registration.php">Registration</a></li>
                  
                    
                   
                    
                   
                </ul>
                   
            </nav>
        </header>
    </body>
</html>