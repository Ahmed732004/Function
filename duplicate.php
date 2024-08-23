<?php
// Sample array with duplicate values
$colors = array("red", "green", "red", "blue", "green");

// Remove duplicate values
$uniqueColors = array_unique($colors);

// Display the array with unique values
print_r($uniqueColors);
?>
