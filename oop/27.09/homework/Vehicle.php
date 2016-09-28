<?php

require_once 'MoveableInterface.php';
require_once 'TestInterface.php';

abstract class Vehicle implements Moveable
{
    public $speed;
}