-- 18. Создать запрос с жесткой связкой (INNER JOIN) на выборку записей из таблиц book_author, book, author.
-- Запрос должен вывести на экран таблицу с колонками: -title из таблицы book, - first_name из таблицы author,- last_name из таблицы author
--  Таблица должна удовлетворять следующим условиям: - is_published равен 1, - - условие, при котором в значениях email должна присутстовать фраза mail (фразу
-- можно подставить любую, в зависимости от ваших записей в таблице).. Таблица должна быть отсортирована по колонке title таблицы book.
SELECT b.title, a.first_name, a.last_name
FROM book as b
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
WHERE is_published = 1 AND email LIKE '%mail%'
ORDER BY b.title