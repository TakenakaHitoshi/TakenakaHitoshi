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
require_once("Brave.php");
require_once("Witch.php");
require_once("priest.php");
$PeopleA = new Hero('村人A','男','村人', 5, 5, 5, 5);
$Yoko = new Brave('ようこ','女','勇者', 24, 6, 13, 8);
$Rina = new Witch('りな','女','魔法使い', 16, 11, 5, 4);
$Takashi = new Priest('たかし','男','僧侶', 18, 8, 9, 6);

$PeopleA->Attack();
$Yoko->attack();
$Rina->attack();
$Takashi->attack();
?>
</body>
</html>