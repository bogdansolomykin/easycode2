<?php

require_once 'db.php';

/**
 * @return array
 */
function getAuthorsWithBookCount() {
    $sql = "
         SELECT
             `a`.`id`,
             `a`.`name`,
             `a`.`age`,
             count(`ab`.`author_id`) AS `booksQuantity`
         FROM `author` AS `a`
         LEFT JOIN `author_book` AS `ab`
             ON `a`.`id` = `ab`.`author_id`
         GROUP BY `a`.`id`";

    return fetchAll($sql);
}

function getAuthorsBooks($authorID) {
    $sql = "
        SELECT
        `a`.`id`, 
        `a`.`name`, 
        `a`.`age`, 
        `b`.`title`
        FROM `author` AS `a`
        LEFT JOIN `author_book` AS `ab` 
        ON `a`.`id` = `ab`.`author_id`
        LEFT JOIN `book` AS `b` 
        ON `b`.`id` = `ab`.`book_id`
        WHERE `a`.`id` = '{$authorID}';";

    return fetchAll($sql);
}