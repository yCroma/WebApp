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
            <input id="5" type="radio" name="set_time" value="5" checked>
            <label for="5">5秒にチャレンジ</label>
            <br>
            <input id="10" type="radio" name="set_time" value="10">
            <label for="10">10秒にチャレンジ</label>
            <br>
            <input id="30" type="radio" name="set_time" value="30">
            <label for="30">30秒にチャレンジ</label>
            <br>
            <input id="60" type="radio" name="set_time" value="60">
            <label for="60">60秒にチャレンジ</label>
            <br>
            <input type="submit" value="タイマースタート！！">
        </form>
    </main>
</body>
</html>
