<?php
class index{
   function init(){
       $title="我是标题";
       $smartyobj=new smarty();
       $smartyobj->setCompileUrl("compile");
       $smartyobj->setTemplateUrl();
       $smartyobj->assign("title","我是标题");
       $smartyobj->assign("CSS_URL",CSS_URL);
       $smartyobj->display("index/index.html");

   }
}