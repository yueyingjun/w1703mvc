<?php
/* Smarty version 3.1.30, created on 2017-11-09 09:06:50
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a040c9af38ce6_44936380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9807a1d08f2f7b53155eb1725be822db24578fa3' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/header.html',
      1 => 1510214807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a040c9af38ce6_44936380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/wyp/header.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/header.js"><?php echo '</script'; ?>
>
</head>
<body>

<!--

user

id   uname     level
1    zhangsan   2

con

id   con    uid
1     aaa    1
1     bbb    1

guanzhu

id  uid1  uid2
1     2    1

role

id     名称      发布文章数量    查看文章
 1    普通用户      0              1
 2    黄金用户     200             2
 3    白金用户     300             3
-->
<!--头部-->
<section class="head">
    <main>
        <div class="head1">随·心</div>
        <div class="head2">
            <ul class="head21">
                <li><a href="index.php">首页</a></li>
            </ul>
            <div class="search">
                <div class="search1 icon-soushuo"></div>
                <input type="text" placeholder="搜索" class="search2" autofocus>
            </div>
        </div>
        <div class="head3">
            <div class="head31">
                <?php if ($_smarty_tpl->tpl_vars['islogin']->value == "yes") {?>
                <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
 <a href="index.php?m=index&f=login&a=logout">退出</a>
                <?php } else { ?>
                     <a href="index.php?m=index&f=login">登录</a>
                <div class="headL">♥</div>
                <a href="index.php?m=index&f=reg">注册</a>

                <?php }?>
            </div>
            <a href="index.php?m=index&f=write" class="head33">写文章</a>
            <a href="index.php?m=index&f=center" class="head32 icon-feather-blur-light-b"></a>
        </div>
    </main>
</section>
<div class="header"></div>
<?php }
}
