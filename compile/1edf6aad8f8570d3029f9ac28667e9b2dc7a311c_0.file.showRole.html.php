<?php
/* Smarty version 3.1.30, created on 2017-11-01 12:36:51
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/showRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9b1d3d3df22_46877537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1edf6aad8f8570d3029f9ac28667e9b2dc7a311c' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/showRole.html',
      1 => 1509536182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f9b1d3d3df22_46877537 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->
    <link href="../../assets/code/demo.css" rel="stylesheet">

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>


<div class="demo-content">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>角色名称：</label>

                    <div class="controls">

                        <input type="hidden" name="lid">
                        <input name="lname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>

            </div>
        </form>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>



    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/role.js"><?php echo '</script'; ?>
>

</div>
</body>
</html><?php }
}
