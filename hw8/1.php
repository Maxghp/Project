<?php
/*
 * 1. Сделайте класс User. Создайте в классе публичное свойство firstname и два
 * публичных метода: setFirstName и getFirstName. Создайте экземпляр класса.
 Используя экземпляр и метод setName сохраните в свойство name текствое
значение. С помощью экземпляра и метода getName получите текствое значение,
 *
 */

class User
{
    public $firstname;

    public function setFirstName($firstname){
        $this->firstname = $firstname;
    }
    public function getFirstName(){
        return $this->firstname;


    }
}

$petro = new User;
$petro->setFirstName("Petro");
echo $petro->getFirstName();


?>