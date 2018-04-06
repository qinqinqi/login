<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页面</title>
    <link rel="stylesheet" href="../css/public.css">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="head_img"></div>
<form action="checklogin.php" method="post">
    <ul>
        <li>
            <p>账号：</p>
            <input type="text" placeholder="请输入账号" name="user">
        </li>
        <li>
            <p>密码：</p>
            <input type="password" placeholder="请输入密码" name="pass">
        </li>
        <li>
            <p>验证码：</p>
            <input type="password" placeholder="请输入验证码" name="code"    >
            <img src="code.php" alt="" width="80" height="40"onclick="this.src='code.php?t='+new Date().getTime()" class="code">
        </li>
        <div class="login"><input type="submit" value="登录"></div>
        <span>还没有账号,请<a href="sign.php">注册</a></span>
    </ul>
</form>
</body>
</html>