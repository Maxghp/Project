--2. ������� ������� book. ������� ������ ��������� ��������� �������:
-- - id - int, primary key, autoincrement
-- - title - varchar, not null
-- - created_at - datetime, not null

CREATE TABLE `book`{
	`id` INT(100) AUTO_INCREMENT,
	`title` VARCHAR(100) NOT NULL,
	`create_at` datetime NOT NULL,
 PRIMARY KEY ('id')
	};