<?php
/*
3. Добавьте в класс User конструктор, который принимает в качестве параметров
firstname, lastname, email, phone. Каждое свойство сохраните с помощью своей функции set
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

}

$petro = new User("Petro","Litovich","qwerty@gmail.com",5555555);

echo "Firstname: " . $petro->getFirstName() . "<br />" .
    "Lastname: " . $petro->getLastName() . "<br />" .
    "Email: " . $petro->getEmail() . "<br />" .
    "Phone: " . $petro->getPhone() . "<br />";






?>