<?php  
    $x=5;
    $y=6;      
    function add()  
    {  
        global $x, $y;  
        echo "the result is ".$x + $y; 
        echo "</br>";  
    }  
    add();  
      
?>  