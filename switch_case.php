<?php
$value = 6;
switch ($value) {
    case ($value > 4 && $value < 10): // if ($value == 2)
        echo 'value > 4 and < 8';
        break;
    case 3: // elseif ($value == 3)
        echo 3;
        break;
    case 5: // elseif ($value == 5)
        echo 5;
        break;
    default: // else
        echo 'default';
}




