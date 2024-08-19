<?php

class Singleton
{
    private static $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {}

    // Method to get the single instance of the class
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Prevent cloning of the instance
    private function __clone() {}
}

// Usage
$singleton = Singleton::getInstance();
