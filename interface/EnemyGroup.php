<?php
require_once("EnemyInterface.php");
class EnemyGroup{
    private $party = [];

    public function __construct(array $Enemy){
        $this->party = $Enemy;
    }
    function encount(){
        echo "魔物の群れがあらわれた！" . "<br>";
        foreach($this->party as $Enemy){
            echo $Enemy->getEncountMessage();
        }
    }
    function attack(){       
        foreach($this->party as $Enemy){
            echo $Enemy->getName() . "の攻撃！" . "<br>";
            echo $Enemy->getAttackMessage();
        }
    }
}
?>