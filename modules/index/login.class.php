<?php
class login extends main{
    function init(){
        //
        $this->smarty->display("index/login.html");
    }
    function check(){
        $uname=sql($_POST["uname"]);
        $upass=md5($_POST["upass"]);
        $db=new db("user");

        $result=$db->where("uname='{$uname}' and upass='{$upass}'")->select();

        if(count($result)>0){
           $index=md5("uekblog");
           $_SESSION[$index]="yes";
           $_SESSION["uname"]=$result[0]["uname"];
           $_SESSION["uid"]=$result[0]["uid"];
           $_SESSION["level"]=$result[0]["level"];
           $this->smarty->assign("errorInfo","登陆成功");
           $url=isset($_SESSION["nearurl"])?$_SESSION["nearurl"]:"index.php";
           $this->smarty->assign("uppage",$url);
           $this->smarty->display("index/success.html");
        }else{
            $this->smarty->assign("errorInfo","登陆失败");
            $url=isset($_SESSION["nearurl"])?$_SESSION["nearurl"]:"index.php";
            $this->smarty->assign("uppage",$url);
            $this->smarty->display("index/error.html");
        }

    }

    function logout(){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
        $this->smarty->assign("errorInfo","退出成功");
        $this->smarty->assign("uppage","index.php");
        $this->smarty->display("index/success.html");

    }
}