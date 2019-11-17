<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale = 1">    
<head>
<style>
/*Style the tables position using class */
.customers{
    position: relative;
    left: 100px;
    }
        
</style>    

<title>My Website</title>

<link rel="stylesheet" href="table.css">    
<meta charset="UTF-8">

</head>

<body>
<!-- div class named container - contains all the grid layout from header, footer to nav links -->        
<div class="container">
<!-- Use php function to output the header-->      
<?php    
    include('common.php');
    outputHeader("Welcome to Rankings");  
?>

<?php    
    include('navbar.php');
    outputNav("Home");
?>    

<main>
<!-- Main content -->   
  <div style="overflow-x:auto;">
  <div class="table-responsive">   
  <table class="customers" width= "200">
  <tr>
    <th>No</th>
    <th>Username</th>
    <th>Score</th>
  </tr>
  
  <tr>
    <td>1</td>
    <td>Vinay</td>
    <td>10</td>
  </tr>
   
  <tr>
    <td>2</td>
    <td>Jin</td>
    <td>7</td>
  </tr>
      <tr>
    <td>3</td>
    <td>asd</td>
    <td>7</td>
  </tr>
      <tr>
    <td>4</td>
    <td>Mik</td>
    <td>9</td>
  </tr>
     <tr>
    <td>5</td>
    <td>Kai</td>
    <td>9</td>
  </tr>  
      
  </table>  
  </div>
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