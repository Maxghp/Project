<?php
/*16. Сделайте класс, который создает формы. Класс должен иметь следующие
методы: создание и возвращение инпута, создание и возвращение textarea,
создание и возвращение селекта, создание и возвращение чекбокса (вместе со
скрытым), создание и возвращение radio. p.s. создание и возвращение - в одном методе.*/


class formFactor
{

    public function inpt($name, $value)
    {
        return "<input type=text name=$name value=$value";
    }

    public function tta($rows, $cols, $name)
    {
        return "<textarea rows=$rows cols=$cols name=$name></textarea>";
    }

    public function  slct($name, $arr)
    {
        /*непашет*/
        for ($i = 0; $i <= 1; $i++) {
            $opt = ' <option value=' . $arr[$i]['value'] . ' >' . $arr[$i]['text'] . '</option>';
        }
        return "<select name=$name>" . $opt . "</select>";
    }

    public function box($name, $value)
    {
        return "<input type=checkbox name=$name value=$value'>";
    }

    public function rdo($name, $value)
    {
        return "<input type=radio name=$name value=$value>";
    }
}

$form = new formFactor();

?>
<form action="" method="post">
    <?php echo $form->slct('12345', [0 => ['value' => '1', 'text' => '2'], 1 => ['value' => '2', 'text' => '2']]);?><br>>
</form>

