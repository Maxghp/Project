<?php
/*7.Создайте форму с элементом ввода. При вводе даты прибавьте к дате 31.12.2013 один день. Результат выведите в том же
формате.
7.1. ( +1 ) Добавьте к форме два элемента типа radio button которые будут определять формат ввода: dd.mm.YY и YY.mm.dd. В
зависимости от формата ввода должен быть такой же формат вывода.*/

if (isset($_POST['submit']) && !empty($_POST['date'])) {
    $date = $_POST['date'];
    $format1 = $_POST['format1'];
    $format2 = $_POST['format2'];
    $dt = explode('.', $date);
    if ($format1) {
        echo date("d.m.Y", mktime(0, 0, 0, $dt[0], $dt[1] + 1, $dt[2]));
    } elseif ($format2) {
        echo date("Y.m.d", mktime(0, 0, 0, $dt[0], $dt[1] + 1, $dt[2]));
    }
}

?>
<form method="post" action="preobrazovanie.html">
    <input type="submit" value="return">
</form>
	