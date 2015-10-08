<?php
/*12. Дан GETпараметр date, в который вводится год в формате '2013'. Узнайте, какой это будет год по восточному календарю.
Результат выведите на экран.*/

if (isset($_GET['submit']) && !empty($_GET['date'])) {
    $year = $_GET['date'];
    $value = ($year - 1900) % 12;
    switch ($value) {
        case 0:
            echo 'Ты крыса';
            break;
        case 1:
            echo 'Ты бык';
            break;
        case 2:
            echo 'Ты тигр';
            break;
        case 3:
            echo 'Ты кролик';
            break;
        case 4:
            echo 'Ты дракон';
            break;
        case 5:
            echo 'Ты змея';
            break;
        case 6:
            echo 'Ты лошадь';
            break;
        case 7:
            echo 'Ты коза';
            break;
        case 8:
            echo 'Ты обезъяна';
            break;
        case 9;
            echo 'Ты петух';
            break;
        case 10:
            echo 'Ты собака';
            break;
        case 11:
            echo 'Ты свинья';
            break;
    };
}

?>
<form method="post" action="vost_kal.html">
    <input type="submit" value="return">
</form>