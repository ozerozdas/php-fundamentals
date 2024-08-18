<?php

// Define an interface
interface Animal
{
    public function makeSound();
    public function move();
}

// Implement the interface in the Dog class
class Dog implements Animal
{
    public function makeSound()
    {
        echo "Bark!";
    }

    public function move()
    {
        echo "Run!";
    }
}

// Implement the interface in the Bird class
class Bird implements Animal
{
    public function makeSound()
    {
        echo "Chirp!";
    }

    public function move()
    {
        echo "Fly!";
    }
}

// Create instances of Dog and Bird
$dog = new Dog();
$dog->makeSound(); // Outputs: Bark!
echo PHP_EOL;
$dog->move(); // Outputs: Run!

echo PHP_EOL;

$bird = new Bird();
$bird->makeSound(); // Outputs: Chirp!
echo PHP_EOL;
$bird->move(); // Outputs: Fly!

/*
// If you implement the Animal interface in the Fish class, the following code won't work.
// Because the Fish class does not have the makeSound() method.
class Fish implements Animal
{
    public function move()
    {
        echo "Swim!";
    }
}
*/