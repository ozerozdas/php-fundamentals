<?php
// Function that may throw an exception
function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new Exception('Division by zero is not allowed.');
    }
    return $numerator / $denominator;
}

// Using try-catch to handle the exception
try {
    // Attempt to divide 10 by 0
    $result = divide(10, 0);
    echo "Result: $result";
} catch (Exception $e) {
    // Catch and handle the exception
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
