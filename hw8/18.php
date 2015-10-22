<?php

/**
 * 18. Создать абстрактный класс User. У класса есть свойства firstname, lastname, email,
 * phone. Также есть абстрактный метод getUserInfo. Также у класса есть protected
 * методы: setFirstName, setLastName, setEmail, setPhone. Также необходимо
 * реализовать методы get для этих же свойств.
 * Создать класс Patient, который расширяет класс User и реализует метод
 * getUserInfo возвращая массив из значений свойств. Свойства необходимо
 * получать через реализованные методы getFirstName, getLastName ит.д.
 * Данные для свойств устанавливаются через экземпляр класса Patient.
 */
abstract class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    abstract function getUserInfo();

    protected function setFirstName($firstname)
    {
        $this->firstname = $firstname;

    }

    protected function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    protected function setEmail($email)
    {
        $this->email = $email;
    }

    protected function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getFirstName()
    {
      return  $this->firstname;

    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }


}

class Patient extends User
{

    function getUserInfo()
    {
        return array($this->getFirstName(), $this->getLastName(), $this->getEmail(), $this->getPhone());
    }

    public function __construct($firstname, $lastname, $email, $phone)
    {
        $this->setFirstName($firstname);
        $this->setLastName($lastname);
        $this->setEmail($email);
        $this->setPhone($phone);
    }
}
$newUser = new Patient('Vova','Vovskiy','@gmail.com','5553535');
print_r($newUser->getUserInfo());

?>