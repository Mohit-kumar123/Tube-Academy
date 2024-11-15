<?php
$arr=array(11,22,33,44,55,66,77);

echo "original array<br>";
print_r($arr);
echo "<br>";
echo "Reversing an array<br>" ;
$x=count($arr);
for($i=$x;$i>=0;$i--){
    echo "$arr[$i] ";
}

echo "<br>";


$count1=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2==0){
        $count1++;
    }
}

echo"the number of the count of even numbers in original array: $count1";
echo "<br>";

$count2=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2!=0){
        $count2++;
    }
}

echo"the number of the count of odd numbers in original array: $count1";
echo "<br>";

$count3=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2==0){
        $count3++;
    }
}

echo"the number of the count of even numbers in reverse array: $count3";
echo "<br>";

$count4=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2!=0){
        $count4++;
    }
}

echo"the number of the count of odd numbers in reverse array: $count4";
echo "<br>";

?>