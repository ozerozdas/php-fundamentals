<?php

class Car
{
    public $color;
    public $speed;
    public function __construct($color, $speed)
    {
        $this->color = $color;
        $this->speed = $speed;
    }

    public function accelerate()
    {
        $this->speed += 10;
    }

    public function brake()
    {
        $this->speed -= 10;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getColor()
    {
        return $this->color;
    }
}
