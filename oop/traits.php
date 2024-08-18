<?php

// Define a trait
trait Logger
{
    public function log($message)
    {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}

// Define another trait
trait FileLogger
{
    public function logToFile($message, $filename)
    {
        file_put_contents($filename, "[LOG]: " . $message . PHP_EOL, FILE_APPEND);
    }
}

// Define a class that uses the Logger trait
class User
{
    use Logger;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayUser()
    {
        $this->log("Displaying user: " . $this->name);
    }
}

// Define another class that uses both Logger and FileLogger traits
class FileManager
{
    use Logger, FileLogger;

    public function save($message, $filename)
    {
        $this->log("Saving message to file.");
        $this->logToFile($message, $filename);
    }
}

// Create an instance of User and use the trait method
$user = new User("Özer Özdaş");
$user->displayUser(); // Outputs: [LOG]: Displaying user: Özer Özdaş

// Create an instance of FileManager and use both trait methods
$fileManager = new FileManager();
$fileManager->save("This is a test message.", "log.txt");
// Outputs: [LOG]: Saving message to file.
// And saves "[LOG]: This is a test message." to "log.txt"
