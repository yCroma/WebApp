<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Stop</title>
</head>
<body>
    <header>
        <h1>Stopボタンを押してね</h1>
    </header>
    <main>
        <form action="./result.php" method="POST">
        <?php
            $timezone = new DateTimeZone('Asia/Tokyo');
            $end = new DateTime('now', $timezone);
        ?>
        <input type="hidden" name="end" value='<?php print_r($end); ?>'>
        <input type="submit" value="stop!!">
        </form>
    </main>
    <?php
        $start = $_POST['start'] ?? null;
        echo($start);
        //echo($start->format('H時i分s秒'));
    ?>
</body>
</html>
