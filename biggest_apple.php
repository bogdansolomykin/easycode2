<?php

$bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

$biggestApple = $bucketOfApples[0];

for ($i = 1; $i < count($bucketOfApples); $i++) {
    $currentApple = $bucketOfApples[$i];
    if ($currentApple > $biggestApple) {
        $biggestApple = $currentApple;
    }
}

echo 'Самое большое яблоко: ' . $biggestApple;

