<?php
require_once("Hero.php");
class Priest extends Hero{
    public function attack(){
        return "魔法で味方を回復しました！". "<br>";
    }
}
?>