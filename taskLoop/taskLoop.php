<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
<p>課題１</p>
<p>
    <?php 
    $fruits =[
        "apple" =>[
            "japanese" =>"りんご",
            "price" =>"80",
        ],
        "orange" =>[
            "japanese" =>"オレンジ",
            "price" =>"120",
        ],
        "grape" =>[
        "japanese" =>"ぶどう",
            "price" =>"220",
        ],
    ];
    foreach($fruits as $key => $value){
        echo("英語では".$key."と表示され、日本語では".$value["japanese"]."、価格は".$value["price"]."円です。<br>"); 
    }
    ?>
</p>
<p>課題2</p>
<table border="1">
        <tr>
            <th>名前</th>
            <td>国語</td>
            <td>数学</td>
            <td>社会</td>
            <td>理科</td>
            <td>英語</td>
            <td>平均</td>
        </tr>
        <?php
        $score = [
            "A" => [
                "国語" => 34,
                "数学" => 76,
                "社会" => 98,
                "理科" => 65,
                "英語" => 67,
            ],
            "B" => [
                "国語" => 76,
                "数学" => 72,
                "社会" => 65,
                "理科" => 77,  
                "英語" => 80,
            ],
            "C" => [
                "国語" => 98,
                "数学" => 87,
                "社会" => 88,
                "理科" => 92,  
                "英語" => 96,
            ],
            "D" => [
                "国語" => 65,
                "数学" => 34,
                "社会" => 71,
                "理科" => 56,  
                "英語" => 76,
            ],
            "E" => [
                "国語" => 67,
                "数学" => 55,
                "社会" => 87,
                "理科" => 56,  
                "英語" => 69,
            ],
            "F" => [
                "国語" => 81,
                "数学" => 79,
                "社会" => 74,
                "理科" => 82,  
                "英語" => 85,
            ],
        ];
        $subjectSum = [
            "国語" => 0,
            "数学" => 0,
            "社会" => 0,
            "理科" => 0,  
            "英語" => 0,  
        ];
        foreach($score as $name => $value ){
            echo("<tr>");
            echo ("<td>" . $name . "</td>");
            $nameSum = 0;       
            foreach($value as $subject => $eachScore){
                echo ("<td>" . $eachScore . "</td>");
                $nameSum += $eachScore;
                $subjectSum[$subject] += $eachScore;
            }
            echo("<td>". $nameSum/5 ."</td>");
            echo("</tr>");
        }
        echo("<tr>");
        echo("<td>平均</td>");
        $nameSum = 0;  
        foreach($subjectSum as $eachScore){
            echo("<td>". round($eachScore/6) . "</td>" );
            $nameSum += $eachScore;
        }
        echo("<td>". $nameSum/30 ."</td>");
        echo("</tr>");
        ?>
</table>
</body>
</html>