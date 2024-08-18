<?php

// Define the Vehicle class
class Vehicle
{
    private $color;
    private $speed;

    // Constructor method to initialize the object
    public function __construct($color, $speed)
    {
        $this->color = $color;
        $this->speed = $speed;
    }

    // Method to accelerate the vehicle
    public function accelerate()
    {
        $this->speed += 10;
    }

    // Method to brake the vehicle
    public function brake()
    {
        if ($this->speed > 0) {
            $this->speed -= 10;
        }
    }

    // Method to display information about the vehicle
    public function displayInfo()
    {
        echo "This vehicle is $this->color and traveling at a speed of $this->speed mph.";
    }
}

// Create an object from the Vehicle class
$myCar = new Vehicle("red", 60);

// Use methods on the object
$myCar->accelerate();
echo "Accelerating..." . PHP_EOL;
$myCar->displayInfo(); // Output: "This vehicle is red and traveling at a speed of 70 mph."

echo PHP_EOL;

$myCar->brake();
echo "Braking..." . PHP_EOL;
$myCar->displayInfo(); // Output: "This vehicle is red and traveling at a speed of 60 mph."