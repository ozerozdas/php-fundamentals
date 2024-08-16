<?php

function greet($name) {
    echo "Hello, $name!";
}

greet("Özer"); // Output: Hello, Özer!

function greetWithDefault($name = "World") {
    echo "Hello, $name!";
}

greetWithDefault(); // Output: Hello, World!
greetWithDefault("Özer"); // Output: Hello, Özer!