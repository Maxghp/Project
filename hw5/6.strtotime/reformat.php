<?php
/*5.Сделайте форму, которая спрашивает две даты в формате'2013-12-31'.Первую дату запишите в переменную $date1, а
вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.*/
if (isset($_POST['submit']) && !empty($_POST['rf'])) {
    $rf = $_POST['rf'];
    echo date("h:i:s d.m.Y", strtotime("$rf"));
}

?>
<form method="post" action="strtotime.html">
    <input type="submit" value="return">
</form>
	