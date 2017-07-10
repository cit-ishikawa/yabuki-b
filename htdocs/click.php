<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>アンケート</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="decorate.css">

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


date_default_timezone_set('Asia/Tokyo');
$i = date("i");

$i = ceil($i / 5)* 5; 
if ($i >= 60) {
  $i = "59";
}

$H = date("Y-m-d");
$J = date("H:$i:00");

$sql = 'SELECT * FROM count WHERE date= :date AND time= :time';
$prepare = $db->prepare($sql);
$prepare->bindValue(':date', $H);
$prepare->bindValue(':time', $J);
$prepare->execute();

if ($row = $prepare->fetch()) {
if (isset($_POST['A1'])){
$A1 = $_POST['A1'];
$sql = 'UPDATE count SET A1 = A1 + 1 WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':A1', $A1, PDO::PARAM_STR);
$stmt->execute();
}

}else{
if (isset($_POST['A1'])){
$A1 = $_POST['A1'];
$sql = 'INSERT INTO count (date,time,A1) VALUES (:date,:time,:A1)';
$stmt = $db->prepare($sql);
$params = array(':date' => $H, ':time' => $J, ':A1' => +1);
$stmt->execute($params);
}
}


//結果の確認
echo '<a href="count.php">アンケート結果を表示</a>';
?>

</head>
<body>
</body>
</html>