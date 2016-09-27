<?php

require_once 'Vehicle.php';

class Bike extends Vehicle
{
    public function move()
    {
        echo 'Я кручу педали и еду на двух колесах';
    }
}