<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <?php
    // 昇順にソートする
        $numbers = [4, 10, 15, 18, 23];
        sort($numbers);
        echo "昇順にソートする<br>";
        foreach ($numbers as $number) {
        echo $number . "<br>";
    }

    // 降順にソートする
    $numbers = [4, 10, 15, 18, 23];
    rsort($numbers);
    echo "降順にソートする<br>";
    foreach ($numbers as $number) {
    echo $number . "<br>";
    }
    ?>
</body>

</html>