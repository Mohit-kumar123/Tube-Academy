<?php
$cars = array(
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);

// Display first car info
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

// Sorting the multidimensional array using usort with ascending order by the second element (stock)
echo("<br>");
echo("Sort with ascending by stock");
echo("<br>");
usort($cars, function($a, $b) {
  return $a[1] <=> $b[1];  // Sorting by the second element (stock)
});
print_r($cars);

// Sorting the multidimensional array using usort with descending order by the second element (stock)
echo("<br>");
echo("Sort with descending by stock");
echo("<br>");
usort($cars, function($a, $b) {
  return $b[1] <=> $a[1];  // Sorting by the second element (stock)
});
print_r($cars);

// Sorting the multidimensional array by name (first element) in reverse alphabetical order
echo("<br>");
echo("Sort with key (name)");
echo("<br>");
usort($cars, function($a, $b) {
  return $b[0] <=> $a[0];  // Sorting by the first element (name)
});
print_r($cars);

echo("<br>");

// Printing car info with foreach loop
foreach($cars as $car) {
  echo $car[0] . ": In stock: " . $car[1] . ", sold: " . $car[2] . ".<br>";
}

?>
