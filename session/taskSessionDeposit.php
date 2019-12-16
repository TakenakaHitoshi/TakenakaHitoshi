<?php
// ここに回答を追記する
session_start();
if (isset($_SESSION["money"])){
    $sum = $_SESSION["money"];
}   else{
    $sum = 0;
}
//$sum = $_SESSION["money"] ?? 0;
if (isset($_POST["save"])){
    $sum = $sum + $_POST["money"];
}   else if (isset($_POST["clear"])){
    $sum = 0;
    }
$_SESSION["money"]= $sum
?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionDeposit</title>
    </head>
    <body>
        <form action="taskSessionDeposit.php" method="post">
            <div class="content">
                <div>現在の貯金額は、<span style="color:blue;"><?php echo $sum; ?>円</span>です。</div>
                <input type="text" name="money" class="money" />円
                <div class="btnArea">
                    <input type="submit" name="save" value="貯金" />
                    <input type="submit" name="clear" value="クリア" />
                </div>
            </div>
        </form>
    </body>
</html>