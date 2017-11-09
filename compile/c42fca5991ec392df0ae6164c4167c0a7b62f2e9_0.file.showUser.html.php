<?php
/* Smarty version 3.1.30, created on 2017-11-09 08:52:32
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a040940f387a1_89010008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42fca5991ec392df0ae6164c4167c0a7b62f2e9' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/showUser.html',
      1 => 1510213899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a040940f387a1_89010008 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        th{
            text-align: center;
        }
    </style>
</head>
<body>
<table class="table table-bordered">
    <tr>
        <th>
            id
        </th>
        <th>
            用户名字
        </th>
        <th>
            用户的角色
        </th>
        <th>
            用户的昵称
        </th>
        <th>
            用户的头像
        </th>
        <th>
            联系方式
        </th>
        <th>
            操作
        </th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

        </td>
        <td>
           <?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>


        </td>

        <td>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="">
        </td>
        <td>
           <?php echo $_smarty_tpl->tpl_vars['v']->value["phone"];?>

        </td>

        <td>
            删除  修改
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
