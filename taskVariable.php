<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
<?php
    $name = "太郎くん";
    const GREETINGNIGHT = "こんばんは、";
?>
 <p><?php echo(GREETINGNIGHT.$name); ?></p>

<?php
    $applePrice = 110;
    $sumAppleprice = $applePrice * 15;
?>
<p><?php echo("りんごの値段：".$sumAppleprice);?></p>

<?php
    $orangePrice=80;
    $sumOrangeprice=$orangePrice*12;
?>
<p><?php echo("みかんの値段:".$sumOrangeprice);?></p>
<?php
    $sumPrice=($sumAppleprice+$sumOrangeprice);
?>
<p><?php echo("合計金額（税抜）:".$sumPrice);?></p>

<?php
    $sumpriceTax=$sumPrice*1.1;
?>
<p><?php echo("合計金額（税込）:".$sumpriceTax);?></p>
<?php
    $sumfruit=15+12;
?>
<p><?php echo("フルーツ１個当たりの金額:".round($sumPrice/$sumfruit));?></p>

</body>
</html>