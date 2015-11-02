<?php
$handle = fopen('log.txt','a+');
$time = time();
$page = $_SERVER['REQUEST_URI'];
$getLink = $_GET['page'] . '.php';
fwrite($handle,"\n$time|$request|$getLink|");
echo "Loooooooooggggggggeeeeeeeeeeed.....!!!";
fclose($handle);
?>