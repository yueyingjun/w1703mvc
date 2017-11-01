<?php
class member extends main{
   static private $limit;
    function show(){

        $this->smarty->display("admin/member.html");
    }
    function showRole(){
        include LIBS_PATH."/pages.class.php";
        $pagesObj=new pages();

        $db=new db("level");
        $result=$db->select();
        $pagesObj->total=count($result);
        $this->smarty->assign("pages",$pagesObj->show());
        self::$limit=$pagesObj->limit;

        $result=$db->limit(self::$limit)->select();

        $this->smarty->assign("data",$result);



        $this->smarty->display("admin/showRole.html");
        //$this->selectRole();
    }
    function selectRole(){

        $db=new db("level");
        $s=$_GET["pages"]*10;
        $result=$db->limit("{$s}, 10")->select();
        $arr=array();
        $arr["rows"]=$result;
        $arr["results"]=count($arr);
        echo json_encode($arr,true);
    }

    function addRole(){
        $type=$_GET["type"];
        $db = new db("level");
        if($type=="add") {
            $lname = sql($_POST["lname"]);

            if ($db->insert(array("lname" => "'{$lname}'")) > 0) {
                echo $db->db->insert_id;
            }
        }elseif ($type=="edit"){
            $lid=sql($_POST["lid"]);
            $lname = sql($_POST["lname"]);

            if($db->where("lid={$lid}")->update("lname='{$lname}'")>0){
                echo "edit";
            }
        }



    }

    function delete(){
        $lids=$_POST["lids"];
        $db=new db("level");
        if($db->where("lid in ".$lids)->delete()>0){
            echo "delete";
        }

    }


}