<?php
defined("COME") or exit("非法");

//要 程序的运行效率 and 工作效率
class smarty{
  public $templateUrl;
  public $compileUrl;
  public $arr=array();
  public $cache=false;
  public $cacheUrl;

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

    public function setCacheUrl($dirname="cache"){
        $this->cacheUrl=$dirname;
        $cacheurl=APP_PATH."/".$this->cacheUrl;
        $this->cacheUrl=$cacheurl;
        if(!is_dir($cacheurl)){
            mkdir($cacheurl);
        }
    }

    public function assign($str,$val){
      $this->arr[$str]=$val;
    }
    public function display($url){

        $md5name=md5($url);
        $fullpath=$this->templateUrl."/".$url;
        $cachefullpath=$this->cacheUrl."/".$md5name.".html";
        if(is_file($cachefullpath)&&$this->cache){
            include $cachefullpath;
        }else {
            $str = file_get_contents($fullpath);

            $newstr = preg_replace("/\{([^\}\s]+)\}/", '<?php echo $this->arr["$1"]?>', $str);

            $comfullpath = $this->compileUrl . "/" . $md5name . ".php";
            file_put_contents($comfullpath, $newstr);

            ob_start();
            include $comfullpath;
            $cachestr=ob_get_contents();
            if($this->cache) {
                file_put_contents($cachefullpath, $cachestr);
            }
        }

    }

}