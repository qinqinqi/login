<?php
//引入头信息
header("Content-Type:image/png");
//GD函数库   关于图像操作的函数
//在php创建图片绘制(创建画板)
$width=180;
$height=40;
$image=imagecreatetruecolor($width,$height);
//创建颜色   随机背景颜色mt_rand() l亮色  d暗色
function getColor($type="l")
{
    global $image;
    if($type==="l") {
        return imagecolorallocate($image, mt_rand(120, 255), mt_rand(120, 255), mt_rand(120, 255));
    }
    else{
        return imagecolorallocate($image, mt_rand(0,120), mt_rand(0,120), mt_rand(0,120));
    }
}
//填充颜色
imagefill($image,0,0,getColor());
//加线
for($i=0;$i<10;$i++){
    imageline($image,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),getColor());
}
//添加点
for($i=0;$i<100;$i++){
    imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),getColor());
}
//添加字母
$str="qwertyuipasdfghjkzxcvbnm23456789QWERTYUPASDFGHJKLZXCVBNM";
session_start();
$code="";
//判断字符串的长度
$len=strlen($str);
for($i=0;$i<4;$i++){
//    获取位置
    $pos=mt_rand(0,$len-1);
//    获取字母
    $charcter=substr($str,$pos,1);
    $code.=strtoupper($charcter);
//    绘制文字
    imagettftext($image,mt_rand(20,30),mt_rand(-15,15),$i*50,mt_rand(30,35),getColor("d"),"font.TTF",$charcter);
}
$_SESSION["code"]=$code;

//用当前的图片资源生成一张图片
imagepng($image);
//释放资源
imagedestroy($image);
