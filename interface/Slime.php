<?php
require_once("EnemyInterface.php");
class Slime implements EnemyInterface{
    private $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName():string{
        return $this->name;
    }
    public function getAttackMessage():string{
        return $this->name . "が体当たりしてきた！". "<br>";
    }
    public function getEncountMessage():string{
        return $this->name . "がぷるぷるしている。". "<br>";
    }
}
?>