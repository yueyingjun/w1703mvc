<?php
class lists{
  function init(){
      $smartyObj=new smarty();
      $smartyObj->setCompileUrl();
      $smartyObj->setTemplateUrl();
      $smartyObj->assign("title","我是列表");
      $smartyObj->display("index/lists.html");
  }
}