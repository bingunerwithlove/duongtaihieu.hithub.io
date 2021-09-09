<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'menu.php'; ?>
    <form action="customer_output.php" method="post">
     お名前<input type ="text" name="name"><br>
     ご住所：<input type ="text" name="address"><br>
     ログイン名:<input type ="text" name="login"><br>
     パスワード：<input type ="password" name="password"><br>
</form>
</body>

</html>
