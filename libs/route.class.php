<?php
if(!defined("COME")){
    echo "非法访问";
    exit;
}
class route{
    private static $m;
    private static $f;
    private static $a;

    private  function getInfo(){
       self::$m=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
       self::$f=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
       self::$a=isset($_REQUEST["f"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
    }

    public function set(){
        //先获取参数信息
        $this->getInfo();
        $murl=MOUDLES_PATH."/".self::$m;
        if(is_dir($murl)){
           $furl=MOUDLES_PATH."/".self::$m."/".self::$f.".class.php";
           if(is_file($furl)){
                include_once $furl;
                if(class_exists(self::$f)){

                    $obj=new self::$f();
                    $method=self::$a;
                    if(method_exists($obj,$method)){
                        $obj->$method();

                    }else{
                        echo self::$a."这个方法不存在";
                    }

                }else{

                    echo self::$f."这个类不存在";
                }


           }else{
               echo $furl."这个文件不存在";
           }

        }else{
            echo $murl."这个目录不存在";
        }
    }
}

