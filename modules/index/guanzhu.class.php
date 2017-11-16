<?php
class guanzhu extends main{
    function add(){
        $index=md5("uekblog");
        if(isset($_SESSION[$index])){
           $uid1=$_POST["uid1"];
           $uid2=$_POST["uid2"];
           $db=new db("guanzhu");
           if($db->insert(array(
               "uid1"=>$uid1,
               "uid2"=>$uid2
           ))){
               echo "ok";
           }

        }else{
            echo "err";
        }
    }

    function cancel(){
        $uid1=$_POST["uid1"];
        $uid2=$_POST["uid2"];
        $db=new db("guanzhu");
        if($db->where("uid1=".$uid1." and uid2=".$uid2)->delete()){
            echo "ok";
        }
    }
}