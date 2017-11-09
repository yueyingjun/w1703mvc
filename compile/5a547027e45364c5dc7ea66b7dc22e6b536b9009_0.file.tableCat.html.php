<?php
/* Smarty version 3.1.30, created on 2017-11-07 10:58:52
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/tableCat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0183dc45b051_85483983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a547027e45364c5dc7ea66b7dc22e6b536b9009' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/tableCat.html',
      1 => 1510047094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0183dc45b051_85483983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editable TreeGrid - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/icon.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<div style="margin:20px 0;">
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">Edit</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">Cancel</a>

    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="del()">Delete</a>
</div>
<table id="tg" class="easyui-treegrid" title="Editable TreeGrid" style="width:700px;height:250px;margin-top:50px;"
       data-options="
				iconCls: 'icon-ok',
				rownumbers: true,
				animate: true,
				collapsible: true,
				fitColumns: true,
				url: 'index.php?m=admin&f=cat&a=tableCatCon',
				method: 'post',
				idField: 'id',
				treeField: 'cname',
				showFooter: true
			">
    <thead>
    <tr>
        <th data-options="field:'cname',width:200,editor:'text'">分类名称</th>

        <th data-options="field:'cinfo',width:500,align:'right',editor:'text'">分类简介</th>
    </tr>
    </thead>
</table>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/tableCat.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
