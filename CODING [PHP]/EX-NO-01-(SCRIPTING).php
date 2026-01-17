<?php
// String Functions
$s = "Welcome to PHP";
echo "The given string is: " . $s . "<br>";
// 1. Get the length of the string
$length = strlen($s);
echo "Length of the string: " . $length . "<br>";
// 2. Convert to uppercase
$upper = strtoupper($s);
echo "Uppercase string: " . $upper . "<br>";
// 3. Convert to lowercase
$lower = strtolower($s);
echo "Lowercase string: " . $lower . "<br>";
// 4. Reverse the string
$reversed = strrev($s);
echo "Reversed string: " . $reversed . "<br>";
// 5. Split the string into an array of substrings (length 3)
$arr = str_split($s, 3);
echo "Array after splitting:<br>";
print_r($arr);
echo "<br><br>";
// Array Functions
$arr = array(33, 11, 44, 16, 25, 89, 92);
echo "The elements in the array are:<br>";
print_r($arr);
echo "<br>";
// 1. Get the number of elements in the array
$count = count($arr);
echo "Count of elements in the array: " . $count . "<br>";
// 2. Get the current element in the array
$cur = current($arr);
echo "Current element: " . $cur . "<br>";
// 3. Get the last element of the array
$last = end($arr);
echo "Last element: " . $last . "<br>";
// 4. Reverse the array
$reverse = array_reverse($arr);
echo "Reversed array:<br>";
print_r($reverse);
echo "<br>";
// 5. Sort the array in ascending order
sort($arr);
echo "Sorted array:<br>";
print_r($arr);
?>
