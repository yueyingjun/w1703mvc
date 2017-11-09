<?php
/* Smarty version 3.1.30, created on 2017-11-08 02:35:17
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a025f555678b4_69694060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe3cf719bfa9669064e29dec65174563c40ef9f5' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/login.html',
      1 => 1510104886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a025f555678b4_69694060 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/wyp/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/wyp/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/jquery.validate.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal forms" action="index.php?m=index&f=login&a=check" method="post" id="form">
    <h5>登录</h5>
    <ul class="list-group">
        <li class="list-group-item glyphicon glyphicon-user">
            <input type="text" placeholder="请输入用户名" name="uname">
        </li>
        <li class="list-group-item glyphicon glyphicon-lock">
            <input type="password" placeholder="请输入密码" name="upass">
        </li>
        <li class="list-group-item glyphicon glyphicon-picture">
            <input type="text" placeholder="请输入图形验证码" name="imgCode">
            <a href="javascript:;" class="code"><img src="index.php?m=index&f=login&a=imageCode" alt="" onclick="this.src='index.php?m=index&f=login&a=imageCode'"></a>
        </li>
    </ul>
    <button type="submit">登录</button>
    <span>若未注册，则点击这里<a href="index.php?m=index&f=reg">注册</a></span>
</form>
<a href="index.php" class="top">随·心</a>
</body>
<?php echo '<script'; ?>
>
    $(function(){
        $("#form").validate({
            rules: {
                uname: {
                    required: true,
                    minlength: 2,
                },
                upass: {
                    required: true,
                    minlength: 6,

                },
            },
            messages: {
                uname: {
                    required: "用户名必须输入",
                    minlength: "最少输入两个字符",
                },
                upass: {
                    required: "密码必须输入",
                    minlength: "最少输入六个数字"
                },
            }
        })
    })
<?php echo '</script'; ?>
>
</html><?php }
}
