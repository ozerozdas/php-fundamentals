<?php

// If statement
$age = 27;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult.";
}

// If Else If statement
$point = 90;
if ($point >= 90) {
    echo "Your grade is A";
} elseif ($point >= 80) {
    echo "Your grade is B";
} elseif ($point >= 70) {
    echo "Your grade is C";
} elseif ($point >= 60) {
    echo "Your grade is D";
} else {
    echo "Your grade is F";
}

// Ternary operator (conditional operator)
$age = 27;
$adult = $age >= 18 ? "adult" : "not an adult";
echo "You are $adult.";
