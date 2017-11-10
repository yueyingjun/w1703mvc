<?php
/* Smarty version 3.1.30, created on 2017-11-10 07:43:49
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/showPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a054aa5785933_32478043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f50453fe1373da2b99a3f17ba55839465f5087a4' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/showPos.html',
      1 => 1510296223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a054aa5785933_32478043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
  <table>
      <tr>
          <th>id</th>
          <th>推荐位名称</th>
          <th>操作</th>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pid"];?>
</td>
            <td class="pname" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</td>
            
            <td class="remove">
                <a href="index.php?m=admin&f=pos&a=del&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">删除</a>
            </td>
        </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>

  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/showPos.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
