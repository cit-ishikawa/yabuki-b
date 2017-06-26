<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>ログイン画面</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="decorate.css">
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script>
$(function() {
$("#partsM").load("menu.html");
});
  </script>
 </head>

 <body>
 <div id="partsM"></div>
 <div class="container">
 <div class="content">
 <h1>ログイン画面</h1>
  <form method="post" action="login_check.php">
   <p class="log">学籍番号を入力してください。</p>
  <input type="text" name="mail" maxlength="7">
   <p class="log">パスワードを入力してください。</p>
  <input type="password" name="pass" maxlength="10"><br><br>
  <input type="submit" value="ログイン"><br><br>
  <input type="reset" value="リセット"><br><br>
  <input type="button" value="新規会員登録" onclick="location.href='member.html'">
  </form>
 </div>
 </div>
 </body>
</html>