<?php
class main{
    function __construct(){
        $smartyobj = new Smarty();
        $smartyobj->setCompileDir("compile");
        $smartyobj->setTemplateDir("template");
        $this->smarty=$smartyobj;
    }
}