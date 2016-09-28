<?php

require_once 'MoveableInterface.php';

class Human implements Moveable
{
    protected $name;

    private $title = 'mr';

    public function move()
    {
        echo 'Я двигаюсь на своих двух ногах';
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}