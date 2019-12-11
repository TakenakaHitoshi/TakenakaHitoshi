<?php
  $count= "5";
  $string= "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。";
  $intro='I\'m Security Enginner';
  $name= "太郎くん";
  const GREETINGNIGHT = "こんばんは";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php echo("りんごが" . $count . "個あります。"); ?></p>
    <p><?php echo $string;?></p>
    <p><?php echo $intro;?></p>
    <p><?php echo(GREETINGNIGHT . "、" . $name); ?></p>
</body>
<body>
</body>
</html>