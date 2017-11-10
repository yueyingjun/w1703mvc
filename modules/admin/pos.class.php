<?php
class pos extends main{

    //关联添加推荐位的页面
    function addPos(){

        $this->smarty->display("admin/addPos.html");
    }
    //添加推荐位内容
    function addPosCon(){
        $pname=$_POST["pname"];
        $db=new db("position");
        if($db->insert(array(
            "pname"=>"'{$pname}'"
        ))){
            echo "<script>alert('成功');location.href='index.php?m=admin&f=pos&a=addPos'</script>";
        }else{
            echo "<script>alert('失败');location.href='index.php?m=admin&f=pos&a=addPos'</script>";
        }
    }

    function showPos(){
        $db=new db("position");
        $result=$db->select();
        $this->smarty->assign("data",$result);
        $this->smarty->display("admin/showPos.html");
    }
    function del(){
        $pid=$_GET["pid"];
        $db=new db("position");
        if($db->where("pid='{$pid}'")->delete()){
            echo "<script>alert('成功');location.href='index.php?m=admin&f=pos&a=showPos'</script>";
        }else{
            echo "<script>alert('失败');location.href='index.php?m=admin&f=pos&a=showPos'</script>";
        }
    }

    function edit(){
        $pname=$_POST["pname"];
        $pid=$_POST["pid"];
        $db=new db("position");
        if($db->where("pid=".$pid)->update("pname='{$pname}'")){
            echo "ok";
        }else{
            echo "err";
        }

    }
}