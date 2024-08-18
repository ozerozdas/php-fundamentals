<?php

class Math
{
    public static function square($number)
    {
        return $number * $number;
    }
}

// Calling static method without creating an instance
echo Math::square(5); // Outputs: 25
