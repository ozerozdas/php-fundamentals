<?php

// Using array() function
$array = array('apple', 'banana', 'cherry');
// Using square brackets []
$fruitArray = ['apple', 'banana', 'cherry'];

echo $array[0]; // Output: apple

echo PHP_EOL; // PHP_EOL is an end of line character

foreach ($fruitArray as $value) {
    echo $value . PHP_EOL;
}
/*
Output:
apple
banana
cherry
*/

echo PHP_EOL;

$fruitArray[] = 'orange';
print_r($fruitArray); // Output: Array ( [0] => apple [1] => banana [2] => cherry [3] => orange )

$fruitArray[1] = 'strawberry';
print_r($fruitArray); // Output: Array ( [0] => apple [1] => strawberry [2] => cherry [3] => orange )