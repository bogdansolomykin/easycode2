<?php
$i = 10;
if ($i < 3) { // false
   echo 'Я сижу дома';
} elseif ($i < 5) { // false
   echo 'я хожу в садик';
} elseif ($i < 6) { // false
   echo 'я хожу в садик';
} elseif ($i < 17) { // false
   echo 'я хожу в школу';
}elseif ($i < 21) { // false
   echo 'я хожу в универ';
}elseif ($i < 60) { // false
   echo 'я хожу на работу';
}elseif ($i > 60) { // false
   echo 'я отдыхаю';
}