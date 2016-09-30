<?php

require_once 'Human.php';
require_once 'VehicleSitableInterface.php';

class Driver extends Human implements VehicleSitable
{
    /**
     * @var Vehicle
     */
    protected $vehicle; // moto

    public function drive()
    {
        echo 'Завожу ' . get_class($this->vehicle) . '. ';
        $this->vehicle->move(); // moto
    }

    public function sit(Vehicle $vehicle) // moto
    {
        if ($this->vehicle !== null) {
            echo 'Я не могу сесть в ' . get_class($vehicle);
            echo '. Потому что я уже сижу в' . get_class($this->vehicle);
            return;
        }

        $this->vehicle = $vehicle; // moto
        echo 'Я сажусь в ' . get_class($vehicle) . ' на водительское сидение';
    }
}