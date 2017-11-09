<?php
class main{
    function __construct(){
        $smartyobj = new Smarty();
        $smartyobj->setCompileDir("compile");
        $smartyobj->setTemplateDir("template");
        $this->smarty=$smartyobj;
        $this->header=TPL_PATH."/index/header.html";
        $this->footer=TPL_PATH."/index/footer.html";
    }
}