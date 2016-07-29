<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
<h1>Конвертор валют</h1>
<form style="width: 320px; border: blue 1px solid; padding: 10px" action="" name="test-form" method="POST">
    Сумма: <input style="display: inline-block; margin: 0 20px 0 5px;" type="text" name="sum" />
    <select style="display: inline- block; margin-left: 5px;" name="sell">
        <option value="USD">USD</option>
        <option value="UAH">UAH</option>
        <option value="EUR">EUR</option>
    </select>
    Покупаем: <select style="margin: 10px 0 10px 0;" name="bue">
        <option value="USD">USD</option>
        <option value="UAH">UAH</option>
        <option value="EUR">EUR</option>
    </select>
    <br />
    <input style="margin-left: 100px;" type="submit" value="Сконвертировать">
</form>
<?php
$array = [
    'USD' => ['USD' => 1, 'UAH' => 24.75, 'EUR' => 0.89],
    'UAH' => ['USD' => 0.04, 'UAH' => 1, 'EUR' => 0.04],
    'EUR' => ['USD' => 27.07, 'UAH' => 1.08, 'EUR' => 1]
];
$sellCurrency = $_POST['sell']; // USD
$buyCurrency = $_POST['bue']; // UAH
$sum = $_POST['sum'];
$result = $sum * $array[$sellCurrency][$buyCurrency]; // 100 * 24.75
?>
<span style="font-weight: bold; font-size: 24px;">Результат: <?php echo $result; ?></span>