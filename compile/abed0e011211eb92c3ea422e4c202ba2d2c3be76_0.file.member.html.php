<?php
/* Smarty version 3.1.30, created on 2017-10-31 12:29:30
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f85e9a20a0b9_91596223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abed0e011211eb92c3ea422e4c202ba2d2c3be76' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/member.html',
      1 => 1509449366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f85e9a20a0b9_91596223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->

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
                    <label class="control-label"><s>*</s>文本：</label>
                    <div class="controls">
                        <input name="a" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>数字：</label>
                    <div class="controls">
                        <input name="b" type="text" data-rules="{ required:true,number : true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span8 ">
                    <label class="control-label">日期：</label>
                    <div id="range" class="controls">
                        <input name="c" class="calendar" type="text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label">选择：</label>
                    <div class="controls">
                        <select name="d" class="input-normal">
                            <option value="">请选择</option>
                            <option value="1">选项一</option>
                            <option value="2">选项二</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">多选：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'选项一',value:'1' },{ text:'选项二',value:'2' },{ text:'选项三',value:'3' }]}">
                        <input type="hidden" name="e">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span15">
                    <label class="control-label">备注：1</label>
                    <div class="controls control-row4">
                        <textarea name="f" class="input-large" type="text"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
    <!-- 使用seajs方式 -->

    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/seed-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/member.js"><?php echo '</script'; ?>
>

    <!-- script start -->

</div>
</body>
</html><?php }
}
