<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
<p>課題１</p>
<p>1-1</p>
<p>
    <?php
     $averageSalaryArray = [
        2018 => 4410000,
        2017 => 4320000,
        2016 => 4220000,
        2015 => 4200000,
        2014 => 4150000
        ];

     echo("<pre>");
     var_dump($averageSalaryArray);
     echo("</pre>");
    ?>
</p>
<p>1-2</p>
<p>
    <?php
     echo ("過去５年間の平均年収は".(($averageSalaryArray[2018]+$averageSalaryArray[2017]+$averageSalaryArray[2016]
     +$averageSalaryArray[2015]+$averageSalaryArray[2014])/5)."円です。");
    ?>
</p>
<p>課題２</p>
<p>2-1</p>
<p>
    <?php
     $memberScore = [
        "A" => 80,
        "B" => 55,
        "C" => 61,
        "D" => 76,
        "E" => 34,
        "F" => 93
        ];

     echo("<pre>");
     var_dump($memberScore);
     echo("</pre>");
    ?>
</p>
<p>2-2</p>
<p>
    <?php
     echo ("テストのの平均点数は".(($memberScore["A"]+$memberScore["B"]+$memberScore["C"]
     +$memberScore["D"]+$memberScore["E"]+$memberScore["F"])/6)."点です。");
    ?>
</p>
</body>
</html>