<!--13. Создайте файл names.php. В файле создайте форму с двумя полями: name и age.
После ввода имени и возраста запишите данные в файл. После каждого ввода данных
в форму записывайте имя и возраст в файл.
( +1 ) Напишите функцию, которая проверяет наличие имени и возраста в файле. Перед
занесением данных в файл вызовите вашу функцию. Если данные уже есть, выведите
сообщение “Вы уже зарегистрированы!”, если данных нет, то запишите их в файл и
выведите сообщение на экран “Вы успешно зарегистрированы!”.-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Diffrent form fo all files</title>
</head>
<body>
<p>File</p>

<form method="post" action="">
    <input type="text" name="name">Name<br/>
    <input type="text" name="age">Age<br/>
    <input type="submit" name="submit" value="send">
</form>

</body>
</html>
<?php
if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['age'])) {
    $newFile = fopen("info.txt", "a+");
    $string = "\n" . $_POST['name'] . " " . $_POST['age'];
    fwrite($newFile, $string);
    fclose($newFile);
    echo "Privet " . $_POST['name'] . ", tebe : " . $_POST['age'] . " year! starichok";
}
elseif (!empty(file("info.txt")) && isset($_POST['submit'])) {
    while (!feof("info.txt")) {
        $string = file_get_contents("info.txt");
        if ($string == $_POST['name'] . " " . $_POST['age']) {
            echo "Vi yje zaregestrirovan!";
        }

    }

}
?>
