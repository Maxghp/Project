<?php
/*9.Передайте в адресную строку GETпараметр date, в котором будет
записана дата в формате '20131231'. Преобразуйте ее в формат
'31.12' (день.месяц).*/

if (isset($_GET['submit']) && !empty($_GET['date'])) {
    $date = $_GET['date'];
    $dt = explode('-', $date);
    echo '<br>' . $d1 = date("d.m", mktime(0, 0, 0, $dt[2], $dt[1], $dt[0]));
}

?>
<form method="post" action="preobrazovanie.html">
    <input type="submit" value="return">
</form>
	