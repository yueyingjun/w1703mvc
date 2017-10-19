<?php
class index{
   function init(){
       $title="我是标题";
       $smartyobj=new Smarty();

       $smartyobj->setTemplateDir("./template");
       $smartyobj->setCompileDir("./compile");

       $dbobj=new db("abc");
       $a=$dbobj->select();
       $smartyobj->assign("title","我是主页");
       $smartyobj->assign("list",$a);
       $smartyobj->display("index/index.html");

   }
}