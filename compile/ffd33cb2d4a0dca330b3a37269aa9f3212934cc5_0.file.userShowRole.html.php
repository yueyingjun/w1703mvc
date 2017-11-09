<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:31:23
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/userShowRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03cc0b3dc295_00322156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd33cb2d4a0dca330b3a37269aa9f3212934cc5' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/userShowRole.html',
      1 => 1510198280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03cc0b3dc295_00322156 (Smarty_Internal_Template $_smarty_tpl) {
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
              角色名字
          </th>
          <th>
              发布文章数量
          </th>
          <th>
              查看文章权限
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
                <?php echo $_smarty_tpl->tpl_vars['v']->value["rid"];?>

            </td>
          <td>
              <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

          </td>
          <td>
              <?php echo $_smarty_tpl->tpl_vars['v']->value["connum"];?>

          </td>
          <td>
              <?php if ($_smarty_tpl->tpl_vars['v']->value["conlevel"] == 1) {?>
                    普通文章
              <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["conlevel"] == 2) {?>
                    精华文章
              <?php } else { ?>
                     极品文章
              <?php }?>

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
