<?php
defined("COME") or exit("error");
class login extends main{
    function init()
    {

        $this->smarty->display("admin/login.html");
    }

    function check()
    {
        //1.  验证码
        $imagecode=strtolower($_POST["imagecode"]);
        if($_SESSION["imagecode"]!==$imagecode){
            echo "imagecode error!";
            exit;
        }

        /*
        //2.  手机验证
        $phonecode=$_POST["phonecode"];
        if($phonecode!==$_SESSION["phonecode"]){
            echo "phonecode error!";
            exit;
        }
        */
        //3.  用户名
        $aname=sql(P("aname"));
        //4. 密码
        $apass=md5(P("apass"));

        $dbobj=new db("admin");
        if(count($dbobj->where("aname='{$aname}' and apass='{$apass}'")->find())>0){
            $_SESSION["login"]="yes";
            echo "<script>location.href='index.php?m=admin&f=index'</script>";

        }else{
            echo "error";
        }


    }
    function sendCode(){
        //duapp.com  手机验证
        include LIBS_PATH."/Ucpaas.class.php";
        //初始化必填
        $options['accountsid']='1a6d42d9ac402348d9bbc508c8036fc7';
        $options['token']='df87ec2ea7a3dcfb989551d7c2b8645a';


//初始化 $options必填
        $ucpass = new Ucpaas($options);

//开发者账号信息查询默认为json或xml
//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "c4a7e9bde53443668cdf750b41529a11";
        $to = $_POST["phonecode"];
        $templateId = "60488";
        $zhongzi="1234567890abcdefg";
        $param="";
        for($i=0;$i<4;$i++){
            $param.=$zhongzi[mt_rand(0,strlen($zhongzi)-1)];
        }
        $_SESSION["phonecode"]=$param;
        echo $ucpass->templateSMS($appId,$to,$templateId,$param);
    }

    function imagecode(){
       include LIBS_PATH."/code.class.php";
       $obj=new code();
       $obj->width=120;
       $obj->height=40;
       $obj->codeUrl="./demo.ttf";
       $obj->lineNum=0;
       $obj->out();
    }
}



