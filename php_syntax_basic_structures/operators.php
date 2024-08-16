<?php
$a = 10;
$b = 5;
$c = "10";

// Arithmetic operators
$addition = $a + $b; // 15
$subtraction = $a - $b; // 5
$multiplication = $a * $b; // 50
$division = $a / $b; // 2
$modulus = $a % $b; // 0

// Comparison operators
$equal = $a == $b; // false
$notEqual = $a != $b; // true
$equalStrict = $a === $c; // false
$notEqualStrict = $a !== $c; // true
$greaterThan = $a > $b; // false
$lessThan = $a < $b; // true
$greaterThanOrEqual = $a >= $b; // false
$lessThanOrEqual = $a <= $b; // true

// Logical operators
$and = $a && $b; // false
$or = $a || $b; // true
$not = !$a; // false

// Assignment operators
$a += $b; // 15
$a -= $b; // 5
$a *= $b; // 50
$a /= $b; // 2
$a %= $b; // 0

var_dump([
    'arithmetic' => [
        'addition' => $addition,
        'subtraction' => $subtraction,
        'multiplication' => $multiplication,
        'division' => $division,
        'modulus' => $modulus
    ],
    'comparison' => [
        'equal' => $equal,
        'notEqual' => $notEqual,
        'equalStrict' => $equalStrict,
        'notEqualStrict' => $notEqualStrict,
        'greaterThan' => $greaterThan,
        'lessThan' => $lessThan,
        'greaterThanOrEqual' => $greaterThanOrEqual,
        'lessThanOrEqual' => $lessThanOrEqual
    ],
    'logical' => [
        'and' => $and,
        'or' => $or,
        'not' => $not
    ]
]);

/*
Output:
array(3) {
  ["arithmetic"]=>
  array(5) {
    ["addition"]=>
    int(15)
    ["subtraction"]=>
    int(5)
    ["multiplication"]=>
    int(50)
    ["division"]=>
    int(2)
    ["modulus"]=>
    int(0)
  }
  ["comparison"]=>
  array(8) {
    ["equal"]=>
    bool(false)
    ["notEqual"]=>
    bool(true)
    ["equalStrict"]=>
    bool(false)
    ["notEqualStrict"]=>
    bool(true)
    ["greaterThan"]=>
    bool(true)
    ["lessThan"]=>
    bool(false)
    ["greaterThanOrEqual"]=>
    bool(true)
    ["lessThanOrEqual"]=>
    bool(false)
  }
  ["logical"]=>
  array(3) {
    ["and"]=>
    bool(true)
    ["or"]=>
    bool(true)
    ["not"]=>
    bool(false)
  }
}
*/