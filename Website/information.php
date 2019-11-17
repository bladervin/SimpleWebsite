<!DOCTYPE html>
<html>
<head>
    
<title>My Website</title>

<!-- link it to CSS -->      
<link rel='stylesheet' type='text/css' href='styles.css' media="screen"/>

    
<style>
/*Style the contents from header, paragraph using class and id*/
main{
    position: relative;
	top: -100px;
    left: 90px;
    }
        
 #diff{
    position: relative;
    top: -20px;
    left: 40px;
    }

.how{
    position: relative;
    left: 40px;
    }
     
</style>
        
</head>
    
<body>
    
    <!-- div container to make use of whole page -->    
    <div class="container">    
        
    <!-- Use php function to output the header-->      
    <?php    
    include('common.php');
    outputHeader("Guide to Play");  
?>

    <?php    
    include('navbar.php');
    outputNav("Home");
?>      
    
    <!-- Main content of the game -->
        <main>
            <h1 id="diff">How to play this game</h1>
            <p class="how">This is a quiz game testing your knowledge regarding various general topics in Computer Science. Please follow these rules and the step by step process to complete the game. <br>Good Luck!</p>
            
        <ul id="one">
            <h1>How to begin</h1>
            <li>First, you need to register so click on Register.</li>
            <li>Create your name, game username and password [<b>Hint:</b> password must not be in capital and more than 10 characters]</li>
            <li>Click on the submit button once you are done.</li>   
            <li>Now you can play the game so click "Start Game" on the main page to begin.</li>
        </ul>
    
        <ul id="two">
            <h1>Rules and Regulations</h1>
            <li>Enter a letter from a, b, c or d [<b>no capital letters please</b>] and press enter.</li>  
            <li>The question are multiple choice so please read the answer carefully.</li>
            <li>There are a total of 10 questions.</li>    
            <li>Your score will be recorded at the end and is displayed on rankings from the main menu.</li>    
        </ul>
    
        </main>
    
    </div>
    
<!-- Use php function to output the footer -->  
<?php
    //Output the footer
    outputFooter("Copyright 2018");
?>
    
</body>
</html>