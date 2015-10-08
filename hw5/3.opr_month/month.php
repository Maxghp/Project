<?php
/*3.Сделайте форму, которая спрашивает дату в формате '2013-12-31'. С помощью функций explode и mktime переведите
эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.*/
if (isset($_POST['submit'])) {
    $month = strip_tags(trim($_POST['month']));
    $arrx = explode('-', $month);
    echo $m = date("F", mktime(0, 0, 0, $arrx[2], $arrx[1], $arrx[0]));
}


?>
<form method="post" action="forma_month.html">
    <input type="submit" value="return">
</form>
