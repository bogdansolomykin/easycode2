<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
saveCookie('key', 'value', 3600);
deleteCookie('key');
updateCookie('key', 'valueNew');
getCookie('key');
*/
function saveCookie($key, $value, $time = 3600) {
	if (!isset($_COOKIE[$key])) {
		if (isset($_GET[$key])) {
			setcookie($key, $value, time() + $time);
			echo 'Succesfully saved!';
		} else {
			echo 'Nothing to save';
		}
	} else {
		echo 'Cookie already exists. Choose "Update cookie"';
	}
}

function updateCookie($key, $newValue) {
	if (isset($_COOKIE[$key])) {
		setcookie($key, $newValue);
		echo 'Succesfully updated!';
	} else {
		echo 'Nothing to update';
	}
}

function deleteCookie($key, $value, $time = -1) {
	if (isset($_COOKIE[$key])) {
		setcookie($key, $value, time() + $time);
		echo 'Succesfully deleted!';
	} else {
		echo 'Nothing to delete';
	}
}

function getCookie($key) {
	if (isset($_COOKIE[$key])) {
		echo 'Existing cookie: ' . $key . ' => ' . $_COOKIE[$key];
	} else {
		echo 'Cookie doesn\'t exist';
	}
}

$key = 'savedCookie';
$newKey = 'updatedCookie';
$value = '';

if (isset($_GET['saveCookie'])) {
	saveCookie($key, $_GET[$key], 120);
} elseif (isset($_GET['updateCookie'])) {
	updateCookie($key, $_GET[$newKey]);
} elseif (isset($_GET['deleteCookie'])) {
	deleteCookie($key, $value, -2);
} elseif (isset($_GET['getCookie'])) {
	getCookie($key);
}

?>
<br /><a href="forms.php">Вернуться назад</a>