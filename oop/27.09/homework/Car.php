<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public $color;

    public function move()
    {
        echo 'Я еду на четырех колесах';
    }
}