<?php 
function myfunction(){
    $GLOBALS["x"] = 100; // Setting global x
}

myfunction();
echo $GLOBALS["x"]; // Output: 100
echo "<br>";
echo $x; // Output: 100 (since $x is now a global variable)

// Test function with local and global variables
function test(){
    $foo = "local var"; // Local variable
    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>"; // Accessing global variable
    echo '$foo in current scope: ' . $foo . "<br>"; // Accessing local variable
}

// Set a global variable foo
$GLOBALS["foo"] = "Example content";
test();


/////////////////////////globals using array


$x = 10;  // Global variable
$y = 20;  // Global variable

function mFunction() {
    // Accessing global variables using $GLOBALS array
    $sum = $GLOBALS['x'] + $GLOBALS['y'];
    echo "Sum of x and y inside the function: " . $sum . "<br>";
}

mFunction();  // Outputs: Sum of x and y inside the function: 30

// You can also modify global variables inside the function using $GLOBALS
function modifyGlobal() {
    $GLOBALS['x'] = 50;
    echo "Modified x inside the function: " . $GLOBALS['x'] . "<br>";
}

modifyGlobal();  // Outputs: Modified x inside the function: 50

// Check global variables outside the function
echo "Value of x outside the function: " . $x . "<br>";  // Outputs: Value of x outside the function: 50


////////////////////////////globals implemeting decrement and increment

// Define a global variable
$counter = 0;

function incrementCounter() {
    global $counter;  // Access the global variable
    $counter++;
    echo "Counter after incrementing: $counter<br>";
}

function decrementCounter() {
    global $counter;  // Access the global variable
    $counter--;
    echo "Counter after decrementing: $counter<br>";
}

function resetCounter() {
    global $counter;  // Access the global variable
    $counter = 0;
    echo "Counter after reset: $counter<br>";
}

// Call the functions
incrementCounter();  // Output: Counter after incrementing: 1
incrementCounter();  // Output: Counter after incrementing: 2
decrementCounter();  // Output: Counter after decrementing: 1
resetCounter();      // Output: Counter after reset: 0


?>



