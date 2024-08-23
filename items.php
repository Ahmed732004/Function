<?php
// Sample associative array
$fruits = array("apple" => "red", "banana" => "yellow", "cherry" => "red");

// Specify the key of the item you want to change
$keyToChange = "banana";

// Check if the key exists in the array
if (array_key_exists($keyToChange, $fruits)) {
    // Change the value to uppercase
    $fruits[$keyToChange] = strtoupper($fruits[$keyToChange]);
}

// Display the modified array
print_r($fruits);
?>
