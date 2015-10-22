<?php
/*5. Сделайте класс Power, который возводит число в нужную степень (не используя
стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5 степени.
*/

class Power{


   public function two ($a){
    return $a*$a;
    }
    public  function three($a){
        return $a*$a*$a;
    }
    public function four($a){
        return $a*$a*$a*$a;
    }
   public function five($a){
        return $a*$a*$a*$a*$a;
    }
}

$sqrt = new Power();
echo $sqrt->two(12);


?>