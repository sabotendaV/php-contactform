<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1; host=localhost","root","");

    $sql = "INSERT INTO contactform (name, mail, age, comment) VALUES(?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(1,$_POST['userName']);
    $stmt->bindValue(2,$_POST['mail']);
    $stmt->bindValue(3,$_POST['age']);
    $stmt->bindValue(4,$_POST['comment']);

    $stmt->execute();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1 class="title">お問い合わせが完了しました</h1>

    <div class="content">
        <div>お問い合わせありがとうございました。</div>
        <div>３営業日以内に担当者よりご連絡差し上げます。</div>
    </div>

</body>
</html>