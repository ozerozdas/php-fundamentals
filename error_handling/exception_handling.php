<?php
class MyException extends Exception {}

function testException($value)
{
    if ($value < 0) {
        // Throwing a custom exception
        throw new MyException('Value must be non-negative.');
    }
    return "Value is $value";
}

try {
    // Calling function that might throw an exception
    echo testException(-1);
} catch (MyException $e) {
    // Handling the exception
    echo 'Caught MyException: ', $e->getMessage(), "\n";
} catch (Exception $e) {
    // Handling any other exception
    echo 'Caught Exception: ', $e->getMessage(), "\n";
} finally {
    // Code that always runs, regardless of whether an exception was thrown
    echo "Finally block executed.\n";
}
