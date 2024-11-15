<?php
// const PI = 3.14;
// $r = 5;
// echo PI * $r * $r;



// <!-- defining constant arrays -->

define("names",[
    "mohit","rohit","piyush",
]); 
echo "<br>"; 
echo names[0];


//global constants:- we can access the const outside the function also 
function cal(){
    define ("pi","3.14");
}
cal();
echo pi;
echo "<br>";

//take two inout and add it in the fun

const hi = 3.14;
const ci = 3;
function add(){
    echo hi + ci;
}
add();
echo "<br>";
echo var_dump(hi);
echo "<br>";

define("x",3);
echo var_dump(x);



// Multiple null coalescing
$user_name = null;
$default_name = "John Doe";

// Will output "John Doe" because $user_name is null and we use $default_name as fallback
echo $user_name ?? $default_name ?? 'Guest';

echo"<br>";
$a=NULL;
$b="rohit";
echo $a ?? $b ?? 'mohit';

?>