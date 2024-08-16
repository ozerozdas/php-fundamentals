<?php

$age = 27; // integer
$pi = 3.14; // float
$name = "Özer"; // string
$isAdmin = true; // boolean
$fruits = ["apple", "banana", "orange"]; // array
$person = (object) ["name" => "Ozer", "age" => 27]; // object
$isAvailable = null; // null

var_dump([
    'integer' => $age,
    'float' => $pi,
    'string' => $name,
    'boolean' => $isAdmin,
    'array' => $fruits,
    'object' => $person,
    'null' => $isAvailable
]);

/*
Output:
array(7) {
  ["integer"]=>
  int(27)
  ["float"]=>
  float(3.14)
  ["string"]=>
  string(5) "Özer"
  ["boolean"]=>
  bool(true)
  ["array"]=>
  array(3) {
    [0]=>
    string(5) "apple"
    [1]=>
    string(6) "banana"
    [2]=>
    string(6) "orange"
  }
  ["object"]=>
  object(stdClass)#1 (2) {
    ["name"]=>
    string(4) "Ozer"
    ["age"]=>
    int(27)
  }
  ["null"]=>
  NULL
}
*/