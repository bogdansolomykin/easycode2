<?php

require_once 'Human.php';
require_once 'VehicleSitableInterface.php';

class Driver extends Human implements VehicleSitable
{
    /**
     * @var Vehicle
     */
    public $vehicle;

    public function drive()
    {
        echo 'Завожу ' . get_class($this->vehicle) . '. ';
        $this->vehicle->move();
    }

    public function sit(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
        echo 'Я сажусь в ' . get_class($vehicle) . ' на водительское сидение';
    }
}