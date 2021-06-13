<?php

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

// 申込時間取得
$date = date("Y/m/d H:i:s");


// ファイルを読み込む
$file = fopen("data.csv","a");
// ファイルに書き込む
fwrite($file,$date.",".$name.",".$email.",".$q1.",".$q2.",".$q3."\n");
// ファイルを閉じる
fclose($file);

// read.phpにリダイレクト
// header("Location: read.php");
// exit();




?>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>記録ありがとうございました。</h1>
<h2>採点一覧を確認しよう！</h2>

<ul>
    <li><a href="answer.php">戻る</a></li>
    <li><a href="result.php">採点一覧を見る</a></li>
</ul>