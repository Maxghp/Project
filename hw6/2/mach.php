<?php
/*2. Даны два файлы со словами, разделенными пробелами. Создать новый файл,
содержащий:
а) строки, которые встречаются только в первом файле?
б) строки, которые встречаются в обоих файлах?
в) строки, которые встречаются в каждом файле более двух раз.*/
$myFile = fopen("matches.txt", "a+");
$fp1 = file("1.txt");
$fp2 = file("2.txt");
//встречаются в обоих файлах
$strings1 = array_intersect($fp1, $fp2);
$toStrings1 = implode("", $strings1);
fwrite($myFile, $toStrings1);
//встречаются только в первом файле
$strings2 = array_diff($fp2, $fp1);
$toString2 = implode("", $strings2);
fwrite($myFile, $toString2);



?>