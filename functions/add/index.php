<?php
//add two numbers using functions

function add($a,$b){
    return "The sum of $a and $b is : $a+$b";
}

echo add(3,5);

echo"<br>";

//default arguements

function add1($a, $b, $c = 0){
    $sum = $a + $b + $c;
    return "The sum of the numbers is: $sum\n";
}

// Call the function with two arguments
echo "<br>";
echo "The sum with default parameter: " . add1(3, 5);
echo "<br>";

// Call the function with three arguments
echo "The sum with given three parameters: " . add1(3, 5, 7);
echo "<br>";

                                                            
//call by value
function changeValue($x){
    $x = $x * 2;
}
echo "<br>";
$x=5;
echo "The value of x before calling the function: $x";
echo "<br>";
echo "The value of x before calling the function: $x";
echo changeValue($x);

?>