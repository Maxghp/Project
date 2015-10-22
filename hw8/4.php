<?php
/*
4. Добавьте в класс User метод getUserInfo. В методе должен формироваться массив.
В качестве ключей должны быть свойства класса: firstname, lastname,email, phone.
В качестве значений должны быть значения этих свойств.
Значения свойств должны быть получены с помощью функций get... (getFirstName,
getLastName и т.д.).
 */

class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;


    function __construct($imya,$familiya,$pochta,$telefon){
        $this-> firstname = $imya;
        $this-> lastname = $familiya;
        $this-> email = $pochta;
        $this-> phone = $telefon;
    }


    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    function getUserInfo(){
      return $arr = array("$this->firstname"=>User::getFirstName(),"$this->lastname"=>User::getLastName(),$this->email=>User::getEmail(),
                            "$this->phone"=>User::getPhone());
    }

}

$petro = new User("Petro","Litovich","qwerty@gmail.com",5555555);

print_r($petro->getUserInfo());





?>