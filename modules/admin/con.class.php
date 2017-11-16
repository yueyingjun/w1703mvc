<?php

class con extends main{
    function showCon(){
/*
 *   数据库
 *
 * */

        $tiaojian=@$_GET["state"];

        $state="";
         if($tiaojian) {
             $state="and state=".$tiaojian;
         }

         $attr=@$_GET["attr"];
         $attrstr="";
         if($attr){
             $attrstr="and cquanxian=".$attr;
         }

        $db=new db();

        $result=$db->select("select * from con");

        $nums=count($result);

        include LIBS_PATH."/pages.class.php";

        $pageObj=new pages();
        $pageObj->total=$nums;
        $str=$pageObj->show();

        $this->smarty->assign("pages",$str);


        $result=$db->select("select con.*,user.uname,category.cname from con,user,category where con.uid=user.uid and con.catid=category.cid  ".$state." ".$attrstr."  limit ".$pageObj->limit);



        $result1=$db->select("select * from position");




        foreach ($result as $k=>$v){
            $arr=explode(",",$v["pid"]);
            $str="";
            foreach ($result1 as $v1){

                if(in_array($v1["pid"],$arr)){
                     $str.=$v1["pname"]." ";
                }
            }
            $result[$k]["pname"]=$str;
        }



        $this->smarty->assign("data",$result);

       $this->smarty->display("admin/showCon.html");
    }

    /*显示具体的内容*/
    function showConCon(){
        $cid=$_GET["cid"];
        $db=new db("con");
        $result=$db->where("cid=".$cid)->find();

        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/showConCon.html");
    }

    /*
     * ajax 处理 cquanxian
     */

    function ajax(){
        $cquanxian=$_POST["cquanxian"];
        $cid=$_POST["cid"];
        $db=new db("con");

        if($db->where("cid=".$cid)->update("cquanxian=".$cquanxian)){
            echo "ok";
        }

    }

    function ajax1(){
        $state=$_POST["state"];
        $cid=$_POST["cid"];
        $db=new db("con");

        if($db->where("cid=".$cid)->update("state=".$state)){
            echo "ok";
        }
    }
}
