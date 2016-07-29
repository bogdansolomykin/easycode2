<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
<h1>Калькулятор</h1>
<form style="width: 202px; border: blue 1px solid; padding: 10px" action="" name="test-form" method="POST">
    <input style="width: 50px" type="text" name="firstNum" />
    <select style="display: inline- block; margin: 0 5px 0 5px;" name="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="devide">/</option>
        <option value="multiply">*</option>
    </select>
    <input style=" width: 50px" type="text" name="secondNum" />
    <br />
    <input style="margin: 20px 0 0 30px;" type="submit" value="Вывести результат">
</form>
<?php
if ($_POST['operation'] == 'plus') {
    $result = $_POST['firstNum'] + $_POST['secondNum'];
}
if ($_POST['operation'] == 'minus') {
    $result = $_POST['firstNum'] - $_POST['secondNum'];
}
if ($_POST['operation'] == 'devide' && $_POST['secondNum'] !== 0) {
    $result = $_POST['firstNum'] / $_POST['secondNum'];
}
if ($_POST['operation'] == 'multiply') {
    $result = $_POST['firstNum'] * $_POST['secondNum'];
}
echo ' ' . "=" . ' ' . $result;
?>
