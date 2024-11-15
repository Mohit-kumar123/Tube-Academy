<?php
$bike = array("TVS", "YAMAHA", "RAJDOOT");
echo "I like " . $bike[0] . ", " . $bike[1] . " and " . $bike[2] . ".";

// Reverse the array
$reversedBike = array_reverse($bike);

echo("<br>");

// Print the reversed array
for ($i = 0; $i < count($reversedBike); $i++) {
    echo $reversedBike[$i] . " ";
}

echo("<br>");

$x = count($bike);  // Get the number of elements in the array $bike and assign it to $x.
for ($i = $x-1; $i >= 0; $i--) {  // Loop from the last index of the array to the first.
    echo $bike[$i] . " ";  // Print each element followed by a space.
}

echo("<br>");
$ages = [1, 2, 4, 56, 88, 96, 78, 88];

// Find the unique ages
echo("Unique");
echo("<br>");
$unique = array_unique($ages);
print_r($unique);

echo("<br>");
echo("Filter");
echo("<br>");
$a = array_filter($ages);
print_r($ages);
echo("<br>");

echo("Sort");
echo("<br>");
// Sort the array
asort($ages);  // `asort` sorts the array but does not return it
print_r($ages);  // Now print the sorted array directly

echo("<br>");
$favcol=array(
    'mohit'=>'red',
    'rohit'=>'yellow',
    'kohit'=>'blue',
    'tohit'=>'green',
);

$k=array_keys($favcol);
$v=array_values($favcol);
for($x=0;$x<count($favcol);$x++){
    echo "KEY=".$k[$x].','."value=".$v[$x]."<br>";
}
?>



