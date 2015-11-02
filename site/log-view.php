<?php
if(file_exists('log.txt')) {
    $file = file('log.txt');
    foreach ($file as $v) {
        list($date, $pg, $addr) = explode('|', $v);
        $date = date('d-m-Y H:i:s', $date);
        echo "$date : $addr ---> $pg <br />";
    }
}
?>