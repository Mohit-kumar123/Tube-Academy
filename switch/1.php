

<?php
$number = array(97, 98, 99, 87, 68); 
$value = 0;
foreach ($number as $val) {
    $value += $val; 
}
$x=$value/5;

echo "$x"; 

switch($x){
    case $x>=90:
        echo" grade a";
        break;
    case ($x>=70 && $x<90):
        echo" grade b";
        break;
    case ($x>=40 && $x<70):
        echo" grade c";
        break;
    default:
    echo" grade d";
}

?>

