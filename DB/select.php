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
<p>select name, area from country where area = 'ヨーロッパ';</p>
<p>2</p>
<p>select name, area from country where area != 'ヨーロッパ';</p>
<p>3</p>
<p>select name, lang from country where lang = '英語';</p>
<p>4</p>
<p>select name, area, lang from country where area = 'ヨーロッパ' and lang = '英語';</p>
<p>5</p>
<p>select * from country where area = 'ヨーロッパ' or number < 40;</p>
<p>課題２</p>
<p>1</p>
<p>select name from country where name like 'イ%';</p>
<p>2</p>
<p>select name from country where name like '%ス';</p>
<p>3</p>
<p>select * from `heritage` where `country_id` in (1, 3);</p>
<p>4</p>
<p>select * from `heritage` where `country_id` not in (1, 3);</p>
<p>5</p>
<p>select * from `heritage` where type = '文化' order by `country_id` asc;</p>
<p>6</p>
<p>select * from `heritage` order by `country_id` asc, id desc;</p>
</body>
</html>