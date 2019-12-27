<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskClassInstance</title>
</head>
<body>
<table border="1">
<tr>
        <th>名前</th>
        <th>性別</th>
        <th>職業</th>
        <th>HP</th>
        <th>MP</th>
        <th>攻撃力</th>
        <th>防御力</th>
</tr>
<?php
require_once("Hero.php");
$Yoko = new Hero('ようこ','女','勇者', 24, 6, 13, 8);
$Rina = new Hero('りな','女','魔法使い', 16, 11, 5, 4);
$Takashi = new Hero('たかし','男','僧侶', 18, 8, 9, 6);


$yokostatus = $Yoko->getStatus();
    foreach($yokostatus as $key => $value ){  
        echo ("<td>" . $value . "</td>");
    }
    echo "<tr>";
    echo "</tr>";
$rinastatus = $Rina->getStatus();
    foreach($rinastatus as $key => $value ){  
        echo ("<td>" . $value . "</td>");
    }
    echo "<tr>";
    echo "</tr>";
$takashistatus = $Takashi->getStatus();
    foreach($takashistatus as $key => $value ){  
        echo ("<td>" . $value . "</td>");
    }
?>
</table>
</body>
</html>