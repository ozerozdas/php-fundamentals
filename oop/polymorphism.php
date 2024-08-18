<?php

// Define the Shape class
class Shape
{
    public function area()
    {
        return "The shape is not a specific type, so it's not possible to calculate its area.";
    }

    public function perimeter()
    {
        return "The shape is not a specific type, so it's not possible to calculate its perimeter.";
    }
}

// Define the Circle class that inherits from Shape
class Circle extends Shape
{
    private $radius;

    // Constructor method to initialize the object
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Method to override the area() method
    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

// Define the Rectangle class that inherits from Shape
class Rectangle extends Shape
{
    private $length;
    private $width;

    // Constructor method to initialize the object
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    // Method to override the area() method
    public function area()
    {
        return $this->length * $this->width;
    }
}

// Define a function that can be applied to different types of objects (polymorphism)
function calculateProperties(Shape $shape)
{
    echo "Area: " . $shape->area() . PHP_EOL;
    echo "Perimeter: " . $shape->perimeter() . PHP_EOL;
}

// Create objects from the Circle and Rectangle classes
$myCircle = new Circle(5);
$myRectangle = new Rectangle(4, 6);

// Use polymorphism to call methods on the objects
calculateProperties($myCircle); // Area: 78.5
echo PHP_EOL;
calculateProperties($myRectangle); // Area: 24
