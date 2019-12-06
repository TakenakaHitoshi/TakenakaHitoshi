<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>
<p>課題１</p>
    <?php
        require_once("externalFunctions.php");
        echo "84+37=" . calcNumber(84, 37, true). "<br>";
        echo "84-37=" . calcNumber(84, 37, false);
    ?>
<p>課題２</p>
    <?php
        require_once("externalFunctions.php");
        echo "84の２乗は".$function(87,true). "<br>";
        echo "37の３乗は".$function(37,false);
    ?>
<p>課題３−１</p>
    <?php
    //各科目の平均点
    $averageScore = [
        'nationalLanguage' => 63,
        'math' => 67,
        'society' => 71,
        'science' => 68,
        'english' => 66,
    ];
     //各科目名
     $subjectTitle = [
        'nationalLanguage' => '国語',
        'math' => '数学',
        'society' => '社会',
        'science' => '理科',
        'english' => '英語',
    ];   
    //Aくんの点数
    $AScore = [
        'nationalLanguage' => 76,
        'math' => 72,
        'society' => 65,
        'science' => 68,
        'english' => 80,
    ];
        require_once("externalFunctions.php");
        echo "1.全科目の平均点は" . calcAverage($averageScore)."点です。<br>";  
        echo "2.Aくんの平均点は" . calcAverage($AScore)."点です。";  
    ?>
<p>課題３−２</p>
    <?php
        require_once("externalFunctions.php");
        $difference = differenceScore($AScore,$averageScore);
        foreach($difference as $key => $value){
            if($value > 0){
                echo $subjectTitle[$key].'は、平均点より'. $value.'点高いです。<br>'; 
            } elseif ($value == 0){
                echo $subjectTitle[$key].'は、平均点と同じです。<br>';
            } else {
                echo $subjectTitle[$key].'は、平均点より'. abs($value).'点低いです。<br>';
            }
        }
    ?>
</body>
</html>
