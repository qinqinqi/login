<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
</head>
<body>
<?php
//保存在PHP的$_SESSION中
session_start();
if(isset($_SESSION["user"])):?>
<div>欢迎<span><?php echo $_SESSION["user"];?></span>登录</div>
    <a href="login.php">退出</a>
<?php else:?>
<div>尚未登录，请<a href="login.php">登录</a></div>

<?php endif;?>
<h3>XXX论坛</h3>
</body>
</html>