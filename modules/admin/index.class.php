<?php
class index extends main{
    function init(){
        if(!isset($_SESSION["login"])){
            echo "<script>location.href='index.php?m=admin&f=login'</script>";
            exit;
        }
        $this->smarty->assign("aname",$_SESSION["aname"]);
        $this->smarty->display("admin/index.html");
    }
}