<?php

class Human
{
    public $name;

    public $age;

    public $properties = array();

    public function printAge()
    {
        echo $this->age;
    }

    public function hello()
    {
        echo 'Привет!' . ' Меня зовут ' . $this->name;
        echo '. Мне ' . $this->age . ' года';
        echo '<br />';
    }

    public function run()
    {
        echo 'Я бегу';
    }

    public function birthday()
    {
        $this->age++;
    }
}

$john = new Human();
$john->name = 'John';
$john->age = 35; // $this->age = 35

$mike = new Human();
$mike->name = 'Mike';
$mike->age = 18; // $this->age = 18;
$mike->properties[] = '1';
$mike->properties[] = '2';

$john->hello();

$mike->hello();
$mike->run();
echo '<br />';
echo 'Прошел год';
echo '<br />';
$john->birthday();
$mike->hello();
$john->hello();