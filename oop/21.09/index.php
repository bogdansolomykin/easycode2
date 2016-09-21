<?php

class Human
{
    public $name;

    public $age;

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
}

$john = new Human();
$john->name = 'John';
$john->age = 35; // $this->age = 35

$mike = new Human();
$mike->name = 'Mike';
$mike->age = 18; // $this->age = 18;

$john->hello();

$mike->hello();

