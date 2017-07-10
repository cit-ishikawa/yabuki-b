<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>新規会員登録</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="decorate.css">
 </head>

 <body>
 <div class="container">
 <div class="content">

<?php
// データベース設定（サーバで公開するとき）
$dbServer = '127.0.0.1';
$dbUser = $_SERVER['MYSQL_USER'];
$dbPass = $_SERVER['MYSQL_PASSWORD'];
$dbName = $_SERVER['MYSQL_DB'];

# MySQL用のDSN文字列です。
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);


//送信データの取得
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];


//検索実行
$sql = 'INSERT INTO app (name, mail, pass) VALUES (:name, :mail, :pass)';
$prepare = $db->prepare($sql);
$prepare->bindValue(':name', $name, PDO::PARAM_STR);
$prepare->bindValue(':mail', $mail, PDO::PARAM_STR);
$prepare->bindValue(':pass', $pass, PDO::PARAM_STR);
$prepare->execute();


//結果の確認
echo '<div class="back"><a href="login.html"><h2>会員登録完了</h2></a></div>';
?>

 </div>
 </div>
 </body>
</html>
