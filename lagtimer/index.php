<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>LagTimer</title>
</head>
<body>
    <header>
        <h1>LagTimer</h1>
    </header>
    <main>
        <form action="./stop.php" method="POST">
            <?php
                $timezone = new DateTimeZone('Asia/Tokyo');
                $start = new DateTime("now", $timezone);
                // print_r($start);
                // echo $start->format('H時i分s秒');
            ?>
            <input type="hidden" name="start" value="<?php print_r($start); ?>">
            <input type="submit" value="タイマースタート！！">
        </form>
    </main>
</body>
</html>
