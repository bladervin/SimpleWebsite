<!DOCTYPE html>
<html>
<head>
    
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
    outputHeader("Let's Play the game");  
?>
    
<!-- Make div of navbar to change the style and links  -->    
<div class="nav">
        
    <!-- Navigation links -->
    <nav class="navbar">
        <ul style="list-style-type:none;" class="nav navbar-nav">
        <li><a href="index.php" style="text-decoration: none">Home</a></li>   
        </ul>
    </nav>
    
</div>
    
<!-- Main content of the game -->    
<main>
    <div id="game">
        <h4>What software do you view your webpages in that you create?</h4>   
        <form action="">
            <input type="radio" name="quest" value="male"> Compiler<br>
            <input type="radio" name="quest" value="female"> Linux<br>
            <input type="radio" name="quest" value="other"> Command Prompt<br>
            <input type="radio" name="quest" value="other"> Web browser<br><br>
            <input type="submit" value="Submit">
        </form>
 
    </div>    
    
</main>
    
<!-- Use php function to output the footer -->  
<?php
    //Output the footer
    outputFooter("Copyright 2018");
?>
        
</div>    
    
</body>
    
</html>