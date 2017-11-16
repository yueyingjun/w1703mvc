<?php
class message extends main{
    function add(){
        $index=md5("uekblog");
        if(!isset($_SESSION[$index])){
            echo "nologin";
        }else{

            $uid1=$_POST["uid1"];
            $uid2=$_POST["uid2"];
            $conid=$_POST["conid"];
            $mcon=$_POST["mcon"];
            $state=$_POST["state"];

            $db=new db("message");
            if($db->insert(array(
                "uid1"=>$uid1,
                "uid2"=>$uid2,
                "conid"=>$conid,
                "mcon"=>"'{$mcon}'",
                "state"=>$state
            ))){


                $this->smarty->assign("uname",$_SESSION["uname"]);
                $this->smarty->assign("mcon",$mcon);
                $this->smarty->assign("uid",$uid1);
                $this->smarty->assign("idnum",$db->db->insert_id);
                $this->smarty->display("index/messageTemplate.html");
            }


        }

    }
}