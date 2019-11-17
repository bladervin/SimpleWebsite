<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale = 1">    
<head>
    
    <style>
        body{
            background-color: lightblue;
    }
    
    main{
        position: relative;
        bottom: 60px;
       font-size: 20px;
    }
    
    </style>    
    
    <title>My Website</title>

    <link rel="stylesheet" href="login.css">    
    <meta charset="UTF-8">

</head>

<body>

    <!-- div class named container - contains all the grid layout from header, footer to nav links -->    
    <div class="container">

<?php    
    include('common.php');
    outputHeader("Welcome to Login");
     
?>

<?php
    include('navbar.php');
    outputNav("Home");
?>    

<!-- Main content -->    
<main>

<div class="register1">
   
<form action = "">
<h4>Log in Details</h4> 
<hr>    

<p>
<label>Username</label>
<input type="text" name=name>
</p>

<p>
<label>Password</label>
<input type="password" name="psw">
</p>       
    
</form>    
</div>    
   
   
<button type="submit" class="final">Log in</button>         
</main>
    
<!-- Footer content -->
<footer><p>© Copyright <b>2018</b></p>
The content of this website is coded using html, css, php, bootstrap
and javascript.
</footer>
</div>
        
</body>    
</html>