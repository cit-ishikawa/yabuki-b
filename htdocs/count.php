<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>グラフ</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="decorate.css">
 </head>

 <body>
 <div class="container">
 <div class="content">
<h1>現在の学食の混雑状況</h1>
<table>

<?php
//エラー非表示
error_reporting(0);

// データベース設定（サーバで公開するとき）
$dbServer = '127.0.0.1';
$dbUser = $_SERVER['MYSQL_USER'];
$dbPass = $_SERVER['MYSQL_PASSWORD'];
$dbName = $_SERVER['MYSQL_DB'];

# MySQL用のDSN文字列です。
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);

//検索実行1
$sql = 'SELECT * FROM count WHERE id = id ORDER BY id DESC LIMIT 1';
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

//結果の出力
foreach ($result as $person) {
  echo $person['date'];
  echo ' ';
  echo $person['time'];
}


//検索実行2
$sql = 'SELECT * FROM count WHERE id = id ORDER BY id DESC LIMIT 1';
$stmt = $db -> query($sql);
foreach ($stmt as $row);

$data = array(
        array("鬼", $row['A1']),
        array("難", $row['A2']),
        array("普", $row['A3']),
        array("簡", $row['A4']),
        array("空", $row['A5'])    );

    for($i = 0 ; $i < count($data) ; $i++) {
        if(strlen($data[$i][0]) > $maxlen) {//文字数最大
            $maxlen = strlen($data[$i][0]);
        }
        if($data[$i][1] > $max) {//データ最大
            $max = $data[$i][1];
        }
    }
    for($i = 0 ; $i < count($data) ; $i++) {//グラフ作成
        print("<tr>");
        printf("<td width=\"%d\" align=\"right\">%s</td>", $maxlen * 10, $data[$i][0]);
        printf("<td><hr size=\"10\" color=\"#cc6633\" align=\"left\" width=\"%d%%\"></td>", $data[$i][1] / $max * 100);
        printf("<td width=\"%d\">%d</td>", strlen($max) * 10, $data[$i][1]);
        print("</tr>\n");
    }
    
?>

</table>
 </div>
 </div>
 </body>
</html>