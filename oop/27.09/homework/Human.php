<?php

require_once 'MoveableInterface.php';

class Human implements Moveable
{
    protected $name;

    private $title = 'mr';

    public function __construct($name)
    {
        echo 'Вызвался метод' . __FUNCTION__ . ' класса ' . get_class($this);
        $this->name = $name;
    }

    public function __destruct()
    {
        echo 'Вызвался метод' . __FUNCTION__ . ' класса ' . get_class($this);
    }

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
}