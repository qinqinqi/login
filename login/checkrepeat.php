<?php
$user=$_GET["user"];
include "db.php";
$sql="SELECT * FROM `users` WHERE `user`='$user'";
$r=$db->query($sql);
$r=$r->fetch_array(MYSQL_ASSOC);
if(isset($r)){
    echo "false";
}
else{
    echo "true";
}