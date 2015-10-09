-- 15. c������ ������ �� ������� ������� �� ������ book_author, book, author. ������ ������ ������� �� ����� ������� � ���������:
-- - title �� ������� book && - first_name �� ������� author && - last_name �� ������� author
-- ������� ������ ���� ������������� �� ������� title ������� book. 
-- �������� ������ �� ������ ������� (������� ����������� LEFT JOIN).

SELECT b.title, a.first_name, a.last_name
FROM book as b
LEFT JOIN book_author as ba ON ba.book_id = b.id
LEFT JOIN author as a ON ba.author_id = a.id
ORDER BY b.title