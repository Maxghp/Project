<?php
/*
 9. Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор
функций: сохранение куки, удаление куки, редактирование куки, считывание куки.
По умолчанию кука должна устанавливаться на 1 год.
*/

class cookie{

    public function saveCookie($name,$value){
        SetCookie($name,$value,time() + 60 * 60 * 24 * 360);
    }
    public function destroyCookie($name){
        SetCookie($name,"");
    }
    public function redactCookie($name1,$name2,$value){
        if(isset($_COOKIE[$name1])) {
            SetCookie($name2,$value,time() + 60 * 60 * 24 * 360);
        }
    }

    public function readCookie($name){
        return print_r($_COOKIE[$name]);

    }

}

$first = new cookie();
$first->saveCookie('Hello','123');
$first->redactCookie('Hello','Zello','5454');
$first->destroyCookie('Zello');
$first->readCookie('Hello');
?>