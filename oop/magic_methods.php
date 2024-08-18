<?php

class MagicExample
{
    private $properties = [];
    private $methodCalls = [];

    // Constructor method
    public function __construct()
    {
        echo "Object created!\n";
    }

    // Destructor method
    public function __destruct()
    {
        echo "Object destroyed!\n";
    }

    // Magic method for accessing properties
    public function __get($property)
    {
        if (array_key_exists($property, $this->properties)) {
            return $this->properties[$property];
        } else {
            return "Property '$property' does not exist.";
        }
    }

    // Magic method for setting properties
    public function __set($property, $value)
    {
        $this->properties[$property] = $value;
    }

    // Magic method for calling methods
    public function __call($method, $arguments)
    {
        $this->methodCalls[] = $method;
        return "Called method '$method' with arguments: " . implode(', ', $arguments);
    }

    // Magic method for converting the object to a string
    public function __toString()
    {
        return "MagicExample object with properties: " . json_encode($this->properties);
    }

    // Magic method for checking if a property is set
    public function __isset($property)
    {
        return isset($this->properties[$property]);
    }

    // Magic method for unsetting a property
    public function __unset($property)
    {
        if (isset($this->properties[$property])) {
            unset($this->properties[$property]);
        }
    }
}

// Create an object of MagicExample
$example = new MagicExample();

// Use __set to set properties
$example->name = "Özer";
$example->age = 27;

// Use __get to access properties
echo $example->name . "\n"; // Outputs: Özer
echo $example->age . "\n";  // Outputs: 27

// Use __call to call a non-existent method
echo $example->nonExistentMethod('param1', 'param2') . "\n"; // Outputs: Called method 'nonExistentMethod' with arguments: param1, param2

// Use __isset to check if a property is set
var_dump(isset($example->name)); // Outputs: bool(true)
var_dump(isset($example->address)); // Outputs: bool(false)

// Use __unset to unset a property
unset($example->name);
echo $example->name . "\n"; // Outputs: Property 'name' does not exist.

// Use __toString to get a string representation of the object
echo $example; // Outputs: MagicExample object with properties: {"age":27}

// Object will be destroyed at the end of script execution
