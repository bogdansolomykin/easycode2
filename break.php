<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$randArray = [];
$i = 0;
while ($i < 40) {
    $randArray[] = $i;
    $i++;
}
foreach ($randArray as $element) {
    if ($element == 37) {
        break;
    }
    echo $element;
    echo "<br />";

}
echo 'Im still working';
// continue - прерывает текущую итерацию
// break - прерывает весь цикл
// die/exit - прерывают весь скрипт