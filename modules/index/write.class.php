<?php
class write extends main{
    function init(){
        include LIBS_PATH."/tree.class.php";

        $db=new db();
        $treeobj=new tree();
        $treeobj->getTree(0,"category",$db);
        $this->smarty->assign("tree",$treeobj->str);
        $this->smarty->display("index/write.html");
    }

    function addCon(){
        $this->smarty->assign("cid",$_GET["cid"]);
        $this->smarty->display("index/addCon.html");
    }

    function addConCon(){
        $this->smarty->display("index/addConCon.html");
    }

    function main(){
        $this->smarty->display("index/mainCon.html");
    }

}



?>

