<?php
/* Smarty version 3.1.30, created on 2017-11-14 03:15:27
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a51bfa3e256_09619537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abed0e011211eb92c3ea422e4c202ba2d2c3be76' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/member.html',
      1 => 1509590732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a51bfa3e256_09619537 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
  <table class="table table-bordered">
        <tr>
            <th>用户名</th>
            <th>角色</th>
            <th>操作</th>
        </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td>

                    <?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>

                </td>
                <td>
                    删除

                    编辑
                </td>
            </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </table>
</body>
</html><?php }
}
