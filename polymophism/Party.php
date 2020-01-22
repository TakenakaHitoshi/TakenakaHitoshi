<?php
require_once("Hero.php");
class Party{
    const limit = 4;
    private $party = [];

    public function __construct(Hero $Hero){
        $this->party[] = $Hero;
    }
    function addHero(Hero $Hero){
        if(count($this->party) >= self::limit){
            return "パーティの上限に達しています。" . "<br>";
        }else{
            $this->party[] = $Hero;
            return $Hero->name . "が仲間になりました！" . "<br>";
        }
    }
    function AllHeroAttack(){
        foreach($this->party as $Hero){
            echo $Hero->name . "のターンです。" . "<br>";
            echo $Hero->attack();
        }
    }
}
?>