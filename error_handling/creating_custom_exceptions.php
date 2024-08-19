<?php
// Include the custom exception class definition
require 'custom_exception.php';

function performOperation($value)
{
    if ($value < 0) {
        // Throwing the custom exception
        throw new CustomException('Negative value not allowed', 1001);
    }
    return "Value is $value";
}

try {
    // Call the function that might throw an exception
    echo performOperation(-5);
} catch (CustomException $e) {
    // Handle the custom exception
    echo 'Caught CustomException: ', $e->getMessage(), "\n";
    echo 'Error Code: ', $e->getErrorCode(), "\n";
} catch (Exception $e) {
    // Handle any other exception
    echo 'Caught Exception: ', $e->getMessage(), "\n";
}
