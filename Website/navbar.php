<style>
/* Style navigation links: color, position, effects  */
    
    .navigation{
        display: grid;
        grid-row: 1px 1px 1px 1px;
        margin: 10px; padding: 0px; text-decoration:inherit;
        position: relative; bottom:160px; left: 100px;
        font-size: 35px;
        }
    
    .navigation a{
        text-decoration: none;
        border: 2px solid black;
    }
    
    .navigation a:hover{
        background-color: lawngreen;
    }        
        
</style>    
    
<?php
//<style> at the top to style the navbar
// size and more.
//Output the navigation bar using array for 3 pages
function outputNav($pageName){
    //Output banner and first part of navigation
    echo '<div class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Home", "Register", "Login", "Rankings", "How to Play");
    $linkAddresses = array("index.php", "register.php", "login.php", "table.php", "information.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
        echo 'class="selected" ';}
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';}
        echo '</div>';
}

?>


