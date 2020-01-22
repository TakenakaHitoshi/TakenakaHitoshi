<?php
class Hero{
    public $name;
    private $gender;
    private $job;
    private $HP;
    private $MP;
    private $power;
    private $defense;

    public function __construct(string $name, string $gender, string $job, int $HP, int $MP, int $power, int $defense){
        $this->name = $name;
        $this->gender = $gender;
        $this->job = $job;
        $this->HP = $HP;
        $this->MP = $MP;
        $this->power = $power;
        $this->defense = $defense;
    }
    function getStatus(){
        $array = [
            "名前"=> $this->name,
            "性別"=> $this->gender,
            "職業"=> $this->job,
            "HP"=> $this->HP,
            "MP"=> $this->MP,
            "攻撃力"=> $this->power,
            "防御力"=> $this->defense,
        ];
        return $array;
    }
    function getAttackPower(){
        return $this->power;
    }
    function getDefensivekPower(){
        return $this->defense;
    }
    function Attack(){
        return "攻撃しました！". "<br>";
    }
}
?>