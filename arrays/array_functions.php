<?php

// array_map is used to apply a function to each element of an array
$array = [1, 2, 3, 4, 5];
$doubleArray = array_map(function($value) { return $value * 2; }, $array);
var_dump($doubleArray); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

// array_filter is used to filter an array based on a condition
$array = ['apple', 'banana', 'cherry', 123];
$fruitArray = array_filter($array, function($value) { return is_string($value); });
var_dump($fruitArray); // Output: Array ( [0] => apple [1] => banana [2] => cherry )

// array_reduce is used to reduce an array to a single value
$array = [1, 2, 3, 4, 5];
$sum = array_reduce($array, function($carry, $value) { return $carry + $value; }, 0);
echo $sum; // Output: 15

echo PHP_EOL;

// array_walk is used to apply a function to each element of an array
$array = ['apple', 'banana', 'cherry'];
$fruitArray = array_walk($array, function(&$value) { $value .= ' fruit'; });
print_r($array); // Output: Array ( [0] => apple fruit [1] => banana fruit [2] => cherry fruit )

// in_array is used to check if an element exists in an array
$array = ['apple', 'banana', 'cherry'];
echo in_array('banana', $array) ? 'Yes' : 'No'; // Output: Yes

echo PHP_EOL;

// array_key_exists is used to check if an element exists in an array
$array = ['apple' => 1, 'banana' => 2];
echo array_key_exists('banana', $array) ? 'Yes' : 'No'; // Output: Yes

echo PHP_EOL;

$array = ['name' => 'John', 'age' => 30];
extract($array);
echo $name; // Output: John
echo PHP_EOL;
echo $age; // Output: 30