<?php
/*6. Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение,
вычитание, умножение, деление. Каждый метод должен принимать параметром два числа.
*/

class Calculator{

    public function plus($a,$b){
        return $a+$b;
    }
    public function minus($a,$b){
        return $a-$b;
    }
     public function umn ($a,$b){
         return $a*$b;
     }
    public function del($a,$b){
        return $a/$b;
    }
}

$x = new Calculator();
echo $x->del(10,2);
?>