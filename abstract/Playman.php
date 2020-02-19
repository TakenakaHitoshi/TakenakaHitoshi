<?php
require_once("Hero.php");
class Playman extends Hero{
    public function attack(){
        $Establishment = rand(1,100);
            if($Establishment<=70){
                echo "短剣で攻撃しました！" . "<br>";
            }else{
                echo "口笛を吹き、スライムを呼び寄せた。。。" . "<br>";
            }
    }
}