<?php
// �ǡ����١�������ʥ����ФǸ�������Ȥ���
$dbServer = '127.0.0.1';
$dbUser = $_SERVER['MYSQL_USER'];
$dbPass = $_SERVER['MYSQL_PASSWORD'];
$dbName = $_SERVER['MYSQL_DB'];

# MySQL�Ѥ�DSNʸ����Ǥ���
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";

//�ǡ����١����ؤ���³
$db = new PDO($dsn, $dbUser, $dbPass);


//������ȣ�
if (isset($_POST['masu1'])){
$masu1 = $_POST['masu1'];
$sql = 'UPDATE count SET masu1 = masu1 + 1 WHERE kazu = "sum1"';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':masu1', $masu1, PDO::PARAM_STR);
$stmt->execute();


}elseif(isset($_POST['masu2'])){
$masu2 = $_POST['masu2'];
$sql = 'UPDATE count SET masu2 = masu2 + 1 WHERE kazu = "sum1"';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':masu2', $masu2, PDO::PARAM_STR);
$stmt->execute();


}elseif(isset($_POST['masu3'])){
$masu3 = $_POST['masu3'];
$sql = 'UPDATE count SET masu3 = masu3 + 1 WHERE kazu = "sum1"';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':masu3', $masu3, PDO::PARAM_STR);
$stmt->execute();


}elseif(isset($_POST['masu4'])){
$masu4 = $_POST['masu4'];
$sql = 'UPDATE count SET masu4 = masu4 + 1 WHERE kazu = "sum1"';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':masu4', $masu4, PDO::PARAM_STR);
$stmt->execute();


}elseif(isset($_POST['masu5'])){
$masu5 = $_POST['masu5'];
$sql = 'UPDATE count SET masu5 = masu5 + 1 WHERE kazu = "sum1"';
$stmt = $db -> prepare($sql);
$stmt->bindParam(':masu5', $masu5, PDO::PARAM_STR);
$stmt->execute(); 
}


//��̤γ�ǧ
echo '<a href="count.php">���󥱡��ȷ�̤�ɽ��</a>';
?>