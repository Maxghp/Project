<?php
/*
10. Дан GETпараметр date, в который вводится год в формате
'2013'. Посчитайте сколько воскресений в этом году приходится на первое число месяца.
*/


if (isset($_GET['submit']) && !empty($_GET['year'])) { 
    $year = $_GET['year']; 
    $count = 0; 

    foreach (range(1, 12) as $month) { 
        if ('Sunday' === date('l', mktime(0, 0, 0, $month, 1, $year))) { 
            ++$count;
        }
    }
    echo 'In ' . $year . ' year you have ' . $count . ' Sundays in 1st day of month';
}
?>