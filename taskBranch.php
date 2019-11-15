<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
    <p>課題1-1</p>
<p>
   <?php 
   $number = 100;
   if($number == 100) {
       echo('$string100は100です。');
    } else {
       echo('$string100は100ではありません。');
    }
   ?>
</p>
   <p>課題1-2</p>
<p>
   <?php 
   $number = 100;  
   if($number === 100) {
    echo('$string100は数字の100です。');
    } else {
    echo('$string100は数字の100ではありません。');
    }
   ?>
</p>
   <p>課題1-3</p>
<p>
   <?php 
   $number = 100;  
   if($number > 100) {
    echo('$string100は数字の101以上です。');
    } else {
    echo('$string100は数字の101以上ではありません。');
    }
   ?>
</p>
   <p>課題1-4</p>
<p>
   <?php 
   $number = 100;  
   if($number >= 100) {
    echo('$string100は数字の100以上です。');
    } else {
    echo('$string100は数字の100以上ではありません。');
    }
   ?>
</p>
   <p>課題2-1</p>
<p>
   <?php 
   $scoreJapanese = rand(1, 100); 
   $scoreEnglish = rand(1, 100);
   $scoreScience = rand(1, 100);
   $scoreSociety = rand(1, 100);
   $scoreMathematics = rand(1, 100); 
   $averageA = (($scoreJapanese+$scoreEnglish+$scoreScience+$scoreSociety+$scoreMathematics)/5);
   echo ("Aくんの平均点は".$averageA."点です。");
   ?>
</p>
   <p>課題2-2</p>
<p>
   <?php 
   $average = 67.3;  
   if($averageA >= $average) {
    echo('Aくんの平均点は67.3以上です。');
    } else {
    echo('Aくんの平均点は67.3未満です。');
    }
   ?>
</p>
  <p>課題3-1</p>
<p>
   <?php 
   switch($case) {
      case true:
          echo 'bool';
          break;
      case 1:
          echo 'int';
          break;
      case '1':
          echo 'string';
          break;  
      default:
          echo 'other';               
      } 
   ?>
</p>
   <p>課題3-2</p>
<p>
   <?php 
   switch($case) {
      case $case === true:
          echo 'bool';
          break;
      case $case === 1:
          echo 'int';
          break;
      case $case === '1':
          echo 'string';
          break;  
      default:
          echo 'other';               
    } 
   ?>
</p>
</body>
</html>