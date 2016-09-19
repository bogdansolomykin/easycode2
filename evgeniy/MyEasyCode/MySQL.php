<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

SHOW DATABASES;

CREATE DATABASE evgeniy;

USE `evgeniy`;

SHOW TABLES;

SHOW TABLES IN `evgeniy`;

SHOW CREATE TABLE city;

CREATE TABLE note (
	id INTEGER(11) AUTO_INCREMENT PRIMARY KEY,
	title varchar(255) NOT NULL,
	img varchar(200) DEFAULT '',
	note_text text NOT NULL
) ENGINE=InnoDb CHARSET=utf8;

SHOW CREATE TABLE `note`; /* посмотреть какой командой создавалась таблица */

INSERT INTO `note` (title, note_text) VALUES ('first tile', 'some text1'), ('second title', 'second text');

SELECT title FROM `note`;

SELECT * FROM `note` WHERE title = 'some title' AND id = 1;

UPDATE `note` SET `title` = 'third title' WHERE id = 3;

UPDATE `note` SET `region` = 'zapad' WHERE `id` in (3, 2, 4);

DELETE FROM `note` WHERE id = 1;

SELECT name FROM city WHERE population > 1000000;

SELECT * FROM users WHERE fname LIKE 'Ge%'; -- Выбирает все записи из таблицы users, где значение поля fname начинается с Ge.

SELECT * FROM books WHERE price < 200 AND title LIKE '%PHP%'; -- % Соответствует любому количеству символов, даже нулевых
-- _ Соответствует ровно одному символу

DESC city; /* Посмотреть содержимое таблицы с типами полей (структуру таблицы) */

SHOW CREATE TABLE `city`;

-- Оператор ALTER TABLE обеспечивает возможность изменять структуру существующей таблицы

ALTER TABLE t1 RENAME t2; -- переименовать таблицу из t1 в t2

ALTER TABLE t2 DROP COLUMN c; -- удалить столбец c

ALTER TABLE t2 ADD c INT UNSIGNED NOT NULL AUTO_INCREMENT, ADD INDEX (c); -- добавить новый числовой 
-- столбец AUTO_INCREMENT с именем c. Заметьте, что столбец c индексируется, так как столбцы 
-- AUTO_INCREMENT должны быть индексированы, кроме того, столбец c объявляется как NOT NULL, 
-- поскольку индексированные столбцы не могут быть NULL.

ALTER TABLE `city` ADD COLUMN `region` varchar(10) NOT NULL AFTER `name`; /* Добавить колонку region*/

ALTER TABLE `city` MODIFY `name` varchar(200) NOT NULL;

ALTER TABLE `city` CHANGE `name` `name2` varchar(200) NOT NULL;

ALTER TABLE tab SET AUTO_INCREMENT=1; -- для сброса автоинкреметного поля в начальное значение уже существующей таблицы с данными 

TRUNCATE TABLE `city`; -- по идее удаление всех записей таблицы

DROP TABLE city; -- удалить таблицу city

CREATE TABLE `city1` LIKE `city`; /* Создать копию таблицы city (только структура, без данных) */

INSERT INTO `city1` SELECT * FROM `city`; /* Наполнить таблицу city1 содержимым таблицы city */

CREATE TABLE `NewTab` SELECT * FROM `OldTab`; -- Копирование таблицы (включая данные)

SELECT * FROM `city` ORDER BY cities_name ASC; -- по возрастанию

SELECT * FROM `city` ORDER BY cities_name DESC; -- по убыванию

SELECT * FROM `city` ORDER BY region ASC, cities_name DESC;

SELECT * FROM `city` ORDER BY cities_name DESC LIMIT 5;

SELECT * FROM `city` LIMIT 4, 2; /* Первая цифра - сколько пропустить (отсечь), вторая - сколько взять (получить) */

SELECT * FROM `city` ORDER BY population DESC LIMIT 1, 3;

SELECT MAX(population) FROM `city` -- максимальное число

SELECT MIN(population) FROM `city` -- миниальное число

SELECT AVG(population) FROM `city` -- среднее число

SELECT SUM(population) FROM `city` -- сумма чисел

SELECT count(*) FROM `city` WHERE 1;

SELECT count(*) FROM `city` WHERE region = 'south';

-- В SELECT можно писать только те поля (колонки), которые есть в GROUP BY (на агрегирующие функции
-- не распространяется)

select title2, count(*), note_text from note group by title2, note_text;

select sum(population) as populationSum, region from city group by region order by populationSum desc;

select sum(population), region from city where population > 500000 group by region order by sum(population) desc limit 1;

SELECT city.name, country.name FROM `city` INNER JOIN `country` ON `country`.`id` = `city`.`country_id`;

-- Выведет только уникальные (неповторяющиеся) названия стран:
SELECT DISTINCT country.name FROM `city` INNER JOIN `country` ON `country`.`id` = `city`.`country_id`;

