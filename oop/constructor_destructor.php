<?php

class Person
{
    public $name;
    public $age;

    // Constructor method
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "Person object created with name: $name and age: $age\n";
    }

    // Destructor method
    public function __destruct()
    {
        echo "Person object with name: $this->name is being destroyed\n";
    }
}

// Creating a new object
$person = new Person("Özer", 27);
// When object lifecycle ends, PHP automatically calls the destructor method.
/*
Output:
Person object created with name: Özer and age: 27
Person object with name: Özer is being destroyed
*/