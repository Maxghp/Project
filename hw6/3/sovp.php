<?php
/*3. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в
третий файл.*/
$myNewFile = fopen("sovpadeniya.txt", "w+");
$poem1 = file("1.txt");
$poem2 = file("2.txt");
$sovp = array_intersect($poem1, $poem2);
$sovpToText = implode("", $sovp);
fwrite($myNewFile, $sovpToText);
fclose($myNewFile);

?>