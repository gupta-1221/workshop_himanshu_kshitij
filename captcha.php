<?php
session_start();
$n=rand(11111,99999);
//echo $n;
$x=100;
$y=30;
$f=14;
$_SESSION['cap']=$n;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,30,5,$n,$wh);
imagejpeg($img,null,30);

?>



