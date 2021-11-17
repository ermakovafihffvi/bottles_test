<?php
class Counter{
    /**
     * Число бутылок в маленькой, большой и средней коробках
     */
    private $smallbox = 3;
    private $mediumbox = 6;
    private $bigbox = 12;

    function __construct($bottles){
        $this->bottles = $bottles;
    }

    /**
     * b - частное от деления числа бутылок на число бутылок в большой коробке
     * с - остаток от деления числа бутылок на число бутылок в большой коробке,
     * оно же новое число бутылок для следующего шага вычисления
     * Возвращается массив в формате json с числом каждого НЕОБХОДИМОГО типа коробок
     */

    public function calc(){
        $b = $this->bottles / $this->bigbox;
        $arr = [];
        while($b > 0){
            if($b > 1){
                $c = bcmod($this->bottles, $this->bigbox);
                $arr['big'] = floor($b);
                $this->bottles = $c;
                $b = $this->bottles / $this->bigbox;
            }elseif($b <= 1 && $b > 0.75){
                $arr['big'] = $arr['big'] + 1;
                $b = 0;
            } elseif($b <= 0.75 && $b >= 0.5){
                $this->bottles = $this->bottles - 6;
                $arr['med'] = $arr['med'] + 1;
                $b = $this->bottles / $this->bigbox;
            } elseif($b < 0.5 && $b > 0.25){
                $arr['med'] = $arr['med'] + 1;
                $b = 0;
            } elseif($b <= 0.25){
                $arr['small'] = 1;
                $b = 0;
            }
        }

        echo json_encode($arr);
    }
}


if(isset($_POST['bottles'])){
    $bottlesCounter = new Counter($_POST['bottles']);
    $bottlesCounter->calc();   
}