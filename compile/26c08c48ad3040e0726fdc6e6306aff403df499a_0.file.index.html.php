<?php
/* Smarty version 3.1.30, created on 2017-11-14 03:15:27
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a51bf42bf42_36300605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c08c48ad3040e0726fdc6e6306aff403df499a' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/index.html',
      1 => 1509437138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a51bf42bf42_36300605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> BUI 管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="<?php echo CSS_URL;?>
/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_URL;?>
/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_URL;?>
/main-min.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/demo.js"><?php echo '</script'; ?>
>


</head>
<body>
<div class="header">

    <div class="dl-title">
        <a href="http://www.builive.com" title="文档库地址" target="_blank"><!-- 仅仅为了提供文档的快速入口，项目中请删除链接 -->
            <span class="lp-title-port">BUI</span><span class="dl-title-text">前端框架</span>
        </a>
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">
<?php echo $_smarty_tpl->tpl_vars['aname']->value;?>

    </span><a href="index.php?m=admin&f=login&a=logout" title="退出系统" class="dl-log-quit">[退出]</a><a href="http://http://www.builive.com/" title="文档库" class="dl-log-quit">文档库</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">管理员设置</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-order">用户管理</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-inventory">内容管理</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-supplier">详情页1</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-marketing">图表1</div></li>
        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/bui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/config.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
