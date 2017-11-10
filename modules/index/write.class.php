<?php
class write extends main{
    function init(){

        $index=md5("uekblog");
        if(@$_SESSION[$index]!="yes"){
            $this->smarty->assign("errorInfo","请登录");
            $_SESSION["nearurl"]="index.php?m=index&f=write";
            $this->smarty->assign("uppage","index.php?m=index&f=login");
            $this->smarty->display("index/error.html");
            exit;
        }


        include LIBS_PATH."/tree.class.php";
        $db=new db();
        $treeobj=new tree();
        $treeobj->getTree(0,"category",$db);
        $this->smarty->assign("tree",$treeobj->str);
        $this->smarty->assign("header",$this->header);
        $this->smarty->assign("footer",$this->footer);
        $index=md5("uekblog");
        $this->smarty->assign("islogin",isset($_SESSION[$index])?$_SESSION[$index]:"no");


        $this->smarty->assign("uname",$_SESSION["uname"]);


        $this->smarty->display("index/write.html");
    }

    function addCon(){
        $db=new db("con");
        $result=$db->where("catid=".$_GET["cid"])->select();
        $this->smarty->assign("data",$result);


        $this->smarty->assign("cid",$_GET["cid"]);
        $this->smarty->display("index/addCon.html");
    }

    function addConCon(){

        $db=new db("position");

        $result=$db->select();
        $this->smarty->assign("data",$result);
        $this->smarty->assign("cid",$_GET["cid"]);
        $this->smarty->display("index/addConCon.html");
    }

    function main(){
        $this->smarty->display("index/mainCon.html");
    }

    function upload(){

    include LIBS_PATH."/upload.class.php";
        $upobj=new upload();
        $upobj->move();

    }

    function add(){
            $ctitle=$_POST["ctitle"];
            $con=addcslashes($_POST["con"],"s");
            $uid=$_SESSION["uid"];
            $thumb=$_POST["thumb"];

            $catid=$_POST["cid"];
            $price=$_POST["price"];
            $state=$_GET["state"];
            $pid=implode(",",$_POST["pid"]);
            $db=new db("con");
            if($db->insert(array(
                "ctitle"=>"'{$ctitle}'",
                "con"=>"'{$con}'",
                "uid"=>$uid,
                "cquanxian"=>1,
                "thumb"=>"'{$thumb}'",
                "catid"=>$catid,
                "price"=>$price,
                "state"=>$state,
                "pid"=>"'{$pid}'"
            ))){

                 echo "<script>alert('插入成功');location.href='index.php?m=index&f=write&a=addConCon&cid={$catid}'</script>";
            }else{
                echo "<script>alert('插入失败');location.href='index.php?m=index&f=write&a=addConCon&cid={$catid}'</script>";
            }



    }
    /*修改内容*/

    function edit(){
        $db=new db("position");

        $result=$db->select();
        $this->smarty->assign("data",$result);

        $db->selectTable("con");
        $cid=$_GET["cid"];

        $result=$db->where("cid=".$cid)->find();

        $this->smarty->assign("data1",$result);

        $this->smarty->display("index/edit.html");
    }

    //删除图片

    function delImg(){

        //1. 数据库  2. 删除文件  3. 视图
        $cid=$_POST["cid"];
        $db=new db("con");
        $thumburl=$db->filed("thumb")->where('cid='.$cid)->find();

        unlink($thumburl["thumb"]);
        if($db->update("thumb=''")){
            echo "ok";
        }


    }

    //修改内容



    function editCon(){
        $ctitle=$_POST["ctitle"];
        $con=addcslashes($_POST["con"],"s");
        $thumb=isset($_POST["thumb"])?$_POST["thumb"]:"";
        $price=$_POST["price"];
        $db=new db("con");
        $cid=$_GET["cid"];
        $pid=implode(",",$_POST["pid"]);
        if($thumb) {
            if ($db->where("cid=".$cid)->update("ctitle='{$ctitle}',con='{$con}',thumb='{$thumb}',price={$price},pid='{$pid}'")
            ) {
                echo "<script>alert('修改成功');location.href='index.php?m=index&f=write&a=edit&cid={$cid}'</script>";
            }
        }else{
            if ($db->where("cid=".$cid)->update("ctitle='{$ctitle}',con='{$con}',price={$price},pid='{$pid}'")
            ) {
                echo "<script>alert('修改成功');location.href='index.php?m=index&f=write&a=edit&cid={$cid}'</script>";
            }
        }
    }
}



