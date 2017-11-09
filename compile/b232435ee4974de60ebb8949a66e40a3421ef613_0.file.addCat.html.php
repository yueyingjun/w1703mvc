<?php
/* Smarty version 3.1.30, created on 2017-11-07 02:39:38
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/addCat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a010eda2c72c1_30477347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b232435ee4974de60ebb8949a66e40a3421ef613' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/addCat.html',
      1 => 1510018777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a010eda2c72c1_30477347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Basic Form - jQuery EasyUI Demo</title>
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

	<div class="easyui-panel" title="New Topic" style="width:100%;max-width:400px;padding:30px 60px;">

		<form id="ff" method="post">
			<div style="margin-bottom:20px">
			<input class="easyui-combotree" data-options="url:'index.php?m=admin&f=cat&a=showCat',method:'get',label:'选择上级分类：',labelPosition:'top'" style="width:100%" name="pid">
			</div>


			<div style="margin-bottom:20px">
				<input class="easyui-textbox" name="cname" style="width:100%" data-options="label:'分类名字:',required:true">
			</div>


			<div style="margin-bottom:20px">
				<input class="easyui-textbox" name="cinfo" style="width:100%;height:60px" data-options="label:'分类简介:',multiline:true">
			</div>

		</form>
		<div style="text-align:center;padding:5px 0">
			<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Submit</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Clear</a>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		function submitForm(){
		    $("#ff").attr("action","index.php?m=admin&f=cat&a=addCatCon");

		    if($("#ff").form("validate")){
                $('#ff').submit();
			}

		}
		function clearForm(){
			$('#ff').form('clear');
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
