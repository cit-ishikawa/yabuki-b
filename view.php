<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>test</title>
</head>
<body>
<?php
 //データベース接続設定
$dbServer = '127.0.0.1';
$dbName = 'sample1';
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";
$dbUser = 'test';
$dbPass = 'pass';

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);

//検索実行
$sql = 'SELECT * FROM members';
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);


?>
</body>
</html>