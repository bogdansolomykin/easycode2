<?php

require_once 'Human.php';
require_once 'VehicleSitableInterface.php';

class Driver extends Human implements VehicleSitable
{
    /**
     * @var Vehicle
     */
    protected $vehicle;

    public function drive()
    {
        echo 'Завожу ' . get_class($this->vehicle) . '. ';
        $this->vehicle->move();
    }

    public function sit(Vehicle $vehicle)
    {
        if ($this->vehicle !== null) {
            echo 'Я не могу сесть в ' . get_class($vehicle);
            echo '. Потому что я уже сижу в' . get_class($this->vehicle);
            return;
        }

        $this->vehicle = $vehicle;
        echo 'Я сажусь в ' . get_class($vehicle) . ' на водительское сидение';
    }
}