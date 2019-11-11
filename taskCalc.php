<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo('回答: (1 + 3)×5 = ' . (1+3)*5 . 'です。'); ?></p>
    <p><?php echo('回答: 22÷3 = ' . round(22/3,3). 'です。'); ?></p>
    <p><?php echo('回答: 22÷3 = ' . (ceil(22/3)). 'です。'); ?></p>
    <p><?php echo('回答: 22÷3 = ' . (floor(22/3)). 'です。'); ?></p>
    <p><?php echo('回答:'  .(6/36) . 'です。'); ?></p>
    <?php echo('<p>回答例: 1 + 1 = ' . (1 + 1) . 'です。</p>'); ?>
</body>
</html>