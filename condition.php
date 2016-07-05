<?php
$i = 4;
if ($i < 2) { // false
    echo $i . ' < 2';
} elseif ($i < 3) { // false
    echo $i . ' < 3';
} elseif ($i < 4) { // false
    echo $i . ' < 4';
} else {
    echo $i . ' is too big';
}

?>