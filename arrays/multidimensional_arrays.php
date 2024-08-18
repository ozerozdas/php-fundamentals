<?php

// Using array() function
$grades = array(
    array(90, 80, 95),
    array(70, 85, 75),
    array(92, 89, 91)
);

// Using square brackets []
$numbers = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $grades[0][1]; // Output: 80

echo PHP_EOL; // PHP_EOL is an end of line character

echo $numbers[1][2]; // Output: 6

echo PHP_EOL;

foreach ($numbers as $row) {
    // $row is an array within $numbers
    foreach ($row as $value) {
        // $value is an integer within $row
        echo $value . PHP_EOL;
    }
}

/*
Output:
1
2
3
4
5
6
7
8
9
*/

$grades[0][1] = 85; // Change the value of the second element in the first array

echo $grades[0][1]; // Output: 85