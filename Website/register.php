<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale = 1">    
<head>
<style>
    body{
        background-color: lightblue;
    }
    
    .register1{
        padding: 0px;
        position: relative;
        bottom: 60px;
        right: 190px;
    }
    
    #sub{
        position: relative;
        right: 190px;   
    }
    
    button{
        position: relative;
        right: 190px;
        bottom: 80px;
    }
    
</style>    
<title>My Website</title>
    
<link rel="stylesheet" href="register.css">    
<meta charset="UTF-8">

</head>

    <body>
        
        <!-- div class named container - contains all the grid layout from header, footer to nav links -->    
    
        <div class="container">

            <?php    
            include('common.php');
            outputHeader("Registration");  
            ?>    
    
            <?php
            include('navbar.php');
            outputNav("Home");
            ?>    

            <!-- Main content -->
            <main>
                <div class="register1">
                    
                    <form action = "">
                        <p>
                            <label>Username</label>
                            <input type="text" name=name>
                        </p>
                        
                        <p>
                            <label>Password</label>
                            <input type="password" name="psw">
                        </p>
                        
                        <p>
                            <label>Confirm Password</label>
                            <input type="password" name=psw>
                        </p>
                        
                        </form>
                </div>    
   
<p id="sub">Click on submit to create a new account and login.</p>    
<button type="submit" class="final">Submit</button>         
</main>
    
<!-- Footer content -->
<footer><p>© Copyright <b>2018</b></p>
The content of this website is coded using html, css, php, bootstrap
and javascript.
</footer>
            
        </div>
    
</body>    
</html>
