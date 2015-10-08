<?php
/*5.Сделайте форму, которая спрашивает две даты в формате'2013-12-31'.Первую дату запишите в переменную $date1, а
вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.*/
if (isset($_POST['submit']) && !empty($_POST['date1']) && !empty($_POST['date2'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    if ($date1 > $date2) {
        echo $date1;
    } else {
        echo $date2;
    }
}

?>
<form method="post" action="2dati.html">
    <input type="submit" value="return">
</form>
