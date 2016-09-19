<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_COOKIE['name1'] = 1;
setcookie('name2', 2);
$n = $_COOKIE['name2'] + 2;
setcookie('name2', $n);

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

$arr = ['apple', '', 'orange'];

echo '<pre>';
print_r($arr);
echo '</pre>';

// echo ((true ? 'true' : false) ? 't' : 'f');
?>

<!-- <?php // for ($i = 0; $i < 50; $i++): ?>
    Hello, world! <br />
<?php // endfor; ?> -->