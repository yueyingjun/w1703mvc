<?php
class center extends main{
    function init(){
        $index=md5("uekblog");
        if(@$_SESSION[$index]!="yes"){
            $this->smarty->assign("errorInfo","请登录");
            $this->smarty->assign("uppage","index.php?m=index&f=login");
            $this->smarty->display("index/error.html");
            exit;
        }
        $this->smarty->assign("header",$this->header);
        $this->smarty->assign("footer",$this->footer);

        $this->smarty->assign("islogin",isset($_SESSION[$index])?$_SESSION[$index]:"no");
        $this->smarty->assign("uname",$_SESSION["uname"]);
        $this->smarty->display("index/center.html");
    }
}