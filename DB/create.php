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
<p>create table country (</p>
<p>id int NOT NULL AUTO_INCREMENT PRIMARY KEY,</p>
<p>name VARCHAR(20) NOT NULL,</p>
<p>area VARCHAR(10),</p>
<p>lang varchar(10) DEFAULT '英語',</p>
<p>number int NOT NULL DEFAULT 0);</p>

<p>課題２</p>
<p>create table heritage (</p>
<p>id int NOT NULL AUTO_INCREMENT PRIMARY KEY,</p>
<p>name VARCHAR(20) NOT NULL,</p>
<p>country_id int NOT NULL,</p>
<p>type varchar(2) NOT NULL);</p>

</body>
</html>