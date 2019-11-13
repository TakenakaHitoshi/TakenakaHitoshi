<?php
    $name = "太郎くん";
    const GREETINGNIGHT = "こんばんは、";
    $applePrice = 110;
    $sumAppleprice = $applePrice * 15;
    $orangePrice=80;
    $sumOrangeprice=$orangePrice*12;
    $sumPrice=($sumAppleprice+$sumOrangeprice);
    $sumpriceTax=$sumPrice*1.1;
    $sumfruit=15+12;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
　　<p><?php echo(GREETINGNIGHT.$name); ?></p>
　　<p><?php echo("りんごの値段：".$sumAppleprice);?></p>
　　<p><?php echo("みかんの値段:".$sumOrangeprice);?></p>
　　<p><?php echo("合計金額（税抜）:".$sumPrice);?></p>
　　<p><?php echo("合計金額（税込）:".$sumpriceTax);?></p>
　　<p><?php echo("フルーツ１個当たりの金額:".round($sumPrice/$sumfruit));?></p>
</body>
</html>