<?php
defined("COME") or exit("非法");
class smarty{
  public $templateUrl;
  public $compileUrl;
  public $arr=array();

  public function setTemplateUrl($dirname="template"){
        $this->templateUrl=$dirname;
        $tplurl=APP_PATH."/".$this->templateUrl;
        $this->templateUrl=$tplurl;
        if(!is_dir($tplurl)){
            mkdir($tplurl);
        }
  }

    public function setCompileUrl($dirname="compile"){
        $this->compileUrl=$dirname;
        $comurl=APP_PATH."/".$this->compileUrl;
        $this->compileUrl=$comurl;
        if(!is_dir($comurl)){
            mkdir($comurl);
        }
    }

    public function assign($str,$val){
      $this->arr[$str]=$val;
    }

    public function display($url){
        $fullpath=$this->templateUrl."/".$url;
        $str=file_get_contents($fullpath);

        $newstr=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$str);

        $comfullpath=$this->compileUrl."/1.php";
        file_put_contents($comfullpath,$newstr);

        include $comfullpath;

    }

}