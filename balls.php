<?php

$box = ['red', 'green', 'blue', 'red', 'blue'];

$knownBalls = []; // red green blue
$repeatedBalls = 0;
foreach ($box as $ball) { // blue
    if (in_array($ball, $knownBalls)) {
        $repeatedBalls++; // 2
    } else {
        $knownBalls[] = $ball;
    }
}

echo $repeatedBalls;