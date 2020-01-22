<?php
require_once("Hero.php");
class Brave extends Hero{
    public function attack(){
        return "剣で攻撃しました！". "<br>";
    }
}
?>