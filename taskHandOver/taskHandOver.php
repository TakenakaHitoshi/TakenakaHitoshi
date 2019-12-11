<?php
    function divideQuarter(int $int){
        return $int / 4;
    }

    function divideQuarterReference(int &$int){
         $int = $int / 4;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskHandOver</title>
</head>
<body>
    <p>課題１</p>
    <?php
    echo "2000を4で割った値は" . divideQuarter(2000) . "です。"
    ?>
    
    <p>課題２</p>
    <?php
    $number = 1000;
    divideQuarterReference($number);
    echo "1000を4で割った値は" . $number . "です。"
    ?>
</body>
</html>