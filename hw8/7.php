<?php
/*
 * Сделайте класс Sqrt, который извлекает из числа корень нужной степени
 * (используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь
 * следующие методы: корни 2, 3, 4, 5 степени.
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

$x = new sqrt();
echo $x->two(4);



?>