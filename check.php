<?php
// Sample associative array
$fruits = array("apple" => "red", "banana" => "yellow", "cherry" => "red");

// Key to check
$key = "banana";

// Check if the key exists in the array
if (array_key_exists($key, $fruits)) {
    echo "Key $key exists in the array.";
} else {
    echo "Key $key does not exist in the array.";
}
?>
