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