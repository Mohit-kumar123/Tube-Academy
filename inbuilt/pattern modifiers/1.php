<?php
// Input string to test with
$string = "HELLO\nworld! <div>test</div> <span>text</span> こんにちは";

// 1. Case-insensitive matching (i)
echo "<h3>1. Case-insensitive Matching (\\i)</h3>";
$pattern = "/hello/i";  // Match "hello" in any case
if (preg_match($pattern, $string)) {
    echo "Matched 'hello' in a case-insensitive manner.<br>";
}

// 2. Multi-line mode (m)
echo "<h3>2. Multi-line Mode (\\m)</h3>";
$pattern = "/^world/m";  // Match "world" at the start of any line
if (preg_match($pattern, $string)) {
    echo "Matched 'world' at the start of a line in multi-line mode.<br>";
}

// 3. Single-line mode (s)
echo "<h3>3. Single-line Mode (\\s)</h3>";
$pattern = "/hello.*world/s";  // Match "hello" followed by anything, including newlines, until "world"
if (preg_match($pattern, $string)) {
    echo "Matched 'hello' to 'world' across multiple lines.<br>";
}

// 4. Extended mode (x)
echo "<h3>4. Extended Mode (\\x)</h3>";
$pattern = "/hello\s+ world/x";  // Match "hello" followed by one or more spaces, then "world"
$string_extended = "hello    world";
if (preg_match($pattern, $string_extended)) {
    echo "Matched 'hello' and 'world' with extended whitespace for readability.<br>";
}

// 5. Ungreedy matching (U)
echo "<h3>5. Ungreedy Matching (\\U)</h3>";
$pattern = "/<.*>/U";  // Match the shortest string between "<" and ">"
if (preg_match_all($pattern, $string, $matches)) {
    echo "Matched HTML tags in an ungreedy manner:<br>";
    print_r($matches);
    echo "<br>";
}

// 6. Unicode support (u)
echo "<h3>6. Unicode Support (\\u)</h3>";
$pattern = "/\w+/u";  // Match one or more word characters (Unicode-aware)
if (preg_match($pattern, $string, $match)) {
    echo "Matched a Unicode word: ";
    print_r($match);
    echo "<br>";
}

// String ends with a newline character
$string = "Hello\nworld\n";

// Using the 'D' modifier
echo "<h3>7. Dollar End Modifier (\\D)</h3>";
$pattern = "/world$/D";  // Match 'world' at the very end of the string
if (preg_match($pattern, $string)) {
    echo "Matched 'world' at the end of the string ignoring trailing newlines.<br>";
} else {
    echo "No match found (newline at the end).<br>";
}



echo"<h3>task1 pattern matching </h3><br>";

// String and pattern for the search
$string = "Hello, welcome to the PHP world!";
$pattern = "/php/i";  // Case-insensitive search for 'php'

// Perform case-insensitive search with position capture
if (preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Match found: " . $matches[0][0] . "<br>";
    echo "Position of match: " . $matches[0][1];
} else {
    echo "No match found.";
}


echo"<h3>Task 2 search integer</h3><br>";

// String and pattern for the search
// String containing the number to search
$string = "The number is 55";

// Regular expression to match numbers from 1 to 100
$pattern = "/\b(100|[1-9][0-9]?|0)\b/";  // Matches numbers 1 to 100

// Perform the match
if (preg_match($pattern, $string, $matches)) {
    echo "Found a number between 1 and 100: " . $matches[0];
} else {
    echo "No number found between 1 and 100.";
}


?>














