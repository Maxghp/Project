<?php
/*4.Сделайте форму, которая спрашивает у пользователя дату в формате '2013-12-31T12:59:59'. С помощью функций explode и
mktime переведите эту дату в формат timestamp. Узнайте месяц(словом) за введенную дату. Подсказка: explode следует
применить дважды.*/
if (isset($_POST['submit']) && !empty($_POST['month'])) {
    $month = strip_tags(trim($_POST['month']));
    $TNT1 = explode('-', substr($month, 0, -9));
    $TNT2 = explode(':', substr($month, -8, 9));
    echo $m = date("F", mktime($TNT2[0], $TNT2[1], $TNT2[2], $TNT1[0], $TNT1[1], $TNT1[2]));
} else {
    echo 'vvedite daty';
}

?>
<form method="post" action="forma_date_time.html">
    <input type="submit" value="return">
</form>
