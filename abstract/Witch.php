<?php
require_once("Hero.php");
class Witch extends Hero{
    public function attack(){
        echo "魔法で攻撃しました！". "<br>";
    }
}
?>