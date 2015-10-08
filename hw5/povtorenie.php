<?php
/*1.Найдите количество дней, часов, минут, секунд, прошедших с 5:49:59 1го
числа текущего месяца до настоящего момента.*/

$sec1 = mktime(5, 49, 59, 0, 1, 0);
$sec2 = mktime(0, 0, 0, 0, 11, 0);
$sec = $sec2 - $sec1;
echo date("d-h:i:s", $sec);


/*2.Узнайте сколько дней осталось до Нового Года.*/
$ny = mktime(0, 0, 0, 01, 01, 2012);
$timeUntilNY = $ny - time();
$days = floor($timeUntilNY / 3600 / 24);

$hours = floor($timeUntilNY % (3600 * 24) / 3600);

$mins = floor(($timeUntilNY % 3600) / 60);

$secs = $timeUntilNY % 60;
printf('До нового года: %d дней %d часов %d минут %d секунд ', $days, $hours, $mins, $secs);


/*3.Найдите сколько воскресений будет в определенном году $year.
*/
$year = 2013;
$given_year = strtotime($year);
$for_start = strtotime('Sunday', mktime(0, 0, 0, 1, 1, $year));
$for_end = strtotime('+1 year', mktime(0, 0, 0, 1, 1, $year));
for ($i = $for_start; $i <= $for_end; $i = strtotime('+1 week', $i)) {
    echo date('l Y-m-d', $i) . '<br />';
}

/*4.Узнайте какой день недели был 100 дней назад.
*/

$x = mktime(0, 0, 0);
$y = strtotime('-100 days');
$z = $x - $y;
echo date('l', $z);

/*5.Рассчитайте дату пасхи в заданном году. Алгоритм ее расчета
найдите в поисковых системах.*/

$year = 2015;
$a = $year % 4;
$b = $year % 7;
$c = $year % 19;
$d = (19 * $c + 15) % 30;
$e = (2 * $a + 4 * $b - $d + 34) % 7;
$month = floor(($d + $e + 114) / 31);
$day = (($d + $e + 114) % 31) + 1;

echo date("M-d", $P = mktime(0, 0, 0, $month, $day + 13, $year));


?>