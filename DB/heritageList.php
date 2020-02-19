<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
<p>課題１</p>
<?php
$pdo = new PDO('mysql:host=localhost:8889;dbname=kadai;cahrset=utd-8',
'root',
'root',
);
$stmt = $pdo->query('SELECT country.`name` as countryName , area, heritage.`name` as heritageName from `heritage` 
inner join `country` ON country.`id` =`heritage`.`country_id`');
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($records);
echo '</pre>';
?>

<p>課題２</p>
<?php
if (isset($_GET['heritageId'])){
    $stmt = $pdo->prepare('SELECT * from heritage inner join country ON country.id = heritage.country_id where heritage.id = :id');
    $stmt->bindValue(':id', $_GET['heritageId']);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($records);
    echo '</pre>';
}
?>
<p>課題３</p>
<table border="1">
<?php
$stmt = $pdo->query('SELECT country.`name` as countryName , area, heritage.`name` as heritageName from `heritage` 
inner join `country` ON country.`id` =`heritage`.`country_id`');
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo("<tr>");
echo("<th>世界遺産名</th>");
echo("<th>国</th>");
echo("<th>地域</th>");
echo("</tr>");

echo("<tr>");
    foreach($records as $key => $value){
        echo("<tr>");
        echo "<td>" . $value['heritageName'] . "</td>";   
        echo "<td>" . $value['countryName'] . "</td>";
        echo "<td>" . $value['area'] . "</td>";
        echo("</tr>");
    }
echo("</tr>");
?>
</table>
</body>
</html>