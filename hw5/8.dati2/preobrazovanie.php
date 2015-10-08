<?php
/*8.Создайте форму с элементом ввода. В поле вводится дата в формате '2013-12-31'.
Прибавьте к этой дате 1) 2 дня, 2) 1 месяц и 3 дня, 3) 1 год. Отнимите от этой даты 3 дня.
Результат выведите на экран.*/

if (isset($_POST['submit']) && !empty($_POST['date'])) {
    $date = $_POST['date'];
    $dt = explode('-', $date);
    echo $d1 = date("Y-m-d", mktime(0, 0, 0, $dt[2], $dt[1] + 2, $dt[0]));
    echo '<br>' . $d1 = date("Y-m-d", mktime(0, 0, 0, $dt[2] + 1, $dt[1] + 3, $dt[0]));
    echo '<br>' . $d1 = date("Y-m-d", mktime(0, 0, 0, $dt[2], $dt[1], $dt[0] + 1));
    echo '<br>' . $d1 = date("Y-m-d", mktime(0, 0, 0, $dt[2], $dt[1] - 3, $dt[0]));
}

?>
<form method="post" action="preobrazovanie.html">
    <input type="submit" value="return">
</form>
	