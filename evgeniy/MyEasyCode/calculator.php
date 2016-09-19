<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<form action="" name="calculator" method="GET">
    Число 1: <br />
    <input type="text" name="num1" value="<?php echo getValue('num1', $_GET) ?>" /><br />
    Число 2: <br />
    <input type="text" name="num2" value="<?= getValue('num2', $_GET) ?>" /><br />
	Действие: <br />
    <select name="operations">
        <option value="+">Прибавить</option>
        <option value="-">Вычесть</option>
        <option value="*">Умножить</option>
        <option value="/">Разделить</option>
    </select><br /><br />
    <input type="submit" name="submit" value="Count!">
</form>

<?php

function getValue($key, $array, $defaultValue = '') {
    $result = $defaultValue;
    if (isset($array[$key])) {
        $result = $array[$key];
    }

    return $result;
}

$num1 = isset($_GET['num1']) ? $_GET['num1'] : '' ;
$num2 = isset($_GET['num2']) ? $_GET['num2'] : '' ;
$operation = isset($_GET['operations']) ? $_GET['operations'] : '+' ;

function calculate($num1, $num2, $operation) {
	$result = 0;
	if (isset($_GET['submit'])) {
		if ($num1 != '' && $num2 != '') {
			if (is_numeric($num1) && is_numeric($num2)) {
				if ($operation == '+') {
					$result = $num1 + $num2;
				} elseif ($operation == '-') {
					$result = $num1 - $num2;
				} elseif ($operation == '*') {
					$result = $num1 * $num2;
				} elseif ($operation == '/') {
					if ($num2 == 0) {
						$result = 'На ноль делить нельзя!';
					} else {
						$result = $num1 / $num2;
					}
				}
				echo 'Результат: ' . $num1 . $operation . $num2 . ' = ' . $result;
			} else {
				echo 'Введено не цифровое значение!';
			}
		} else {
			echo 'Введите оба значения!';
		}
	} else {
		echo 'Добро пожаловать!';
	}
}

calculate($num1, $num2, $operation);

echo '<br /><br />';
// echo $num1 . '<br />';
// echo $num2 . '<br />';
echo '<pre>';
print_r($_GET);
echo '</pre>';
?>