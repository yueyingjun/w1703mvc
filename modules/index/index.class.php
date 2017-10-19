<?php
class index{
   function init(){
       $title="我是标题";
       $smartyobj=new Smarty();
       $smartyobj->setTemplateDir("./template");
       $smartyobj->setCompileDir("./compile");

       $dbobj=new db("abc");
       $smartyobj->assign("title","我是主页");
       $smartyobj->display("index/index.html");

   }
}