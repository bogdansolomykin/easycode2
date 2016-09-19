<?php
// Тут записаны все sql запросы к БД
require_once 'db.php';

function getAuthorsWithBooksQuantity() { //Получам с базы искомые данные
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

    return fetchAll($sql); // Подтягиваем функцию которая преобразует полученные данные в массив
}

function getAuthorsBooks($authorID) {
    $sql = "
		SELECT
        	`b`.`id`,
        	`b`.`title`
        FROM `author_book` AS `ab`
        LEFT JOIN `book` AS `b`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `ab`.`author_id` = '{$authorID}';";

    return fetchAll($sql); //Подтягиваем функцию которая преобразует полученные данные в массив
}
function getAllBoks() {
    $sql = "
		SELECT
        	`b`.`title`,
            `b`.`id`
        FROM `book` AS `b`;";

    return fetchAll($sql);
}

function deleteAuthorById($id) {
    delete('author', 'id = ' . $id);
}

function addNewAuthor($name, $age) { //Загнали с формы имя и возвраст автора
    $params = array(
        'name' => $name,
        'age' => $age
    );
    insert('author', $params); //Подтянули функцию для обработки
}

function changeAuthorBook (){

}

//function addNewBook($title, $pageCount) {
//    insert(
//        'book',
//        array(
//            'title' => $title,
//            'page_count' => $pageCount
//        )
//    );
//}
//function updateAuthorById ($id, $newName,$newAge){
//    $params = array(
//        'name' => 'name = ' . "'" . $newName . "'",
//        'age' => 'age = ' . "'" . $newAge . "'"
//    );
//
//    update('author', $id, $params);
//}

function updateAuthorById ($id, $newName,$newAge){
    $id = "'" . $id . "'";
    $params = array(
        $id => array(
            'name' => 'name = ' . "'" . $newName . "'",
            'age' => 'age = ' . "'" . $newAge . "'"
        )
    );

    updateById('author', $params);
}
//function updateAuthorById ($id, $newName,$newAge){
//    update('author', 'id = ' . $id, 'name = ' . $newName, 'age = ' . $newAge);
//}