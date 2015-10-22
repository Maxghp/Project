<?php
/*
 * 14. Сделайте класс, который подключает внешние файлы к html странице, такие как
 * CSS и JS. Класс должен иметь методы getCss и getJs.*/

class pdkl {

    public function getCss($href){

        echo "<link rel='stylesheet' href= $href type= 'text/css' >";
    }

    public function getHtml($src){
        echo "<script type='text/javascript' src=$src>";
    }
}

$css1 = new pdkl();
$css1-> getCss('css1.css');
$html1 = new pdkl();
$html1->getHtml('html1.html');

?>
