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
<p>1</p>
<p>パターン１</p>
<p>sselect country.`name`, area, heritage.`name` from `heritage` 
    inner join `country` ON country.`id` =`heritage`.`country_id`;</p>
<p>パターン２</p>
<p>select country.`name` as countryName , area, heritage.`name` as heritageName from `heritage` 
    inner join `country` ON country.`id` =`heritage`.`country_id`;</p>

<p>2</p>
<p>select country.`name` as countryName , area, heritage.`name` as heritageName from `heritage` 
    inner join `country` ON country.`id` =`heritage`.`country_id` where area = 'ヨーロッパ';</p>

<p>3</p>
<p>select country.`name` as countryName ,`number`, heritage.`name` as heritageName from `heritage` 
    inner join `country` ON country.`id` =`heritage`.`country_id`where number >= 40;</p>
<p>4</p>
<p>select country.`name` as countryName , heritage.`name` as heritageName from `heritage` 
    inner join `country` ON country.`id` =`heritage`.`country_id` where type = '自然';</p>
