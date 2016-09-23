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
}