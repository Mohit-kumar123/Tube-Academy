<?php
// Input string to test with
$string = "User123: Hello, World! 42 times.";

// Matching digits (\d)
echo "<h3>1. Matching Digits (\\d)</h3>";
$pattern = "/\d+/";  // Match one or more digits
preg_match($pattern, $string, $match);
echo "Matched Digits: ";
print_r($match);
echo "<br><br>";

// Matching non-digits (\D)
echo "<h3>2. Matching Non-Digits (\\D)</h3>";
$pattern = "/\D+/";  // Match one or more non-digit characters
preg_match($pattern, $string, $match);
echo "Matched Non-Digits: ";
print_r($match);
echo "<br><br>";

// Matching word characters (\w)
echo "<h3>3. Matching Word Characters (\\w)</h3>";
$pattern = "/\w+/";  // Match one or more word characters
preg_match($pattern, $string, $match);
echo "Matched Word Characters: ";
print_r($match);
echo "<br><br>";

// Matching non-word characters (\W)
echo "<h3>4. Matching Non-Word Characters (\\W)</h3>";
$pattern = "/\W+/";  // Match one or more non-word characters
preg_match($pattern, $string, $match);
echo "Matched Non-Word Characters: ";
print_r($match);
echo "<br><br>";

// Matching whitespace characters (\s)
echo "<h3>5. Matching Whitespace Characters (\\s)</h3>";
$pattern = "/\s+/";  // Match one or more whitespace characters
preg_match($pattern, $string, $match);
echo "Matched Whitespace: ";
print_r($match);
echo "<br><br>";

// Matching non-whitespace characters (\S)
echo "<h3>6. Matching Non-Whitespace Characters (\\S)</h3>";
$pattern = "/\S+/";  // Match one or more non-whitespace characters
preg_match($pattern, $string, $match);
echo "Matched Non-Whitespace Characters: ";
print_r($match);
echo "<br><br>";

?>
