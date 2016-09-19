<?php

/*
$bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);


$biggestApple = $bucketOfApples[0];

for ($i = 1; $i < count($bucketOfApples); $i++) {
    $currentApple = $bucketOfApples[$i];
    if ($currentApple > $biggestApple) {
        $biggestApple = $currentApple;
    }
}
*/
/*
$biggestApple = $bucketOfApples[0];

foreach ($bucketOfApples as $currentApple) {
    if ($currentApple > $biggestApple) {
        $biggestApple = $currentApple;
    }	
}

*/

/*
$biggestApple = $bucketOfApples[0];
$i = 1;
while ($i < count($bucketOfApples)) {
	$currentApple = $bucketOfApples[$i];
    if ($currentApple > $biggestApple) {
        $biggestApple = $currentApple;
	}
	$i++;
}

echo 'Самое большое яблоко: ' . $biggestApple;
*/

/*
$i = 0;
while ($i < count($bucketOfApples)) {
	echo $bucketOfApples[$i] . ', ';
	$i++;
}

*/

/*
$firstApple = $bucketOfApples[0];
$bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);
for ($i = 0; $i < count($bucketOfApples); $i++) {
    $currentApple = $bucketOfApples[$i];
}
*/

/*
$bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

$biggestApple = $bucketOfApples[0];
foreach ($bucketOfApples as $currentApple) {
    if (($currentApple > $biggestApple) && ($currentApple % 2) == 0) {
    $biggestApple = $currentApple;
    }
}
echo $biggestApple;
*/