<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
Мои счёты:

<form action="" name="test-form" method="GET">
    <input type="text" name="value1" value="<?= getValue('value1', $_GET, 0) ?>" />
    <select name="method">
        <option value="1"> + </option>
        <option value="2"> - </option>
        <option value="3"> * </option>
        <option value="4"> / </option>
    </select>
    <input type="text" name="value2" value="<?php echo getValue('value2', $_GET, 0) ?>" />
    <br />
    <br />
    <input type="submit" value="Result!">
    <br />
</form>
<hr>

<?php
function calculate($value1, $value2, $operation = '+') {
    $result = 0;
    if ($operation == 1){
        $result = $value1 + $value2;
    } elseif ($operation == 2) {
        $result = $value1 - $value2;
    } elseif ($operation == 3) {
        $result = $value1 * $value2;
    } elseif ($operation == 4) {
        $result = $value1 / $value2;
    };
    
    return $result;
}

function getValue($key, $array, $defaultValue = '') {
    $result = $defaultValue;
    if (isset($array[$key])) {
        $result = $array[$key];
    }

    return $result;
}

$result = calculate(
    getValue('value1', $_GET, 0),
    getValue('value2', $_GET, 0),
    getValue('method', $_GET, '+')
);
echo 'Результат: '  . $result;

// (condition) ? (if true) : (else)
//echo $var == 1 ? '$var == 1' : '$var != 1'; // тернарный оператор
