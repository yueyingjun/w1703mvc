<?php
/* Smarty version 3.1.30, created on 2017-11-02 04:15:36
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/addMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fa8dd8d23d64_47712528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6664fd812a176e23c8632c0d5bfaf63335429c30' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/addMember.html',
      1 => 1509592516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa8dd8d23d64_47712528 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container">
    <form action="index.php?m=admin&f=member&a=addMemberCon" method="post">
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" placeholder="用户名" name="aname">
        </div>
        <div class="form-group">
            <label for="pass">密码</label>
            <input type="password" class="form-control" id="pass" placeholder="密码" name="apass">
        </div>
        <div class="form-group">
            选择角色<br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="radio">
                <label>
                    <input type="radio" name="level" id="optionsRadios1" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
" >
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>

                </label>
            </div>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>
</div>
</body>
</html><?php }
}
