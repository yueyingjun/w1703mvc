<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:52:15
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/hot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09795f600a00_98318562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877ece8fff7785b7f7653fa0f9aff71f4c73aa47' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/hot.html',
      1 => 1510570152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09795f600a00_98318562 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>热门</title>
</head>
<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
