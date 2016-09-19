<a href="form.php"><h1>Вернуться</h1></a><br />

<?php

if (isset($_GET['URL'])) {
	$url = $_GET['URL'];
	$html = file_get_contents($url);
	// echo $html;
	$word1 = $_GET['word1'];
	$word2 = $_GET['word2'];
	$result = str_replace($word1, $word2, $html);
	echo $result;
} else {
	echo 'Please, insert URL';
}

?>