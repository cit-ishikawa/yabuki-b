<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>アンケート</title>
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


date_default_timezone_set('Asia/Tokyo');
$i = date("i");

$i = ceil($i / 5)* 5; 
if ($i >= 60) {
  $i = "59";
}

$H = date("Y-m-d");
$J = date("H:$i:00");


//カウント1
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


//カウント2
$sql = 'SELECT * FROM count WHERE date= :date AND time= :time';
$prepare = $db->prepare($sql);
$prepare->bindValue(':date', $H);
$prepare->bindValue(':time', $J);
$prepare->execute();

if ($row = $prepare->fetch()) {
if (isset($_POST['A2'])){
$A2 = $_POST['A2'];
$sql = 'UPDATE count SET A2 = A2 + 1 WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':A2', $A2, PDO::PARAM_STR);
$stmt->execute();
}

}else{
if (isset($_POST['A2'])){
$A2 = $_POST['A2'];
$sql = 'INSERT INTO count (date,time,A2) VALUES (:date,:time,:A2)';
$stmt = $db->prepare($sql);
$params = array(':date' => $H, ':time' => $J, ':A2' => +1);
$stmt->execute($params);
}
}


//カウント3
$sql = 'SELECT * FROM count WHERE date= :date AND time= :time';
$prepare = $db->prepare($sql);
$prepare->bindValue(':date', $H);
$prepare->bindValue(':time', $J);
$prepare->execute();

if ($row = $prepare->fetch()) {
if (isset($_POST['A3'])){
$A3 = $_POST['A3'];
$sql = 'UPDATE count SET A3 = A3 + 1 WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':A3', $A3, PDO::PARAM_STR);
$stmt->execute();
}

}else{
if (isset($_POST['A3'])){
$A3 = $_POST['A3'];
$sql = 'INSERT INTO count (date,time,A3) VALUES (:date,:time,:A3)';
$stmt = $db->prepare($sql);
$params = array(':date' => $H, ':time' => $J, ':A3' => +1);
$stmt->execute($params);
}
} 


//カウント4
$sql = 'SELECT * FROM count WHERE date= :date AND time= :time';
$prepare = $db->prepare($sql);
$prepare->bindValue(':date', $H);
$prepare->bindValue(':time', $J);
$prepare->execute();

if ($row = $prepare->fetch()) {
if (isset($_POST['A4'])){
$A4 = $_POST['A4'];
$sql = 'UPDATE count SET A4 = A4 + 1 WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':A4', $A4, PDO::PARAM_STR);
$stmt->execute();
}

}else{
if (isset($_POST['A4'])){
$A4 = $_POST['A4'];
$sql = 'INSERT INTO count (date,time,A4) VALUES (:date,:time,:A4)';
$stmt = $db->prepare($sql);
$params = array(':date' => $H, ':time' => $J, ':A4' => +1);
$stmt->execute($params);
}
} 


//カウント5
$sql = 'SELECT * FROM count WHERE date= :date AND time= :time';
$prepare = $db->prepare($sql);
$prepare->bindValue(':date', $H);
$prepare->bindValue(':time', $J);
$prepare->execute();

if ($row = $prepare->fetch()) {
if (isset($_POST['A5'])){
$A5 = $_POST['A5'];
$sql = 'UPDATE count SET A5 = A5 + 1 WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':A5', $A5, PDO::PARAM_STR);
$stmt->execute();
}

}else{
if (isset($_POST['A5'])){
$A5 = $_POST['A5'];
$sql = 'INSERT INTO count (date,time,A5) VALUES (:date,:time,:A5)';
$stmt = $db->prepare($sql);
$params = array(':date' => $H, ':time' => $J, ':A5' => +1);
$stmt->execute($params);
}
} 


//結果の確認
echo '<h2><a href="count.php">アンケート結果を表示</a></h2>';
?>

 </div>
 </div>
 </body>
</html>