<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// json_encode — Возвращает JSON-представление данных
// Возвращает строку, содержащую JSON-представление value. (Возвращает JSON закодированную строку (string) в случае успеха или FALSE в случае возникновения ошибки.)
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arr); // {"a":1,"b":2,"c":3,"d":4,"e":5}

echo "<br />";

// json_decode — Декодирует JSON строку
// Принимает закодированную в JSON строку и преобразует ее в переменную PHP. Возвращает данные json преобразованные в соответствующие типы PHP. Значения true, false и null возвращаются как TRUE, FALSE и NULL соответственно. NULL также возвращается, если json не может быть преобразован или закодированные данные содержат вложенных уровней больше, чем допустимый предел для рекурсий.
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
echo '<pre>';
// var_dump(json_decode($json, true)); // array(5) {
									//     ["a"] => int(1)
									//     ["b"] => int(2)
									//     ["c"] => int(3)
									//     ["d"] => int(4)
									//     ["e"] => int(5)
									// }
print_r(json_decode($json, true));
echo '</pre>';