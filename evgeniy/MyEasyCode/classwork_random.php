<?php
/*
$random = array();
for ($i = 0; $i <= 100; $i++) {
	$random[] = rand($i, true); // что-то не так с решением
}
print_r($random);
*/

$i = 0;
while ($i < 100) {
	$random[] = rand(0, 100);
	$i++;
}
echo '<pre>';
print_r($random);
echo '</pre>';


/* foreach ($random as $key => $value) {
	if ($value > 50) {
		echo $value . ', ';
	}
} */


// echo max($random);