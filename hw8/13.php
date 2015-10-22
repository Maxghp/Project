<?php
/*
 * 13. Сделайте класс-оболочку над БД. Методы класса: получение из базы данных,
 *вставка в базу данных, подсчет количества записей.
 * */

class DataBase{

    public function getFromDb($param1,$param2){
        return $query = "SELECT `$param1` FROM $param2";
    }
    public function setInDb($param1,$param2,$param3){
        return $query = "INSERT INTO `$param1` (`$param2`) VALUES ('$param3')";

    }
    public function  sumStrs($param1,$param2){
        return $query = "SELECT COUNT (*) FROM `$param1` WHERE $param2";
    }

}

?>