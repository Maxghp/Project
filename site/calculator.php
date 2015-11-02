<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>


<?php if (isset($_POST['calculate']) && !empty($_POST['number1']) && !empty($_POST['math']) && !empty($_POST['number2'])) { ?>

    <?php
    $output = "";
    $number1 = $_POST['number1'];
    $math = $_POST['math'];
    $number2 = $_POST['number2'];

    $output = "$number1 $math $number2 = ";
    switch ($math) {
        case '+':
            $output .= $number1 + $number2;
            break;
        case '-':
            $output .= $number1 - $number2;
            break;
        case '*':
            $output .= $number1 * $number2;
            break;
        case '**':
            $output .= $number1 ** $number2;
            break;
        case '%':
            $output .= $number1 % $number2;
            break;
        case '/':
            if ($number2 == 0)
                $output = 'Деление на ноль запрещено!';
            else
                $output .= $number1 / $number2;
            break;
        default:
            $output = "Неизвестный оператор '$math'";
    }
}
?>
<form name="plus" action="" method="post">
    <input type="hidden" name="znak" value="+">
    <input type="submit" value="+">
</form>
<form name="minus" action="" method="post">
    <input type="hidden" name="znak" value="-">
    <input type="submit" value="-">
</form>
<form name="main" action="" method="post">
    <?php
    $rows = 1;
    if (isset($_COOKIE['znak'])) {
        $rows = $_COOKIE['znak'];
    } else {
        setcookie('znak', $rows);
    }

    if (!empty($_POST)) {
        if (isset($_POST['znak'])) {
            $znak = $_POST['znak'];
            if ($znak == '+') {
                $rows++;
            } elseif ($znak == '-' && $rows > 1) {
                $rows--;
            }
            setcookie('znak', $rows);
        }
    }
    for ($i = 1; $i <= $rows; $i++) {
        ?>
        <form method="POST" action="">
            <input type="text" placeholder="number1" name="number1">
            <input type="text" placeholder="operator" name="math">
            <input type="text" placeholder="number2" name="number2">
            <input type="submit" name="calculate" value="calcutale!"><br>
        </form>
    <?php
    }
    ?>

    <?php
    if ($output) {
        echo $output;
    }
    ?>

</body>
</html>
