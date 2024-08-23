<?php
// Sample associative array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// Sort the array by key in ascending order
ksort($age);

// Display the sorted array
foreach($age as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value . "\n";
}
?>
