<?php

class Test
{
    public function hello(Human $human) // 1
    {
        echo 'before: ';
        echo __FUNCTION__ . ':' . $human->name;
        echo '<br />';
        $human->name = 'Olga';
        echo __FUNCTION__ . ':' . $human->name;
    }
}

class Human
{
    public $name;
}

$test = new Test();
$human = new Human(); // 1
$human->name = 'Vasya'; // 1
$test->hello($human);
echo '<br />';
echo 'GLOBAL:' . $human->name; // 1