<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:30:35
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/showConCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09744bbc3653_96704654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '155d164299bc48c09f5f0912fd46834bce7c4a06' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/showConCon.html',
      1 => 1510393013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09744bbc3653_96704654 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">
   <h1>
            <?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>

   </h1>
   <p>
       <?php echo $_smarty_tpl->tpl_vars['data']->value["con"];?>
<br>
       <?php echo $_smarty_tpl->tpl_vars['data']->value["condate"];?>

   </p>



   普通：<input type="radio" value="1" name="cquanxian" <?php if ($_smarty_tpl->tpl_vars['data']->value["cquanxian"] == 1) {?> checked<?php }?> >
   精华：<input type="radio" value="2" name="cquanxian" <?php if ($_smarty_tpl->tpl_vars['data']->value["cquanxian"] == 2) {?> checked<?php }?>>
   极品：<input type="radio" value="3" name="cquanxian" <?php if ($_smarty_tpl->tpl_vars['data']->value["cquanxian"] == 3) {?> checked<?php }?>>
   <br>

   禁用：<input type="radio" value="4" name="state" <?php if ($_smarty_tpl->tpl_vars['data']->value["state"] == 4) {?> checked<?php }?>>
   审核：<input type="radio" value="2" name="state" <?php if ($_smarty_tpl->tpl_vars['data']->value["state"] == 2) {?> checked<?php }?>>
   发布：<input type="radio" value="3" name="state" <?php if ($_smarty_tpl->tpl_vars['data']->value["state"] == 3) {?> checked<?php }?>>


   <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/showConCon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
