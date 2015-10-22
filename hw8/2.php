<?php
/*
 2. В тот же класс User добавьте несколько свойств: lastname, email, phone. Создайте
по два публичных метода set и get на каждое свойство по аналогии с предыдущим
заданием.
 */

class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;


    public function setFirstName($imya){
        $this->firstname = $imya;
    }
    public function getFirstName(){
        return $this->firstname;
        }
    public function setLastName($familiya){
        $this->lastname = $familiya;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function setEmail($pochta){
        $this->email = $pochta;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPhone($telefon){
        $this->phone = $telefon;

    }
    public function getPhone(){
        return $this->phone;
    }


}

$petro = new User;
$petro->setFirstName("Petro");
$petro->setLastName("Jovanski");
$petro->setEmail("qwerty@gmail.com");
$petro->setPhone(5555555);
echo "Firstname: " . $petro->getFirstName() . "<br />" .
"Lastname: " . $petro->getLastName() . "<br />" .
"Email: " . $petro->getEmail() . "<br />" .
"Phone: " . $petro->getPhone() . "<br />";






?>