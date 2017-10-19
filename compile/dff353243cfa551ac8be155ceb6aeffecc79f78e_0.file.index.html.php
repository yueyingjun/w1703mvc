<?php
/* Smarty version 3.1.30, created on 2017-10-19 12:30:35
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e87ecbd92de1_99325994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff353243cfa551ac8be155ceb6aeffecc79f78e' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/index.html',
      1 => 1508409034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e87ecbd92de1_99325994 (Smarty_Internal_Template $_smarty_tpl) {
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
/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <ul>
         <li>名字 <?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
         <li>年龄 <?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    </ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
