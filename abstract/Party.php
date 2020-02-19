<?php
require_once("Hero.php");
class Party{
    const limit = 4;
    private $party = [];

    public function __construct(Hero $Hero){
        $this->party[] = $Hero;
    }
    function addHero(Hero $Hero){
        if(in_array($Hero, $this->party)){
            echo $Hero->name . "はすでに仲間にいます。" . "<br>";
        }else{
            $this->party[] = $Hero;
            echo $Hero->name . "が仲間になりました！" . "<br>"; 
        }
    }
    function AllHeroAttack(){
        foreach($this->party as $Hero){
            echo $Hero->name . "のターンです。" . "<br>";
            $Hero->attack();
        }
    }
}
//あるかないか探す。
?>
