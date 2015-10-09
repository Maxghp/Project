-- 17. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц book_author, book, author.
-- Запрос должен вывести на экран таблицу с колонками: -title из таблицы book, - first_name из таблицы author,- last_name из таблицы author
--  Таблица должна удовлетворять следующим условиям: - is_published равен 1, - значения в first_name должно быть только те, у которых имена начинаются на K
-- (букву можно подставить любую, в зависимости от ваших записей в таблице). Таблица должна быть отсортирована по колонке title таблицы book.
SELECT b.title, a.first_name, a.last_name
FROM book as b
WHERE first_name LIKE 'Z%' AND is_published = 1
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
ORDER BY b.title
