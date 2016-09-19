<?php
$myName = 'Евгений';
$mySurname = 'Волков';
$myAge = 28;
$myHobby = 'спорт';

echo 'Меня зовут ' . $myName . ' ' . $mySurname . '. Мне ' . $myAge . ' лет. Мое хобби: ' . $myHobby . '.';

echo "\r\n\r\n";

$myInfo = array(
	'myName' => 'Евгений',
	'mySurname' => 'Волков',
	'myAge' => 28,
	'myHobby' => 'спорт'
	);

print_r($myInfo);

echo "\r\n";

echo 'Меня зовут ' . $myInfo['myName'] . ' ' . $myInfo['mySurname'] . '. Мне ' . $myInfo['myAge'] . ' лет. Мое хобби: ' . $myInfo['myHobby'] . '.';

