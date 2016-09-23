<?php

class Animal
{
    public $age;

    public $name;

    public function drink()
    {
        echo 'i can drink';
    }

    public function getInfo()
    {
        $info = 'Name: ' . $this->name . '<br />';
        $info .= 'Age: ' . $this->age . '';

        return $info;
    }
}