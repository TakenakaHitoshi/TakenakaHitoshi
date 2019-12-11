<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskScope</title>
</head>
<body> 
<?php
    $int = rand(1, 15);
    $number = rand(1, 100);
    function randomRecursiveCalc(int $int){
        $sum = 0;
        $array = [];
        for ($i= 0; $i < $int; $i++){
            $array[$i]= rand(1, 100);
            $sum += $array[$i];
        }
        $result = [
            "数値" => $array,
            "合計" => $sum
        ];
        return $result;
    }
    echo "処理回数：" . $int . "<br>";
    $total = randomRecursiveCalc($int);
    echo "合計：" . $total["合計"];
?>
<table border ="1">
    <?php
        foreach($total["数値"] as $key => $value){
            echo "<tr>";
            echo "<td>" . (1+$key). "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>