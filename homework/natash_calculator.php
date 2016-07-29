<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
Мои счёты:
<form action="" method="get">
    <input type="text" name="first">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="^">^</option>
    </select>
    <input type="text" name="second">

    <input type="submit" name="submit" value='Get'>
</form>
<?php
$result = '';
if (isset($_GET['submit'])) {
    $first = (int)$_GET['first'];
    $second = (int)$_GET['second'];
    $operation = $_GET['operation'];
    if ($operation == '+') {
        $result = $first + $second;
    } else if ($operation == '-') {
        $result = $first - $second;
    } else if ($operation == '*') {
        $result = $first * $second;
    } else if ($operation == '/') {
        if ($second == 0) {
            echo "You can not divide by zero";
        } else {
            $result = $first / $second;
        }
    } else {
        $result = pow($first, $second);
    }
}

echo $result;
?>
