<!DOCTYPE html>
<!-- HTML language is english, meta charset specifies which character set website written with-->
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>My Website</title>

<!-- link it to CSS -->      
<link rel='stylesheet' type='text/css' href='styles.css' media="screen"/>
    
</head>

<body>
    
<!-- div container to make use the whole page as a container-->    
<div class="container">    

<!-- Use php function to output the header-->      
<?php    
    include('common.php');
    outputHeader("Welcome to my Website");  
?>

<!-- Make div of navbar to change the style and links  -->    
<div class="nav">
        
    <!-- Navigation links -->
    <nav class="navbar">         
    <ul style="list-style-type:none;" class="nav navbar-nav">
    <li><a href="index.php" style="text-decoration: none">Home</a></li>   
    <li><a href="register.php" style="text-decoration:none"> Register</a></li>
    <li><a href="login.php" style="text-decoration: none">Login</a></li>
    <li><a href="table.php" style="text-decoration: none">Rankings</a></li>    
    </ul>
    </nav>
    
</div>    
    
<!-- Main content of the game -->    
<main>
    <div class="game">
    <a style="text-decoration:none;" href="game.php">Start Game</a> 
    </div>  
</main>
    
<!-- Sidebar / For the contact and how to play info -->
<aside>
    
    <ul style="position:relative; top: 250px; font-size: 20px;">
        <li><b>Register</b></li>
        <li>Create new account</li>
        <li>Start Game </li>
        <li>Enter Letter to answer</li>
    </ul>
    
    <div class="topc" style="position:relative; bottom: 100px; font-size: 25px;">
        
        <h>Contact</h>
        <br><a href ="mailto:www.hotmail.com">Send mail</a> 
        <p>Thank you </p>
    
    </div>
    
</aside>

<!-- Use php function to output the footer -->  
<?php
    //Output the footer
    outputFooter("Copyright 2018");
?>
    
</div>

</body>
</html>
