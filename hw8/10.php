<?php
/*
 * 10. Сделайте класс-валидатор $_REQUEST, $_GET, $_POST. Класс должен иметь
 * private методы обрезание пробелов del_gaps и удаление тегов del_tags (оболочку
 * над стандартными) и public метод protect, который получает массив, обрабатывает
 * его del_gaps и del_tags и возвращает обработанный массив. Класс должен иметь
 * public свойства request, post, get, в которых хранятся соответствующие
 * обработанные массивы. Обработка должна происходить при инициализации
 * класса (то есть в __construct).
 * */

class Validator{

    public $request;
    public $get;
    public $post;

    public function _construct($arr){
        if(isset($_REQUEST['name'])){
            $this->request = $this->protect($arr);
        }
        elseif(isset($_GET['name'])){
            $this->get = $this->protect($arr);
        }
        elseif(isset($_POST['name'])){
            $this->post = $this->protect($arr);
        }
    }
    private function del_gaps($arr){
        return trim($arr);
    }

    private function del_tags($arr){
        return strip_tags($arr);
    }

    public function protect($arr){
       $arr=$this->del_gasp($arr);
        $arr = $this->det_tags($arr);
        return $arr;

    }

}
?>