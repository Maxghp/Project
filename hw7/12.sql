-- 12. Создать несколько запросов, где необходимо обновить таблицу author и
-- установить для колонки email составное значение: fist_name_last_name@<любой_ящик>.
-- Например, есть запись Джек (first_name) Лондон (last_name). Значение для email должно быть jack_london@mail.ru.
UPDATE `author` SET `email` = 'Vova_Vovskiy@gmail.com' WHERE `id` = 11
UPDATE `author` SET `email` = 'Lol_Lolskiy@mail.ru' WHERE `id` = 15
UPDATE `author` SET `email` = 'Svetka_Svetskaya@yandex.com' WHERE `id` = 14
