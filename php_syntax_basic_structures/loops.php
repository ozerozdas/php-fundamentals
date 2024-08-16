<?php
// Switch statement
$color = "red";
switch ($color) {
    case "red":
        echo "The color is red.";
        break;
    case "blue":
        echo "The color is blue.";
        break;
    default:
        echo "The color is neither red nor blue.";
}

// For statement
for ($i = 0; $i < 10; $i++) {
    // $i will be increased by 1 after each iteration of the loop, so the output will be 0, 1, 2, 3, ..., 9
    // The loop will stop when $i is equal to 10
    echo $i;
}

// While statement
$i = 0;
while ($i <= 10) {
    // $i will be increased by 1 after each iteration of the loop, so the output will be 0, 1, 2, 3, ..., 10
    // The loop will stop when $i is equal to 10
    echo $i;
    $i++;
}

// Do-while statement
$i = 0;
do {
    // $i will be increased by 1 after each iteration of the loop, so the output will be 0, 1, 2, 3, ..., 10
    // The loop will stop when $i is equal to 10
    echo $i;
    $i++;
} while ($i <= 10);
