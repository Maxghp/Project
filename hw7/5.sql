-- 5. �������� � ������� book ������� is_published � ����� boolean. ��������
-- ��������� - 0. ������� ���������� ���������� ����� �������� created_at.
ALTER TABLE book ADD `is_published` BOOLEAN DEFAULT FALSE AFTER `created_at`; 