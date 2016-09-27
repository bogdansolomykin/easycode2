<?php

require_once 'Vehicle.php';

class Moto extends Vehicle
{
    public $color;

    public function move()
    {
        echo 'Я еду на двух колесах';
    }
}