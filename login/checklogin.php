<?php
session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
$code=$_POST["code"];
if(strtoupper($code)!=$_SESSION["code"]){
    $msg="验证码错误";
    $href="login.php";
    include "message.php";
    exit();
}

//连接数据库
$db=new mysqli("localHost","root","","bbs");
//查询
$db->query("set names utf8");
$sql="SELECT * FROM `users` WHERE `user`='{$user}'";
$r=$db->query($sql);
$arr=$r->fetch_array(MYSQL_ASSOC);
if(isset($arr)){
    if($arr["pass"]=md5($pass)) {
        $msg = "登录成功";
        $href = "index.php";
        $_SESSION['user']=$user;
    }
}else{
    $msg="账号不存在";
    $href="login.php";
}
include "message.php";