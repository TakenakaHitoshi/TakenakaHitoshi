<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>
    <p>課題１</p>
    <?php
        function display($string){
        echo($string. "<br>");
        }
        display("関数で文字列を表示！");
        display("254×322=". 254*322);
    ?>
    <p>課題２</p>
    <?php
        function createRandomNumberArray(){
            for ($i= 0;$i<10;$i++){
             $array[$i]= rand(1,100);
            } 
            return $array;
        }
        echo("<pre>");
        var_dump(createRandomNumberArray());
        echo("</pre>");
    ?>
    <p>課題３</p>
    <?php
        function createRandomNumberArrayAndDisplay(){
            for ($i= 1;$i<11;$i++){
                $arrayNumber = rand(1,100);
                display($i. "番目の数値：".$arrayNumber);
               } 
        }
        createRandomNumberArrayAndDisplay();
    ?>
    <p>課題４・１</p>
    <?php
       $data = [
        47,
        31,
        86,
        16,
        39,
        53,
        94,
        3,
        74,
        28
    ];
    function numberAverageCalc(array $data, int $int = 0){     
        $total = 0;
        foreach ($data as $value){
            $total += $value;           
        };
        $average = $total/count($data);
        return round($average,$int);
    }
    display("平均は（少数点1位は四捨五入）". numberAverageCalc($data)."です！");
    display("平均は（少数点2位は四捨五入）". numberAverageCalc($data,2)."です！");
    ?>
    <p>課題４・２</p>
    <?php
    $result = 0;
    foreach($data as $value){
        if($value >= numberAverageCalc($data)){
            $result += 1 ;  
        }
    }
    display("平均以上は".$result."個です！");
    ?>
</body>
</html>
