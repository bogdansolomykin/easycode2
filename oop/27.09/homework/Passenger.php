<?php

require_once 'Human.php';
require_once 'VehicleSitableInterface.php';

class Passenger extends Human implements VehicleSitable
{
    public function sit(Vehicle $vehicle)
    {
        echo 'Я сажусь в ' . get_class($vehicle) . ' в роли пассажира';
    }
}