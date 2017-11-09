<?php
class reg extends main{
    function init(){
        $this->smarty->display("index/reg.html");
    }

    function check(){
        //1. 验证码
         $imgCode=strtolower($_POST["imgCode"]);
         if($_SESSION["indeximagecode"]!=$imgCode){

             $this->smarty->assign("errorInfo","验证码错误");
             $this->smarty->assign("uppage","index.php?m=index&f=reg");

             $this->smarty->display("index/error.html");

             exit;
         }
        //2. 后台数据的验证(用户名查重)

        $uname=$_POST["uname"];
         if(!preg_match("/^[\x{4e00}-\x{9fa5} a-z A-Z][\w \x{4e00}-\x{9fa5}]{5,9}$/u",$uname)){
             $this->smarty->assign("errorInfo","用户名格式错误");
             $this->smarty->assign("uppage","index.php?m=index&f=reg");

             $this->smarty->display("index/error.html");
             exit;
         }

         if(!(preg_match("/^\w{6,}$/",$_POST["upass1"])&&preg_match("/^\w{6,}$/",$_POST["upass2"])&&$_POST["upass1"]==$_POST["upass2"])){

             $this->smarty->assign("errorInfo","密码有误");
             $this->smarty->assign("uppage","index.php?m=index&f=reg");

             $this->smarty->display("index/error.html");
             exit;
         }

         if(!preg_match("/^(134|135|136|137)\d{8}$/",$_POST["phone"])){
             $this->smarty->assign("errorInfo","手机号码有误");
             $this->smarty->assign("uppage","index.php?m=index&f=reg");
             $this->smarty->display("index/error.html");
             exit;
         }

        //4. 加入到数据库

        $uname=sql($_POST["uname"]);
        $upass=md5($_POST["upass1"]);
        $phone=sql($_POST["phone"]);
          $db=new db("user");
         if($db->insert(array("uname"=>"'{$uname}'","upass"=>"'{$upass}'","phone"=>"'{$phone}'","level"=>1))){

             $this->smarty->assign("errorInfo","注册成功");
             $this->smarty->assign("uppage","index.php?m=index&f=login");
             $this->smarty->display("index/success.html");

         }else{
             $this->smarty->assign("errorInfo","注册有误");
             $this->smarty->assign("uppage","index.php?m=index&f=reg");
             $this->smarty->display("index/error.html");
             exit;
         }

    }

    function code(){
        include LIBS_PATH."/code.class.php";
        $codeobj=new code();
        $codeobj->codeUrl="demo.ttf";
        $codeobj->regtype="index";
        $codeobj->zhongzi="ab";
        $codeobj->codelen=2;
        $codeobj->out();
    }
    function select(){
        $db=new db("user");
        $uname=sql($_POST["uname"]);

        $result=$db->where("uname='{$uname}'")->select();

        if(count($result)){
            echo "false";
        }else{
            echo "true";
        }

    }
}