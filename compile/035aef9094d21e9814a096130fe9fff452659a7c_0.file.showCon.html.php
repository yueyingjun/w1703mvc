<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:30:29
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a097445d56175_37619547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035aef9094d21e9814a096130fe9fff452659a7c' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/showCon.html',
      1 => 1510390520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a097445d56175_37619547 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>

   <a href="index.php?m=admin&f=con&a=showCon&state=1">保存</a>
   <a href="index.php?m=admin&f=con&a=showCon&state=2">审核</a>
   <a href="index.php?m=admin&f=con&a=showCon&state=3">发布</a>

   <a href="index.php?m=admin&f=con&a=showCon&attr=1">普通</a>
   <a href="index.php?m=admin&f=con&a=showCon&attr=2">精华</a>
   <a href="index.php?m=admin&f=con&a=showCon&attr=3">极品</a>
   <table class="table table-bordered">
       <tr>              con
           <th>id</th>
           <th>标题</th>
           <th>作者</th>  user
           <th>状态</th>
           <th>属性</th>
           <th>发布时间</th>
           <th>缩略图</th>
           <th>所属分类</th>
           <th>推荐位</th>
       </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
       <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>

            </td>
           <td>
               <a href="index.php?m=admin&f=con&a=showConCon&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a>
           </td>
           <td>
               <?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>

           </td>
           <td>
               <?php if ($_smarty_tpl->tpl_vars['v']->value["state"] == 1) {?>
                   保存
               <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 2) {?>
                   审核
               <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["state"] == 3) {?>
                   发布
               <?php } else { ?>
                   禁用
               <?php }?>
           </td>
           <td>

               <?php if ($_smarty_tpl->tpl_vars['v']->value["cquanxian"] == 1) {?>
                    普通
               <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["cquanxian"] == 2) {?>
                    精华
               <?php } else { ?>
                    极品
               <?php }?>

           </td>
           <td>
               <?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>

           </td>
           <td>
               <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" width="100">
           </td>
           <td>
               <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

           </td>
           <td>
             <?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>

           </td>
       </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


   </table>

<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

</body>
</html><?php }
}
