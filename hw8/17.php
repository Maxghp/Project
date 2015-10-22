<?php
class table
{
    public function tbl(array$arr)
    {

        echo '<table border="1">';

        for ($tr=1; $tr<=$arr[0]; $tr++){

            echo '<tr>';
            for ($td=1; $td<=$arr[1]; $td++){
                echo '<td>' . 'X' . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    }
}
$table = new table();
$table->tbl(array('10','10'));


?>