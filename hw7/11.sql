-- 11. Создать запрос на обновление таблицы book, где нужно установить текущую
-- дату (функция NOW()) для колонки created_at для записей, у которых is_published равен 1
UPDATE `book` SET `create_at` = NOW() WHERE `is_published` = 1;
