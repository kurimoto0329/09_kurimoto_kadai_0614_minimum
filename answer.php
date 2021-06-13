<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>「カラオケ採点」記録</title>
</head>
<body>
    <h1>「カラオケ」記録</h1>
    <form method="post" action="write.php">
        <p>お名前：<input type="text" name="name" size="20"></p>  
        <p>メールアドレス：<input type="text" name="email" size="20"></p>
        <p>質問1 歌手：<input type="text" name="q1" size="20"></p>
        <p>質問2 曲名：<input type="text" name="q2" size="20"></p>
        <p>質問3 採点点数：<input type="text" name="q3" size="20"></p>
        <p><input type="submit" value="送信"></p>
    </form>

</body>
</html>