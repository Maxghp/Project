-- 4. Создать таблицу book_author. Таблица должна содержать следующие колонки:
-- - id - int, primary key, autoincrement
-- - book_id- int, not null
-- - author_id - int, not null
CREATE TABLE `book_author`(
	`id` INT(10) AUTO_INCREMENT,
	`book_id` INT(10) NOT NULL,
	`author_id` INT(10) NOT NULL,
	PRIMARY KEY(`id`)
);