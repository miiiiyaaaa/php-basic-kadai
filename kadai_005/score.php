<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset ="UTF-8">
    <title>PHP基礎編課題005</title>
</head>

<body>
    <?php
    //変数に値を代入する
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    //合計点の表示
    $all_score = $score1 + $score2 + $score3 + $score4 + $score5
        + $score6 + $score7 + $score8 + $score9 + $score10;
    echo $all_score;
    //改行
    echo '<br>';

    //平均
    echo $all_score / 10;

