<?php
class show extends main{
    function showCon(){
        /*
         *
         * */
        $this->smarty->assign("header",$this->header);
        $this->smarty->assign("footer",$this->footer);
        $this->smarty->assign("comment",$this->comment);
        $index=md5("uekblog");
        $this->smarty->assign("islogin",isset($_SESSION[$index])?$_SESSION[$index]:"no");
       //登陆的信息
         $this->smarty->assign("uname",@$_SESSION["uname"]);
        $cid=$_GET["cid"];
        $db=new db("con");
        $result=$db->where("cid=".$cid)->find();
        $this->smarty->assign("data",$result);
        //作者的信息
        $this->smarty->assign("author",$_GET["uname"]);
        $this->smarty->assign("uid1",@$_SESSION["uid"]);

        //获取点击的数量
         $db->selectTable("hits");
         $hits=$db->where("conid=".$cid)->find();
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("hits",$hits["hnum"]+1);

        $_SESSION["nearurl"]=SELF_URL;

        //获取关于关注的状态

         $uid1=isset($_SESSION["uid"])?$_SESSION["uid"]:0;
         $uid2=$result["uid"];

         $db->selectTable("guanzhu");

         $result=$db->where("uid1=".$uid1." and uid2=".$uid2)->select();

         $this->smarty->assign("flag",count($result));

         $guanzhunum=$db->where("uid2=".$uid2)->select();

         $this->smarty->assign("guanzhunum",count($guanzhunum));

        /*
         *  获取留言
         * */


        $pages=isset($_POST["pages"])?$_POST["pages"]+1:0;
        $num=3;
        $start=$pages*$num;

        $messages=$db->select("select message.*,user.uname from message,user where state=0 and conid=".$cid ." and user.uid=message.uid1 limit  ".$start." , ".$num);

        foreach ($messages as $k=>$v){
            $replays=$db->select("select message.*,user.uname from message,user where state={$v['mid']} and conid=".$cid ." and user.uid=message.uid1");
            if(!isset($messages[$k]["son"])){
                $messages[$k]["son"]=array();
            }
            foreach ($replays as $v){
                $messages[$k]["son"][]=$v;
            }
        }


        $this->smarty->assign("messages",$messages);
        $this->smarty->assign("pages",0);
        $this->smarty->display("index/showCon.html");
    }
    function pages(){
        $db=new db();
        $pages=($_GET["pages"]<0)?0:$_GET["pages"];
        $num=3;
        $start=$pages*$num;
        $cid=$_GET["cid"];

        $messages=$db->select("select message.*,user.uname from message,user where state=0 and conid=".$cid ." and user.uid=message.uid1 limit  ".$start." , ".$num);

        foreach ($messages as $k=>$v){
            $replays=$db->select("select message.*,user.uname from message,user where state={$v['mid']} and conid=".$cid ." and user.uid=message.uid1");
            if(!isset($messages[$k]["son"])){
                $messages[$k]["son"]=array();
            }
            foreach ($replays as $v){
                $messages[$k]["son"][]=$v;
            }
        }


        $this->smarty->assign("messages",$messages);
        $this->smarty->assign("pages",$pages);
        $this->smarty->assign("cid",$cid);
        $this->smarty->display("index/comment.html");
    }
    function hit(){
        $cid=$_POST["cid"];
        $db=new db("hits");
        $result=$db->where("conid=".$cid)->select();
        if(count($result)){
            if($db->where("conid=".$cid)->update("hnum=hnum+1")){
                echo "ok";
            }
        }else{
            if($db->insert(array(
                "conid"=>$cid,
                "hnum"=>1
            ))){
                echo "ok";
            }
        }


    }
}