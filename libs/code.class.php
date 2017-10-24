<?php
class code
{
    public $width = 160;
    public $height = 50;
    public $zhongzi = "123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ";
    public $codelen = 4;
    public $codesize = array("min" => 20, "max" => 40);
    public $codeangle = array("min" => -15, "max" => 15);
    public $lineNum = array("min" => 3, "max" => 10);
    public $pixNum = array("min" => 50, "max" => 100);
    public $type = "png";
    public $code = "";
    public $codeUrl = "";

    //设置画布
    private function setCanvas()
    {
        $this->image = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->image, 0, 0, $this->setColor());
    }

    //设置随机的颜色
    private function setColor($type = "back")
    {
        $r = $type == "back" ? mt_rand(1, 120) : mt_rand(130, 254);
        $g = $type == "back" ? mt_rand(1, 120) : mt_rand(130, 254);
        $b = $type == "back" ? mt_rand(1, 120) : mt_rand(130, 254);
        return imagecolorallocate($this->image, $r, $g, $b);
    }

    //设置内容
    private function setCon()
    {
        $this->setText();

        for ($i = 0; $i < $this->codelen; $i++) {
            $fontsize = mt_rand($this->codesize["min"], $this->codesize["max"]);
            $fontangle = mt_rand($this->codeangle["min"], $this->codeangle["max"]);
            $space = intval($this->width / $this->codelen);

            $arr = imagettfbbox($fontsize, $fontangle, $this->codeUrl, $this->code[$i]);



            imagettftext($this->image, $fontsize, $fontangle, $i * $space + mt_rand(-5, 5), $arr[1] - $arr[5] + mt_rand(min(0,$this->height - ($arr[1] - $arr[5])), $this->height - ($arr[1] - $arr[5])), $this->setColor("a"), $this->codeUrl, $this->code[$i]);
        }

    }

    //设置文字
    private function setText()
    {
        $str = "";
        for ($i = 0; $i < $this->codelen; $i++) {
            $str .= $this->zhongzi[mt_rand(0, strlen($this->zhongzi) - 1)];
        }

        $this->code = $str;


    }

    // 设置线条
    private function setLine()
    {
        $lineNum = mt_rand($this->lineNum["min"], $this->lineNum["max"]);
        for ($i = 0; $i < $lineNum; $i++) {
            $startx = mt_rand(0, intval($this->width / 3));
            $endx = mt_rand(intval($this->width / 3 * 2), $this->width);
            $starty = mt_rand(0, $this->height);
            $endy = mt_rand(0, $this->height);
            imageline($this->image, $startx, $starty, $endx, $endy, $this->setColor("a"));
        }
    }

    //设置点
    private function setPix()
    {
        $pixNum = mt_rand($this->pixNum["min"], $this->pixNum["max"]);
        for ($i = 0; $i < $pixNum; $i++) {
            $x = mt_rand(0, $this->width);
            $y = mt_rand(0, $this->height);
            imagesetpixel($this->image, $x, $y, $this->setColor("a"));
        }
    }


    public function out()
    {
        header("content-type:image/" . $this->type);
        //1.
        $this->setCanvas();

        //2.
        $this->setCon();
        //3

                $this->setLine();
                //4
                $this->setPix();
                $_SESSION["imagecode"]=strtolower($this->code);

        $type = "image" . $this->type;
        $type($this->image);
        imagedestroy($this->image);


    }
}
