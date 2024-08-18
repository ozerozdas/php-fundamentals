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

// Define the Car class that inherits from Vehicle
class Car extends Vehicle
{
    private $doors;
    private $seats;

    // Constructor method to initialize the object
    public function __construct($color, $speed, $doors, $seats)
    {
        parent::__construct($color, $speed); // Call the constructor of the parent class (Vehicle)
        $this->doors = $doors;
        $this->seats = $seats;
    }

    // Method to display information about the car
    public function displayInfo()
    {
        parent::displayInfo(); // Call the displayInfo method of the parent class (Vehicle)
        echo "This car has $this->doors doors and $this->seats seats.";
    }
}

// Create an object from the Car class
$myCar = new Car("red", 60, 4, 5);

// Use methods on the object
$myCar->accelerate();
echo "Accelerating..." . PHP_EOL;
$myCar->displayInfo(); // Output: "This vehicle is red and traveling at a speed of 70 mph. This car has 4 doors and 5 seats."

echo PHP_EOL;

$myCar->brake();
echo "Braking..." . PHP_EOL;
$myCar->displayInfo(); // Output: "This vehicle is red and traveling at a speed of 60 mph. This car has 4 doors and 5 seats."