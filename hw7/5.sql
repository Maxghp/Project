-- 5. Добавить в таблицу book колонку is_published с типом boolean. Значение
-- умолчанию - 0. Колонку необходимо разместить перед колонкой created_at.
ALTER TABLE book ADD `is_published` BOOLEAN DEFAULT FALSE AFTER `created_at`; 