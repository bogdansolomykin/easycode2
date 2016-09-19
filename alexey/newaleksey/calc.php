<!-- Вариант 1. формула $result не хочет считать -->

<h1>Калькулятор</h1>
<form style="width: 202px; border: blue 1px solid; padding: 10px" action="" name="test-form" method="POST">
    <input style="width: 50px" type="text" name="firstNum" />
    <select style="display: inline- block; margin: 0 5px 0 5px;" name="operation">
    	<!-- <option value="header">Операция</option> -->
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input style=" width: 50px" type="text" name="secondNum" />
    <br />
    <input style="margin: 20px 0 0 30px;" type="submit" value="Вывести результат">
</form>
<?php
$result = $_POST['firstNum'] $_POST['operation'] $_POST['secondNum'];
echo $_POST['firstNum'];
echo $_POST['operation'];
echo $_POST['secondNum'];
echo $result;
?>

<!-- Вариант 2. Не срабатывает условие $_POST['secondNum'] !== 0 -->

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
if ($_POST['operation'] == plus) {
    $result = $_POST['firstNum'] + $_POST['secondNum'];
}
if ($_POST['operation'] == minus) {
    $result = $_POST['firstNum'] - $_POST['secondNum'];
}
if ($_POST['operation'] == devide && $_POST['secondNum'] !== 0) {
    $result = $_POST['firstNum'] / $_POST['secondNum'];
}
if ($_POST['operation'] == multiply) {
    $result = $_POST['firstNum'] * $_POST['secondNum'];
}
$result = $_POST['firstNum'] $_POST['operation'] $_POST['secondNum'];
echo $_POST['firstNum'];
echo ' ' . $_POST['operation'] . ' ';
echo $_POST['secondNum'];
echo ' ' . "=" . ' ' . $result;
?>