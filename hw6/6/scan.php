﻿<?php
/*6. Написать функцию, которая будет показывать список всех файлов в данной папке
(поиск файлов происходит и во всех вложенных уровнях).*/
$dir = './';
$scan = scandir($dir);
print_r($scan);
?>