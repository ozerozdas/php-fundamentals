<?php

class Database
{
    public function connect()
    {
        return "Database connected!";
    }
}

class UserController
{
    private $database;

    // Injecting dependency through the constructor
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getUser()
    {
        return $this->database->connect();
    }
}

// Creating the dependency
$database = new Database();

// Injecting the dependency into UserController
$controller = new UserController($database);
echo $controller->getUser(); // Output: Database connected!
