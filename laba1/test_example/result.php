<?php
// открыть сессию
session_start();
$result = 0; // Переменная для суммы ответов
if (isset($_SESSION['answers'])) {
    // получение списка вопросов
    $answersCorrect = parse_ini_file('answers.ini');
    // получить список ответов из сессии
	$answer=$_SESSION['answers'];
 // строим цикл по вопросам и сверяем, есть ли среди них правильные ответы.
	foreach($answer as $answer1){
		foreach($answersCorrect as $answer2){
			if($answer1 == $answer2){
			// в цикле считаем колличество правильных ответов
				$result++;
				
			}
		}
	}
	    // удаляем сессию (очищаем файл сессии)
	unset($_SESSION['answers']);  
}
 session_destroy();
?>
<table>
    <tr>
        <td>
            <p>Vash resultat: <?php echo "$result is " . count($answersCorrect)?> </p>
        </td>
    </tr>
</table>
	<a href="index.php">retest</a>