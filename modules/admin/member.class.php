<?php
class member extends main{
   static private $limit;
    //查看管理员
    function show(){
        $db=new db();
        $result=$db->select("select admin.*,level.lname from admin,level where admin.level=level.lid");
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/member.html");
    }

    //添加管理员(页面呈现)

    function addMember(){
        $db=new db("level");
        $result=$db->select();
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/addMember.html");
    }

    //添加管理员(添加数据)
    function addMemberCon(){
      $lid=$_SESSION["level"];
      $db=new db("level");
      $result=$db->where("lid={$lid} and find_in_set('1',adminnum)")->select();

      if(count($result)>0) {
          $aname = sql($_POST["aname"]);
          $apass = md5($_POST["apass"]);
          $level = $_POST["level"];
          $db = new db("admin");
          if ($db->insert(array("aname" => "'{$aname}'", "apass" => "'{$apass}'", "level" => $level)) > 0) {
              echo "<script>alert('添加成');location.href='index.php?m=admin&f=member&a=addMember'</script>";
          }
      }else{
          echo "<script>alert('没有权限');location.href='index.php?m=admin&f=member&a=addMember'</script>";
      }
    }

    //查看角色
    function showRole(){
        include LIBS_PATH."/pages.class.php";
        $db=new db("level");
        $pageObj=new pages();
        $result=$db->select();
        $pageObj->total=count($result);
        $this->smarty->assign("pages",$pageObj->show());
        $result=$db->limit($pageObj->limit)->select();
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/showRole.html");

    }

    //ajax查询角色
    function selectRole(){

        $db=new db("level");
        $s=$_GET["pages"]*10;
        $result=$db->limit("{$s}, 10")->select();
        $arr=array();
        $arr["rows"]=$result;
        $arr["results"]=count($arr);
        echo json_encode($arr,true);
    }

    //添加角色信息
    function addRole(){
        $type=$_GET["type"];
        $db = new db("level");
        if($type=="add") {
            $lname = sql($_POST["lname"]);
            $connum = sql($_POST["connum"]);
            $adminnum = sql($_POST["adminnum"]);
            $messagenum = sql($_POST["messagenum"]);

            if ($db->insert(array("lname" => "'{$lname}'","connum"=>"'{$connum}'","messagenum"=>"'{$messagenum}'","adminnum"=>"'{$adminnum}'")) > 0) {
                echo $db->db->insert_id;
            }
        }elseif ($type=="edit"){
            $lid=sql($_POST["lid"]);
            $lname = sql($_POST["lname"]);
            $connum = sql($_POST["connum"]);
            $adminnum = sql($_POST["adminnum"]);
            $messagenum = sql($_POST["messagenum"]);
            if($db->where("lid={$lid}")->update("lname='{$lname}',connum='{$connum}',messagenum='{$messagenum}',adminnum='{$adminnum}'")>0){
                echo "edit";
            }
        }

    }

    //删除角色
    function delete(){
        $lids=$_POST["lids"];
        $db=new db("level");
        if($db->where("lid in ".$lids)->delete()>0){
            echo "delete";
        }

    }


}