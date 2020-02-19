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
require_once("EnemyInterface.php");
require_once("Slime.php");
require_once("Drakiy.php");
require_once("EnemyGroup.php");

$EnemyGroup = array(
    new Slime('スライムA'),
    new Slime('スライムB'),
    new Drakiy('ドラキー')
);
$party = new EnemyGroup($EnemyGroup);
$party->encount();
$party->attack();
?>
</body>
</html>