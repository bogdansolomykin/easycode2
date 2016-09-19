<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
    <form action="" name="test-form" method="GET">
        Ковертируем из: <br />
        <select name="valuta_from">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="UAH">UAH</option>
        </select><br />
        Ковертируем в: <br />
        <select name="valuta_to">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="UAH">UAH</option>
        </select><br />
        Сумма:<br />
        <input type="text" name="sum" /> <br /><br />
        <input type="submit" value="Convert!">
    </form>

<?php
$courses = ['USD' => 25, 'EUR' => 28, 'UAH' => 1];
$valutaFrom = $_GET['valuta_from'];
$valutaTo = $_GET['valuta_to'];
$sum = $_GET['sum'];
if ($valutaFrom != $valutaTo) {
    $result = $sum * $courses[$valutaFrom] / $courses[$valutaTo];
    echo $sum . $valutaFrom . ' = ' . $result . $valutaTo;
} else {
    echo "Выберите валюту для конвертации!";
}
?>