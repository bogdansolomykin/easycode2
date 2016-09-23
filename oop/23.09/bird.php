<?php

include_once 'animal.php';

class Bird extends Animal
{
    public function fly()
    {
        echo 'i can fly';
    }

    public function getInfo()
    {
        $info = parent::getInfo();
        $info .= '<br /> i\'m bird';
        return $info;
    }

    public function eat(Food $food)
    {
        echo __CLASS__ . ': я клюю ' . $food->getName();
    }
}