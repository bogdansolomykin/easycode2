<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $a;
if (isset($a)) {
	echo '$a объявлена';
} else {
	echo '$a не объявлена';
}

echo '<br />';

$с = ' ';
if ($с == '') {
	echo '$с пустая';
} else {
	echo '$с не пустая';
}

echo '<br />';

$b = ' ';
echo '$b == ' . $b . ' (';
if ($b) {
	echo 'true)';
} else {
	echo 'false)';
}

// echo ((true ? 'true' : false) ? 't' : 'f');
?>

<!--
<?php // for ($i = 0; $i < 50; $i++): ?>
    Hello, world! <br />
<?php // endfor; ?>
-->