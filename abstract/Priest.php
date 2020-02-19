<?php
require_once("Hero.php");
class Priest extends Hero{
    public function attack(){
        echo "魔法で味方を回復しました！". "<br>";
    }
}
?>