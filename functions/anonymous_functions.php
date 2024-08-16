<?php

$greet = function($name) {
    echo "Hello, $name!";
};

$greet("World"); // Output: Hello, World!


$name = "Özer";
$greetWithParam = function() use ($name) {
    echo "Hello, $name!";
};

$greetWithParam(); // Output: Hello, Özer!