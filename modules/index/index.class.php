<?php
class index extends main {
   function init(){
       $this->smarty->assign("header",$this->header);
       $this->smarty->assign("footer",$this->footer);
       $index=md5("uekblog");
       $this->smarty->assign("islogin",isset($_SESSION[$index])?$_SESSION[$index]:"no");
       $this->smarty->assign("uname",$_SESSION["uname"]);
       $this->smarty->display("index/index.html");

   }
}