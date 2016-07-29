<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
    <form action="" name="calculator" method="POST">
        Число 1: <br />
        <input type="text" name="num1" /><br />
        Число 2: <br />
        <input type="text" name="num2" /><br />
        Действие: <br />
        <select name="operations">
            <option value="+">Прибавить</option>
            <option value="-">Вычесть</option>
            <option value="*">Умножить</option>
            <option value="/">Разделить</option>
        </select><br /><br />
        <input type="submit" value="Count!">
    </form>

<?php
$first = isset($_POST['num1']) ? $_POST['num1'] : 0 ;
$second = isset($_POST['num2']) ? $_POST['num2'] : 0 ;
$result = isset($_POST['operations']) ? $_POST['operations'] : '+' ;
// Решение 1:
if ($first && $second) {
    if ($result == '+') {
        echo $first + $second;
    } elseif ($result == '-') {
        echo $first - $second;
    } elseif ($result == '*') {
        echo $first * $second;
    } elseif ($result == '/') {
        echo $first / $second;
    }
} else {
    echo 'Задайте оба числа!';
}
