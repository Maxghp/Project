<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 14.09.2015
 * Time: 1:15
 */
header("Content-type: text/html; charset=utf-8");

// открыть сессию
session_start();
// получение вопросов из файла
$questions = parse_ini_file('questions.ini');

$questionCounter=0;
// поверить что пришел вопрос в POST-массиве
//unset($_SESSION['answers']);
    if(isset($_POST['answer']) && !empty($_POST['answer'])){
		// проверить что в сессии есть переменная под ответы
        $answer = strip_tags($_POST['answer']);
        if(!isset($_SESSION['answers'])) {
			// если нет - создать переменную в массиве и присвоить ей пустой массив
            $_SESSION['answers']=array();
            $_SESSION['questionCounter']=1;
        }
        $questionCounter=$_SESSION['questionCounter'];

        $_SESSION['answers'][]=$answer;
        $_SESSION['questionCounter']++;

    }
$title=$questions[$questionCounter];




// проверить если вопрос последний, то сделать редирект на страницу результата
if($questionCounter >=6){
    header('Location:http://localhost/test_example/result.php');
}
?>
<h3><?php echo $title; ?></h3>
<form action="quiz.php" method="post">
    <input type="hidden" name="q" value="<?php // номер вопроса ?>">
    <input name="answer" type="text">
    <input type="submit">
</form>
