<?php

require_once 'animal.php';

class Cat extends Animal
{
    public function meow()
    {
        echo 'meeeooow!';
    }

    public function getInfo()
    {
        $info = parent::getInfo();
        $info .= '<br /> i\'m cat';
        return $info;
    }

    public function drink()
    {
        echo 'i like to drink milk';
    }

    public function eat(Food $food)
    {
        echo __CLASS__ . ': я жую ' . $food->getName();
    }
}