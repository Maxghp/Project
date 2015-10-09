-- 16. ������� ������ �� ������� ������� �� ������ book_author, book, author.
-- ������ ������ ������� �� ����� ������� � ���������: - title �� ������� book, - first_name �� ������� author, - last_name �� ������� author
--������� ������ ���� ������������� �� ������� title ������� book.
-- �������� ��� ������� � ������� ������� (������� � ������ FROM � ����������� INNER JOIN).

SELECT b.title, a.first_name, a.first_name
FROM book as b
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
ORDER BY b.title