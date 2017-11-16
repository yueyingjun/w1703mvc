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

        $uid=$_SESSION["uid"];

        $db=new db("guanzhu");
        $result=$db->select("select guanzhu.*,user.uname from guanzhu,user where guanzhu.uid1=".$uid." and guanzhu.uid2=user.uid");


        $fance=$db->select("select guanzhu.*,user.uname from guanzhu,user where guanzhu.uid2=".$uid." and guanzhu.uid1=user.uid");

        $this->smarty->assign("data",$result);
        $this->smarty->assign("fance",$fance);
        $this->smarty->display("index/center.html");
    }
}