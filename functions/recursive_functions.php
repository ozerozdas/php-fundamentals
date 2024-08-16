<?php

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

var_dump([
    '5!' => factorial(5),
    '10!' => factorial(10)
]);

/*
Output:
array(2) {
  ["5!"]=>
  int(120)
  ["10!"]=>
  int(3628800)
}
*/