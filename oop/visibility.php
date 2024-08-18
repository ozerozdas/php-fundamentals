<?php

// Public properties can be accessed from everywhere
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function displayBrand()
    {
        echo "Brand: " . $this->brand;
    }
}

$myCar = new Car("Toyota");
echo $myCar->brand . PHP_EOL; // Outputs: Toyota
$myCar->displayBrand(); // Outputs: Brand: Toyota

echo PHP_EOL;


// Protected properties can be accessed from current class and subclasses
class Vehicle
{
    protected $speed;

    public function __construct($speed)
    {
        $this->speed = $speed;
    }
}

class Truck extends Vehicle
{
    public function showSpeed()
    {
        echo "Speed: " . $this->speed;
    }
}

$myTruck = new Truck(120);
// echo $myTruck->speed; // Error: Cannot access protected property
$myTruck->showSpeed(); // Outputs: Speed: 120

echo PHP_EOL;


// Private properties can only be accessed from current class
class Account
{
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function displayBalance()
    {
        echo "Balance: " . $this->balance;
    }
}

$myAccount = new Account(1000);
// echo $myAccount->balance; // Error: Cannot access private property
$myAccount->displayBalance(); // Outputs: Balance: 1000
