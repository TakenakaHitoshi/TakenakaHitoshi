<?php
require_once("Hero.php");
class Witch extends Hero{
    public function attack(){
        return "魔法で攻撃しました！". "<br>";
    }
}
?>