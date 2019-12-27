<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskClassInstance</title>
</head>
<body>
<?php
require_once("Hero.php");
$Yoko = new Hero('ようこ','女','勇者', 24, 6, 13, 8);
$Rina = new Hero('りな','女','魔法使い', 16, 11, 5, 4);
$Takashi = new Hero('たかし','男','僧侶', 18, 8, 9, 6);

function display($string){
    echo($string . "<br>");
}
display("ようこの攻撃力は" . $Yoko->getAttackPower() . "です。");
display("りなの防御力は" . $Rina->getDefensivekPower() . "です。");
display("たかしの攻撃力は" . $Takashi->getAttackPower() . "です。");
display("たかしの防御力は" . $Takashi->getDefensivekPower() . "です。");
?>
</body>
</html>