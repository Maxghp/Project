<?php
/*
 * 12. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух
 * чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той
 * степени. Класс должен наследовать методы возведения в степень от класса Power
 * и иметь public методы суммирования.
 * */

class sqrt{

    public function two($a){
        return  pow($a,0.5);
    }
    public function three($a){
        return   pow($a,0.3);
    }
    public function four($a){
        return pow($a,0.25);
    }
    public function five($a){
        return pow($a,0.2);
    }

}

class Summator extends sqrt{
    public function sum($a){
        return $a+$a;
    }
    public  function sumX2($a){
       return  (pow($a,0.5))+(pow($a,0.5));
    }
    public  function sumX3($a){
     return   (pow($a,0.3))+(pow($a,0.3));
    }
    public  function sumX4($a){
        return   (pow($a,0.25))+(pow($a,0.25));
    }
    public  function sumX5($a){
        return (pow($a,0.2))+(pow($a,0.2));

    }

}

$x = new Summator();
echo $x->sumX5(87);




?>