-- Определить страну, у которой самый населенный город:
SELECT country.name FROM city INNER JOIN country ON city.country_id = country.id ORDER BY city.population DESC LIMIT 1;

-- Население каждой страны по убыванию:
SELECT country.name, sum(city.population) FROM city INNER JOIN country ON city.country_id = country.id 
GROUP BY country.name ORDER BY sum(city.population) DESC;

-- Правильный порядок использования операторов:
SELECT 
    COUNT(*) as cnt,
    region
FROM `city` 
WHERE 1 -- WHERE используется на этапе выборки (не может работать с динамическими полями, которые считают 
-- результат (MAX, count и т.п.), т.к. еще нет их результата на момент фильтрации через WHERE) (как-то так)
GROUP BY region
HAVING cnt >= 3 -- HAVING используется если поля динамические (работает по уже готовым полям - например, 
-- с MAX(), count() и т.п., т.е. после того, как запрос уже выполнен, по сути берет готовую выборку и еще 
-- раз фильтрует ее) (как-то так)
ORDER BY region
LIMIT 0, 25

/* Д/з на 29.08.16:
1. создать таблицу author с такими полями: id(int), name(varchar), age (int)
2. создать таблицу book с такими полями: id(int), title(varchar), page_count(int)
3. создать промежуточную таблицу author_book с такими полями: author_id(int), book_id(int) */

CREATE TABLE author (
	id INTEGER(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	age INTEGER(11) NOT NULL
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE book (
	id INTEGER(11) AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	page_count INTEGER(11) NOT NULL
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE author_book (
	author_id INTEGER(11) NOT NULL,
	book_id INTEGER(11) NOT NULL
) ENGINE=InnoDB CHARSET=utf8;

INSERT INTO author (name, age) VALUES ('Sergey Zhadan', 42), ('Lina Kostenko', 86),
 ('Joanne Rowling', 51), ('Paulo Coelho', 69), ('Robin Sharma', 51), ('Haruki Murakami', 
  67), ('Gregory Roberts', 64), ('Andrey Polyakov', 48), ('Igor Sid', 53),
 ('Richard Bach', 80), ('Jack', 29);

INSERT INTO book (title, page_count) VALUES ('Shantaram', 864), ('Norwegian Wood', 384), 
('Alchemist', 224), ('Harry Potter', 399), ('The Monk Who Sold His Ferrari', 256), 
('Kordon', 256), ('Richka Geraklita', 288), ('The Saint, the Surfer, and the CEO', 224), 
('Jonathan Livingston Seagull', 176), ('Kordon', 256);

INSERT INTO author_book (author_id, book_id) VALUES (1, 6), (2, 7), (3, 4), 
(4, 3), (5, 5), (5, 8), (6, 2), (7, 1), (8, 6), (9, 6), (10, 9), (15, 10);

/* Вывести автора и книгу: */
SELECT 
   `a`.`name`,
   `b`.`title`
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`
INNER JOIN `book` AS `b`
ON `ab`.`book_id` = `b`.`id`;

/* 1. возраст между 50  и 60 годами
2. кол-во страниц между 200 и 300 */

SELECT 
   `a`.`name`,
   `b`.`title`
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`
INNER JOIN `book` AS `b`
ON `ab`.`book_id` = `b`.`id`
WHERE (`a`.`age` > 50 AND `a`.`age` < 60) AND (`b`.`page_count` > 200 AND `b`.`page_count` < 300);

/* Условие через BETWEEN: */

SELECT 
   `a`.`name`,
   `b`.`title`
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`
INNER JOIN `book` AS `b`
ON `ab`.`book_id` = `b`.`id`
WHERE (`a`.`age` BETWEEN 50 AND 60) AND (`b`.`page_count` BETWEEN 200 AND 300);

/* Вывести кол-во книг каждого автора: */

SELECT
   `a`.`name`,
   count(*)
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`
GROUP BY `a`.`name`;

/* Средний возраст всех авторов: */

SELECT AVG(age) FROM `author`;

/* Кол-во авторов каждой книги */

SELECT
   `b`.`title`,
   count(*)
FROM `book` AS `b`
INNER JOIN `author_book` AS `ab`
ON `b`.`id` = `ab`.`book_id`
GROUP BY `b`.`title`;

/* Книга, у которой больше всего авторов: */

SELECT
   `b`.`title`,
   MAX(?)
FROM `book` AS `b`
INNER JOIN `author_book` AS `ab`
ON `b`.`id` = `ab`.`book_id`
GROUP BY `b`.`title`;

INSERT INTO `author` (`name`, `age`) VALUES ('Boris Akunin', 60);

/* LEFT JOIN: */

SELECT 
   `a`.`name`,
   `ab`.`book_id`
FROM `author` AS `a`
LEFT JOIN `author_book` AS `ab`
ON `a`.`id` = `ab`.`author_id`;

CREATE TABLE test (id INTEGER(11) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL) ENGINE=InnoDB CHARSET=utf8;