-- 11. ������� ������ �� ���������� ������� book, ��� ����� ���������� �������
-- ���� (������� NOW()) ��� ������� created_at ��� �������, � ������� is_published ����� 1
UPDATE `book` SET `create_at` = NOW() WHERE `is_published` = 1;
