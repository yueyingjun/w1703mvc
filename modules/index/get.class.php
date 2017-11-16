<?php

class get extends main{
    function hot(){

        $db=new db();
        $result=$db->select("SELECT con.*,hits.* FROM con,hits where DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(condate) and con.cid=hits.conid and hits.hnum>2");


        $this->smarty->assign("data",$result);
        $this->smarty->display("index/hot.html");
    }
}