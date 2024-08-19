<?php
// Define a custom exception class
class CustomException extends Exception
{
    // Custom property
    private $errorCode;

    // Constructor to initialize message and error code
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        $this->errorCode = $code;
        // Make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // Custom method to get the error code
    public function getErrorCode()
    {
        return $this->errorCode;
    }
}
