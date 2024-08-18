<?php

function autoloader($className)
{
    include 'classes/' . $className . '.php';
}
spl_autoload_register('autoloader');

$car = new Car("blue", 100);
echo $car->getSpeed();

echo PHP_EOL;

$truck = new Truck("red", 1996);
echo $truck;
