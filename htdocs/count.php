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
<table width="50%"border="1" rules="none" bordercolor="#000000">
<h1>現在の学食の混雑状況</h1>

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

//検索実行
$sql = 'SELECT * FROM count WHERE id = 1';
$stmt = $db -> query($sql);
foreach ($stmt as $row);

$data = array(
        array("１", $row['A1']),
        array("２", $row['A1']),
        array("３", $row['A1']),
        array("４", $row['A1']),
        array("５", $row['A1'])    );

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