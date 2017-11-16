<?php
class lists extends main {
  function show(){
      $pid=$_GET["pid"];
      $db=new db();
      $this->smarty->assign("header",$this->header);
      $this->smarty->assign("footer",$this->footer);
      $index=md5("uekblog");
      $this->smarty->assign("islogin",isset($_SESSION[$index])?$_SESSION[$index]:"no");
      $this->smarty->assign("uname",$_SESSION["uname"]);
      $result=$db->select("select con.*,user.uname from con,user where find_in_set({$pid},pid) and state=3 and con.uid=user.uid ");

      $this->smarty->assign("data",$result);

      $this->smarty->display("index/lists.html");
  }
}