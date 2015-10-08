<?php
if (isset($_GET['submit']) && !empty($_GET['year'])) {
    $year = $_GET['year'];

    foreach (range(1, 12) as $month) {
        $thirteen = mktime(0, 0, 0, $month, 13, $year);
        if ('Friday' === date('l', $thirteen)) {
            echo date('Y-m-d', $thirteen) . ' Friday </br>';
        }
    }
}
?>