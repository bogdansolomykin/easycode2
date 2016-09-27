<?php

require_once 'MoveableInterface.php';

class Human implements Moveable
{
    public $name;

    public function move()
    {
        echo 'Я двигаюсь на своих двух ногах';
    }
}