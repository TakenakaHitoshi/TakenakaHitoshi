<?php
require_once("EnemyInterface.php");
class Drakiy implements EnemyInterface{
    private $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName():string{
        return $this->name;
    }
    public function getAttackMessage():string{
        return $this->name . "が噛み付いてきた！". "<br>";
    }
    public function getEncountMessage():string{
        return $this->name . "が警戒しながらこっちを見ている。". "<br>";
    }
}
?>