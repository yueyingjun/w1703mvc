<?php
class user extends main{
    function showRole(){
        $db=new db("role");
        $result=$db->select();
        $this->smarty->assign("data",$result);
       $this->smarty->display("admin/userShowRole.html");
    }

    //显示添加角色的页面
    function addRole(){
        $this->smarty->display("admin/userAddRole.html");
    }

    //添加角色的内容

    function addRoleCon(){
            $db=new db();
            $rname=$_POST["rname"];
            $connum=$_POST["connum"];
            $conlevel=$_POST["conlevel"];
            $lid=$_SESSION["level"];
            $db->selectTable("level");

        $result=$db->where("lid={$lid} and find_in_set('1',adminnum)")->select();

        if(count($result)>0) {
            $db->selectTable("role");
            if ($db->insert(array("rname" => "'{$rname}'", "connum" => $connum, "conlevel" => $conlevel)) > 0) {
                echo "<script>alert('添加成功');location.href='index.php?m=admin&f=user&a=addRole'</script>";
            } else {
                echo "<script>alert('添加失败');location.href='index.php?m=admin&f=user&a=addRole'</script>";

            }
        }else{
            echo "<script>alert('没有权限');location.href='index.php?m=admin&f=user&a=addRole'</script>";
        }
    }

    function showUser(){

        $db=new db();
        $result=$db->select("select user.*,role.rname from user,role where user.level=role.rid ");
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/showUser.html");
    }
}
