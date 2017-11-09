<?php
session_start();

//单入口文件
define("COME", "yes");
// 服务器的根目录
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
// 应用的根目录
define("APP_PATH", substr($_SERVER["SCRIPT_FILENAME"], 0, strrpos($_SERVER["SCRIPT_FILENAME"], "/")));
// libs文件的路径
define("LIBS_PATH", APP_PATH . "/libs");
// moudles文件的路径

define("MOUDLES_PATH", APP_PATH . "/modules");
// 模板的路径
define("TPL_PATH", APP_PATH . "/template");

//smarty的路径
define("SMARTY_PATH", LIBS_PATH . "/smarty");

//2.  服务器的路径

//协议
define("PROT", strtolower(strchr($_SERVER["SERVER_PROTOCOL"], "/", true)));
//主机地址
define("HOST", $_SERVER["HTTP_HOST"]);
// 项目的路径
define("APP_URL", substr($_SERVER["SCRIPT_NAME"], 0, strrpos($_SERVER["SCRIPT_NAME"], "/")));

//服务器的项目路径

define("HTTP_URL", PROT . "://" . HOST . APP_URL);


//静态目录的路径
define("STATIC_URL", HTTP_URL . "/static");
//css的路径

define("CSS_URL", STATIC_URL . "/css");
define("JS_URL", STATIC_URL . "/js");
define("IMG_URL", STATIC_URL . "/img");

include_once LIBS_PATH . "/route.class.php";

include_once LIBS_PATH . "/main.class.php";
include_once SMARTY_PATH . "/Smarty.class.php";
$configs = include_once APP_PATH . "/config.php";
include_once LIBS_PATH . "/db.class.php";
include_once LIBS_PATH . "/functions.php";
$routeobj = new route();
$routeobj->set();


