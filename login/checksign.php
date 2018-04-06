<?php
//接受获取信息
$user=$_POST["user"];
//md5()用来对某个字符串进行加密
$pass=md5($_POST["pass"]);
//连接数据库
$db=new mysqli("localHost","root","","bbs");
//查询
$db->query("set names utf8");
//插入数据
$sql="INSERT INTO `users` (`user`, `pass`) VALUES ('{$user}','{$pass}')";
$db->query($sql);
//对查询结果进行判断
if($db->affected_rows===1){
    $msg="注册成功";
    $href="login.php";
}
else{
    $msg="注册失败";
    $href="sign.php";
}
//引入
include "message.php";