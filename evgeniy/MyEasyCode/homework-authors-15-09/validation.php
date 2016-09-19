<?php

function prepareDataToSave($name, $age) {
	$name = addslashes(trim($name));
	$age = trim($age);

	return array('name' => $name, 'age' => $age);
}
$preparedData = prepareDataToSave($name, $age);
$name = $preparedData['name'];
$age = $preparedData['age'];