<!--Use style to change color, size, position of the heading-->
<style>
    header h1{
        color: purple;
        font-family: fantasy;
        font-style: italic;
    }    
    header p{
        font-size: 40px;
        position: static;
        left: 100px;
    }
</style>
    
<?php 

//Reusable header page and opening body tag
//Variable heading so I can input heading for each page
function outputHeader($heading){
    echo '<header><h1>' .$heading .'</h1>';
    echo '<p>Get ready to test your knowledge. </p>';
    echo '</header>';  
}

//Output the footer and closing html tag
function outputFooter($footer){
    echo '<footer><p>' .$footer .'</p>';
    echo '<b>';
    echo 'The content of this website is coded in php, html, css.';
    echo '</b>';
    echo '</footer>';
}

?>
