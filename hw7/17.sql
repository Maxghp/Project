-- 17. ������� ������ � ������� ������� (INNER JOIN) �� ������� ������� �� ������ book_author, book, author.
-- ������ ������ ������� �� ����� ������� � ���������: -title �� ������� book, - first_name �� ������� author,- last_name �� ������� author
--  ������� ������ ������������� ��������� ��������: - is_published ����� 1, - �������� � first_name ������ ���� ������ ��, � ������� ����� ���������� �� K
-- (����� ����� ���������� �����, � ����������� �� ����� ������� � �������). ������� ������ ���� ������������� �� ������� title ������� book.
SELECT b.title, a.first_name, a.last_name
FROM book as b
WHERE first_name LIKE 'Z%' AND is_published = 1
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
ORDER BY b.title
