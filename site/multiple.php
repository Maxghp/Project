<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица умножения</title>
</head>
<body>


<?php if (isset($_POST['submit']) && !empty($_POST['cols']) && !empty($_POST['rows'])) { ?>

    <?php

    $rows = $_POST['rows'];
    $cols = $_POST['cols'];

    $table = '<table border="1">';

    for ($tr = 1; $tr <= $rows; $tr++) {
        $table .= '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr === 1 || $td === 1) {
                $table .= '<th style="color:black;background-color:yellow;">' . $tr * $td . '</th>'; //вычисляем первую строку и добовляем ей стиль
            } else {
                $table .= '<td>' . $tr * $td . '</td>'; // вычисляются остальные ячейки кроме перой строки и столбца
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;
}
?>

<form method="POST" action="<?= $_SERVER['REQUEST_URI'] ?>">
    <input type="text" placeholder="Cols" name="cols"><br>
    <input type="text" placeholder="Rows" name="rows"><br>
    <input type="submit" name="submit" value="send">
</form>

</body>
</html>