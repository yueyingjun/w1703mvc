<?php
/* Smarty version 3.1.30, created on 2017-11-14 03:15:19
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a51b7d4aeb1_17186554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f203d60754f343eff9272241b93c0dff5508f733' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/login.html',
      1 => 1508815930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a51b7d4aeb1_17186554 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/admin_login.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin_login.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&f=login&a=check" method="post">
   <a class="login" href="index.php?m=admin&f=index">
   </a>
   <div class="header-main">
        <h3 class="title">
                登陆
                <div class="dian">

                </div>
        </h3>

       <ul class="list-group">
           <li class="list-group-item">
               <div class="input-group">
                   <span class="glyphicon glyphicon-user"></span>
                   <input type="text" placeholder="请输入用户名" name="aname">
               </div>

           </li>
           <li class="list-group-item">
               <div class="input-group">
                   <span class="glyphicon glyphicon-lock"></span>
                   <input type="password" placeholder="请输入密码" name="apass">
               </div>
           </li>

           <li class="list-group-item">
           <div class="input-group">
               <span class="glyphicon glyphicon-phone"></span>
               <input type="text" placeholder="请输入手机号" name="aphone">
               <a href="javascript:;" class="sendbtn">
                   发送验证码
               </a>
           </div>
       </li>

           <li class="list-group-item">
               <div class="input-group">
                   <span class="glyphicon glyphicon-eye-open"></span>
                   <input type="text" placeholder="请输入手机验证码" name="phonecode">

               </div>
           </li>

           <li class="list-group-item">
               <div class="input-group">
                   <span class="glyphicon glyphicon-modal-window"></span>
                   <input type="text" placeholder="请输入验证码" name="imagecode" size="15">
                   <img src="index.php?m=admin&f=login&a=imagecode" onclick="this.src='index.php?m=admin&f=login&a=imagecode&num='+Math.random()*1000">

               </div>
           </li>
       </ul>

       <button type="submit" class="btn btn-primary btn-lg btn-block">登陆</button>

       <span style="margin-top:5px;display: block">
           没有账号？请<a href="">注册</a>
       </span>
   </div>
</form>
</body>
</html><?php }
}
