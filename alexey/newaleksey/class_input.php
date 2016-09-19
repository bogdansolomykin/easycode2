<form action="" name="test-form" method="POST">
    Сумма: <input type="text" name="sum" /> <br />
    Прдаем: <select name="sell">
        <!-- <option value="1">USD</option> -->
        <option value="2">UAH</option>
<!--         <option value="3">EUR</option> -->
    </select>
    Покупаем: <select name="bue">
        <option value="1">USD</option>
<!--         <option value="2">UAH</option> -->
        <option value="3">EUR</option>
    </select>
    <br />
    <input type="submit" value="Сконвертировать">
</form>
<?php


$array = ['USD' => 25, 'UAH' => 1, 'EUR' => 30];

foreach ($array as $key => $value) {
	if($key == $_POST['bue']){
		$_POST['bue'] = $value;
		$result = $_POST['sum'] * $_POST['bue'];
		echo $result;
	}
}
?>