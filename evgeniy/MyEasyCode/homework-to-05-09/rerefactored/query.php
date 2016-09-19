<?php

require_once 'db.php';

function getAuthorsWithBooksQuantity() {
	$sql = "
		SELECT
			`a`.`id`,
			`a`.`name`,
			`a`.`age`,
			count(`ab`.`author_id`) AS `booksQuantity`
		FROM `author` AS `a`
		LEFT JOIN `author_book` AS `ab`
			ON `a`.`id` = `ab`.`author_id`
		GROUP BY `a`.`id`;";
		
	return fetchAll($sql);
}

function getAuthorsBooks($authorID) {
	$sql = "
		SELECT
        	`ab`.`author_id`,
        	`b`.`title`
        FROM `author_book` AS `ab`
        LEFT JOIN `book` AS `b`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `ab`.`author_id` = '{$authorID}';";

    return fetchAll($sql);
}

function deleteAuthorById($id) {
    delete('author', "id = $id");
}

function addNewAuthor($name, $age) {
    $data = array(
        'name' => $name,
        'age' => $age
    );
    insert('author', $data);
}