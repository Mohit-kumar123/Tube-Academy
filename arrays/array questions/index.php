<!-- write a php commands to conmbibne two array and print the common elements from the following indexed arrays -->
<?php

$array1 = [1, 3, 5, 7, 9];
$array2 = [2, 3, 6, 7, 9];

// Merge the two arrays
$mergedArray = array_merge($array1, $array2);
echo "Merged array is: ";
print_r($mergedArray);
echo"<br>";

// Intersection of array1 and array2 (common elements)
$commonElements = array_intersect($array1, $array2);
echo "\nCommon elements are: ";
print_r($commonElements);
echo"<br>";
// Difference of array1 and array2 (elements in array1 but not in array2)
$difference = array_diff($array1, $array2);
echo "\nElements in array1 but not in array2 are: ";
print_r($difference);

echo"<br>";

// Remove the first and last element from array1
$array1 = array_slice($array1, 1, -1);
echo "\nArray1 after removing first and last element: ";
print_r($array1);
echo"<br>";


//remove the first element
$first=array_shift($array1);
print_r($first);
echo"<br>";

//unshift
//array chunk
echo"\n after chunk\n";
print_r(array_chunk($array1, 2));




$array1 = [1, 3, 5, 7, 9];

// array_flip(): Exchanges all keys with their associated values in an array
$flippedArray = array_flip($array1);
echo "Flipped array is: ";
echo"<br>";
print_r($flippedArray);

// array_push(): Adds one or more elements to the end of an array
array_push($array1, 11, 13);
echo "\nArray1 after pushing new elements: ";
echo"<br>";

print_r($array1);
echo"<br>";

// array_search(): Searches for a given value in an array and returns the corresponding key if successful
$searchKey = array_search(7, $array1);
echo"<br>";
echo "\nKey of the element 7 in array1 is: $searchKey";
echo"<br>";


// array_pop(): Removes the last element from an array
$poppedElement = array_pop($array1);
echo "\nLast element removed from array1 is: $poppedElement";
echo"<br>";
echo "\nArray1 after popping the last element: ";
echo"<br>";
print_r($array1);


//php give a string and count the the vowel
$x="mohit";
$count=0;
$y= strlen($x);
for($i=0; $i < $y; $i++){
    if( $x[$i] == 'a' || $x[$i] == 'e' || $x[$i] == 'i' || $x[$i]=='o' || $x[$i]== 'u') {
        $count++;
    }
}
echo "number of vowel in string is $count";

?>


//use associative array to store inventory items with their quantities and prices give two items and price initially
//add new item prompt from the user

//update the item and qquantity price * items 