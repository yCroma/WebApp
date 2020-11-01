<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>リザルト</title>
</head>
<body>
    <header>
        <h1>リザルト画面</h1>
    </header>
    <main>
        <?php
            // POSTからスタートのDateTimeオブジェクトを取得
            $start = $_POST['start'] ?? null;
            print_r($start);
            echo("</br>");
            //echo($start->format('H時i分s秒'));
            echo($start->date);
            echo("</br>");

            // test
            $test = new DateTime('now');
            $test_obj = $test->format('Y-m-d H:m:s.u');
            echo($test_obj);
            echo("</br>");
            $test_datetime = new DateTime($test_obj);
            print_r($test_datetime);
            echo("</br>");

            // ページ生成時に終了時刻をDateTimeオブジェクトを取得
            $timezone = new DateTimeZone('Asia/Tokyo');
            $end = new DateTime('now', $timezone);
            print_r($end);
            echo("</br>");
            echo($end->format('H時i分s秒'));
            echo("</br>");

            // 差の絶対値の時間を取得
            $time = $end->diff($test_datetime);
            print_r($time);
            echo("</br>");
        ?>
        <form action="./index.php" method="POST">
        <input type="submit" value="もう一回遊ぶ！！">
        </form>
    </main>
</body>
</html>
