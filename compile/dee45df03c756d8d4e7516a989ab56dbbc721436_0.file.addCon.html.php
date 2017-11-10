<?php
/* Smarty version 3.1.30, created on 2017-11-10 09:21:07
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a05617348c9b2_46497288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dee45df03c756d8d4e7516a989ab56dbbc721436' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/addCon.html',
      1 => 1510302066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a05617348c9b2_46497288 (Smarty_Internal_Template $_smarty_tpl) {
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
  <a href="index.php?m=index&f=write&a=addConCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">添加内容</a>
  <ul>
      <?php if (count($_smarty_tpl->tpl_vars['data']->value) > 0) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <a href="index.php?m=index&f=write&a=edit&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

                </a>
              <?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>

              <?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>

            </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php } else { ?>
       <li>
           没有内容
       </li>
      <?php }?>
  </ul>
</body>
</html><?php }
}
