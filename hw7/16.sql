-- 16. —оздать запрос на выборку записей из таблиц book_author, book, author.
-- «апрос должен вывести на экран таблицу с колонками: - title из таблицы book, - first_name из таблицы author, - last_name из таблицы author
--“аблица должна быть отсортирована по колонке title таблицы book.
-- Ќаписать два запроса с жесткой св€зкой (таблицы в секции FROM и применением INNER JOIN).

SELECT b.title, a.first_name, a.first_name
FROM book as b
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
ORDER BY b.title