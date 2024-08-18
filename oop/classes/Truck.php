<?php

class Truck
{
    public $color;
    public $year;
    public function __construct($color, $year)
    {
        $this->color = $color;
        $this->year = $year;
    }

    public function __toString()
    {
        return "Color: {$this->color} Year: {$this->year}";
    }
}
