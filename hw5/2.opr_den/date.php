<?php
/*2.Сделайте форму, создайте поле ввода, в которое необходимо вводить дату в формате: '31.12.2013'. С помощью функций
explode и mktime переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.*/
if (isset($_POST['submit']) && !empty($_POST['date'])) {
    $date = strip_tags(trim($_POST['date']));
    $arrx = explode('.', $date);
    echo $d = date("D", mktime(0, 0, 0, $arrx[0], $arrx[1], $arrx[2]));
} else {
    echo 'vvedite daty';
}

?>
<form method="post" action="forma_date.html">
    <input type="submit" value="return">
</form>
