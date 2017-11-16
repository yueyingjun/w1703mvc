<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:35:25
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09756d2d9613_51019406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40605544a228558b340db054ccca16c307b47e21' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/reg.html',
      1 => 1510107572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09756d2d9613_51019406 (Smarty_Internal_Template $_smarty_tpl) {
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
/wyp/reg.css">
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
<form class="form-horizontal forms" action="index.php?m=index&f=reg&a=check" method="post" id="form">
    <h5>注册</h5>
    <ul class="list-group">
        <li class="list-group-item glyphicon glyphicon-user">
            <input type="text" placeholder="请输入用户名" name="uname">
        </li>
        <li class="list-group-item glyphicon glyphicon-lock">
            <input type="password" placeholder="请输入密码" name="upass1" id="pass">
        </li>
        <li class="list-group-item glyphicon glyphicon-lock">
            <input type="password" placeholder="请再次输入密码" name="upass2">
        </li>
        <li class="list-group-item glyphicon glyphicon-lock">
            <input type="text" placeholder="请输入手机号" name="phone">
        </li>
        <li class="list-group-item glyphicon glyphicon-picture">
            <input type="text" placeholder="请输入图形验证码" name="imgCode" >
            <a href="javascript:;" class="code"><img src="index.php?m=index&f=reg&a=code" alt="" onclick="this.src='index.php?m=index&f=reg&a=code'" style="display: none" class="imgcode"></a>

            <label id="imgCode-error" class="error" for="imgCode"></label>
        </li>
    </ul>
    <button type="submit">注册</button>
    <span>已注册，点击这里<a href="index.php?m=index&f=login">登陆</a></span>
</form>
<a href="index.php" class="top">随·心</a>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/reg.js"><?php echo '</script'; ?>
>
</html><?php }
}
