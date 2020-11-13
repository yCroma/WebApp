<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Stop</title>
</head>
<body>
    <header>
        <h1>時間になったと思ったらストップボタンを押してね！！</h1>
    </header>
    <main>
        <form action="./result.php" method="POST">
<?php
// 計測開始時間の作成
$timezone = new DateTimeZone('Asia/Tokyo');
$start = new DateTime('now', $timezone);
$enc_start = serialize($start);
file_put_contents('temp', $enc_start);

// 予想計測終了時間の作成
$set_time = $_POST['set_time'] ?? null;
echo $set_time;
echo("</br>");
$answer = $start->add(new DateInterval('PT' . $set_time . 'S'));
print_r($answer);
$enc_answer = serialize($answer);
file_put_contents('ans', $enc_answer);
//$date = new DateTime('now');
//$date->add(new DateInterval('PT10S'));
echo("</br>");
?>
        <input type="submit" value="ストップ！！">
        </form>
    </main>
</body>
</html>
