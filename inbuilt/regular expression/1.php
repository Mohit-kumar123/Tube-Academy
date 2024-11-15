<?php
echo " preg match <br> ";
$pattern = "/hello/i";  // 'i' makes it case-insensitive
$string = "Hello, World!";
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found!";
}

echo "<br>";
echo " preg match all <br> ";

//preg match all
$pattern = "/[0-9]+/";  // Pattern for one or more digits
$string = "Order numbers: 123, 456, 789";
preg_match_all($pattern, $string, $matches);
print_r($matches);

echo "<br>";

echo " preg replace <br> ";
$pattern = "/world/i";
$replacement = "PHP";
$string = "Hello World!";
$result = preg_replace($pattern, $replacement, $string);
echo $result;  // Outputs: Hello PHP!

echo "<br>";
echo " preg split <br> ";
$pattern = "/[\s,]+/";  // Split by spaces or commas
$string = "apple, orange banana";
$result = preg_split($pattern, $string);
print_r($result);


echo "<br>";
echo " preg grep <br> ";
$array = ["apple", "banana", "orange", "grape"];
$pattern = "/a/";  // Find elements containing the letter 'a'
$result = preg_grep($pattern, $array);
print_r($result);
?>


