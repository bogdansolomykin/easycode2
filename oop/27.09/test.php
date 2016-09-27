<?php

class Test
{
    public function testObject(Human $human)
    {
        echo 'before: ' .__FUNCTION__ . ':' . $human->name;
        echo '<br />';
        $human->name = 'Olga';
        echo 'after: ' . __FUNCTION__ . ':' . $human->name;
    }

    public function testString($stringParam)
    {
        echo 'before: ' .__FUNCTION__ . ':' . $stringParam;
        echo '<br />';
        $stringParam = 'Stringnew';
        echo 'after: ' . __FUNCTION__ . ':' . $stringParam;
    }
}

class Human
{
    public $name;
}

$test = new Test();

$human = new Human();
$human->name = 'Vasya'; // vasya
$test->testObject($human); // по ссылке
echo '<br />';
echo 'GLOBAL:' . $human->name; // olga

echo '<br />';
echo '<br />';

$string = 'String'; // String
$test->testString($string); // по значению
echo '<br />';
echo 'GLOBAL:' . $string; // String