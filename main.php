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
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    
        
    
    </style>    
</head>

<body>
<div>
    <h1>Search Users</h1>
     <?php

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    

    
   
    
    while($row = mysqli_fetch_assoc($result)){
         echo $row['first']."<br>";
    }
    
    ?> 
  

</div>
</body>
</html>

