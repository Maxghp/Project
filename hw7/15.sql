-- 15. cоздать запрос на выборку записей из таблиц book_author, book, author. запрос должен вывести на экран таблицу с колонками:
-- - title из таблицы book && - first_name из таблицы author && - last_name из таблицы author
-- таблица должна быть отсортирована по колонке title таблицы book. 
-- Написать запрос со слабой связкой (таблицы применением LEFT JOIN).

SELECT b.title, a.first_name, a.last_name
FROM book as b
LEFT JOIN book_author as ba ON ba.book_id = b.id
LEFT JOIN author as a ON ba.author_id = a.id
ORDER BY b.title