<?php
//4. Дан файл со словами. Упорядочить слова по алфавиту.
$myFile = fopen("alph.txt", "r");
$toFile = fopen("alph2.txt", "w+");
$string = fgets($myFile);
$exp = explode(" ", $string);
sort($exp);
foreach($exp as $word){
 fwrite($toFile,"$word ");
}
fclose($myFile);
?>