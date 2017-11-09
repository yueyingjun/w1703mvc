<?php
/* Smarty version 3.1.30, created on 2017-11-08 08:32:20
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02b304e57e95_79239604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576ef2cf2627e1ec38a9e09bbc314491ff2abcaa' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/success.html',
      1 => 1510126276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02b304e57e95_79239604 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提示信息</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>

<body>

            <div class="span10" style="position: fixed;margin:auto;left:0;top:0;right:0;bottom:0;height:96px;">
                <div class="tips tips-large tips-success">
                    <span class="x-icon x-icon-success"><i class="icon icon-ok icon-white"></i></span>
                    <div class="tips-content">
                        <h2><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value;?>
</h2>
                        <p class="auxiliary-text">
                            请等待 <span class="num">3</span> 秒，自动跳转
                        </p>
                        <p>
                            <a class="direct-lnk" title="返回首页" href="index.php">返回首页</a>
                            <a class="direct-lnk uppage" title="上一页" href="<?php echo $_smarty_tpl->tpl_vars['uppage']->value;?>
" >返回上一页</a>
                        </p>
                    </div>
                </div>

            </div>
    <!-- script end -->
            <?php echo '<script'; ?>
>
                var num=3;
                setInterval(function(){
                    num--;
                    if(num<0){
                        location.href=$(".uppage").attr("href");
                    }else{
                        $(".num").html(num);
                    }
                },1000)


                setTimeout(function(){
                    location.href=$(".uppage").attr("href");
                },3000)
            <?php echo '</script'; ?>
>
</body>
</html><?php }
}
