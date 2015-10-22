<?php
/*
 * 11. Напишите оболочку над сессиями. Оболочка должна представлять собой набор
 *функций: сохранение в сессию, считывание из сессии, удаление всех переменных
 *сессии. Сессия должна стартовать в функции __construct.
 * */

class session{


    public function __construct(){
            session_start();
        }

        public function sessCreate($name,$value) {
            $_SESSION[$name] = $value;
        }

        public function sessRead($name){

            print_r($_SESSION[$name]);
        }

        public function sessDestroy($name){

            unset($_SESSION[$name]);
            session_destroy();
        }


}

$first = new session();
$first->sessCreate('hello','world');
$first->sessRead('hello');

?>