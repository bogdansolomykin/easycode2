<?php

class Animal
{
    public $age;

    public $name;

    public function drink()
    {
        echo 'i can drink water';
    }

    public function getInfo()
    {
        $info = 'Name: ' . $this->name . '<br />';
        $info .= 'Age: ' . $this->age . '';

        return $info;
    }

    public function eat(Food $food)
    {

    }

    public function getName()
    {
        return $this->name;
    }
}