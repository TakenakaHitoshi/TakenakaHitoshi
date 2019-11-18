<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
<p>課題１</p>
<p>⑴</p>
<p>
    <?php 
        echo("A君の理科の点数は77点です。"); 
    ?>
</p>
<p>⑵</p>
<p>
    <?php 
     echo("B君の英語の点数は78点です。"); 
    ?>
</p>
<p>⑶</p>
    <?php 
     echo("A君の平均点は".((85+64+45+77+80)/5)."点です。"); 
    ?>
</p>
<p>⑷</p>
<p>
    <?php
     $score = [
        "Cの点数" => [
        "国語" => 98,
        "数学" => 87,
        "社会" => 88,
        "理科" => 92,
        "英語" => 96
        ],
    ];
     echo("<pre>");
     var_dump($score);
     echo("</pre>");
    ?>

    <?php
     echo("C君の平均点は".((98+87+88+92+96)/5)."点です。")
    ?>
</p>
<p>⑸</p>
<p>
    <?php
     $memberScore = [
         "Aの点数" => [
            "国語" => 85,
            "数学" => 64,
            "社会" => 45,
            "理科" => 77,
            "英語" => 80
        ],
         "Bの点数" => [
            "国語" => 56,
            "数学" => 89,
            "社会" => 73,
            "理科" => 85,
            "英語" => 78
        ],
         "Cの点数" => [
            "国語" => 98,
            "数学" => 87,
            "社会" => 88,
            "理科" => 92,
            "英語" => 96
        ],
    ];
     echo("<pre>");
     var_dump($memberScore);
     echo("</pre>");
     $scoreAverage = $memberScore["Aの点数"]["数学"]+$memberScore["Bの点数"]["数学"]+$memberScore["Cの点数"]["数学"];
     echo("3人の数学の平均点は".($scoreAverage/3)."点です。");
    ?>
</p>
</body>
</html>