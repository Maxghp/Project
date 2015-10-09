-- 18. ������� ������ � ������� ������� (INNER JOIN) �� ������� ������� �� ������ book_author, book, author.
-- ������ ������ ������� �� ����� ������� � ���������: -title �� ������� book, - first_name �� ������� author,- last_name �� ������� author
--  ������� ������ ������������� ��������� ��������: - is_published ����� 1, - - �������, ��� ������� � ��������� email ������ ������������� ����� mail (�����
-- ����� ���������� �����, � ����������� �� ����� ������� � �������).. ������� ������ ���� ������������� �� ������� title ������� book.
SELECT b.title, a.first_name, a.last_name
FROM book as b
INNER JOIN book_author as ba ON ba.book_id = b.id
INNER JOIN author as a ON ba.author_id = a.id
WHERE is_published = 1 AND email LIKE '%mail%'
ORDER BY b.title