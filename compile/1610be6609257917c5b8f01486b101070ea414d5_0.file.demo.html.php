<?php
/* Smarty version 3.1.30, created on 2017-11-01 13:03:30
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/demo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9b8129263b5_79180670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1610be6609257917c5b8f01486b101070ea414d5' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/demo.html',
      1 => 1509537808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9b8129263b5_79180670 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        th,td{
            height:80px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                角色名字
            </th>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["lid"];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>

                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <?php echo '<script'; ?>
>
        $(function(){
            var flag=true;
            var num=0;
            $(window).scroll(function(){
                  if($(window).scrollTop()>=$("table").outerHeight()-$(window).height()){
                      if(!flag){
                          return;
                      }
                      flag=false;
                      num++;
                     $.ajax({
                         url:"index.php?m=admin&f=member&a=ajax",
                         data:{ page:num },
                         type:"post",
                         dataType:"json",
                         success:function(e){
                            for(var i=0;i<e.length;i++){
                                $("<tr><td>"+e[i].lid+"</td><td>"+e[i].lname+"</td></tr>").appendTo("tbody");

                                flag=true;

                            }
                         }
                      })
                  }

            })
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
