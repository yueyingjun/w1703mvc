<?php
//后台语言  php  验证  数据  面向对象
header("content-type:image/png");
$img=imagecreatetruecolor(150,50);
$color=imagecolorallocate($img,255,0,0);
$fontcolor=imagecolorallocate($img,0,255,0);
$zhongzi="123456789ABCDEFGabcdefg";
for($i=0;$i<4;$i++) {
    imagefill($img,0,0, $color);
    $text=$zhongzi[mt_rand(0,strlen($zhongzi)-1)];
    $fontsize=mt_rand(20,30);
    $angle=mt_rand(-10,10);
    $arr = imagettfbbox($fontsize, $angle, "demo.ttf",$text);

    imagettftext($img, $fontsize, $angle, $i*$fontsize, $arr[1] - $arr[5], $fontcolor, "demo.ttf", $text);
}

for($i=0;$i<20;$i++){
    $colors=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    imageline ($img , mt_rand(0,100), mt_rand(0,200) , mt_rand(100,200) , mt_rand(0,200), $colors );
}

for($i=0;$i<10000;$i++){
    $colors=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    imagesetpixel ($img , mt_rand(0,200) , mt_rand(0,200) , $colors );
}

imagepng($img);


