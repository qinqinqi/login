<?php
session_start();
unset($_SESSION["user"]);
if(isset($_SESSION["user"])){
    $msg="退出成功";
    $href="index.php";
}
else{
    $msg="退出失败";
    $href="index.php";
}
include "message.php";

