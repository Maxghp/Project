-- 3. ������� ������� author. ������� ������ ��������� ��������� �������:
-- - id - int, primary key, autoincrement
-- - first_name - varchar, not null
-- - last_name - varchar, not null

CREATE TABLE `author`(
	`id` INT(100) AUTO_INCREMENT,
	`first_name` VARCHAR(100) NOT NULL,
	`last_name` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id`)
);