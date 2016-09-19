<?php
$age = 21;
if ($age < 3) {
    echo 'я сижу дома';
} elseif ($age < 6) {
    echo 'я хожу в садик';
} elseif ($age < 17) {
    echo 'я хожу в школу';
} elseif ($age < 21) {
    echo 'я хожу в универ';
} elseif ($age < 60) {
    echo 'я хожу на работу';
} elseif ($age > 60) {
    echo 'я отдыхаю';
}