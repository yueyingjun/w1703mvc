<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:30:03
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/addConCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09742b58dff5_32405555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add7b32e43189d36959e01a0410b8a5622d15896' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/addConCon.html',
      1 => 1510304142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09742b58dff5_32405555 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" charset="utf-8" src="<?php echo STATIC_URL;?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo STATIC_URL;?>
/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo STATIC_URL;?>
/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="标题" name="ctitle">
    </div>
    <div class="form-group">
        <label>内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:200px;" name="con"><?php echo '</script'; ?>
>
    </div>
    <div class="form-group thumb">

    </div>
    <input type="hidden"  name="thumb">
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">

    <div class="input-group">
        <span class="input-group-addon">￥</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" style="width:100px" name="price">

    </div><br>

    其他类别选择:
    <div class="input-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
       <?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
 <input type="checkbox" name="pid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>


    <button type="submit" class="btn btn-default" formaction="index.php?m=index&f=write&a=add&state=2">我要发布</button>
    <button type="submit" class="btn btn-default" formaction="index.php?m=index&f=write&a=add&state=1">我要保存</button>
</form>

<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor',{
        toolbars: [
            ['fullscreen', 'undo', 'redo'],
            ['bold', 'italic', 'underline', 'fontborder', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','simpleupload', 'insertimage']
        ]
    });


    var uploadobj=new upload();
    uploadobj.selectBtnCon="选择缩略图";
    uploadobj.createView({
        parent:document.querySelector(".thumb")
    });
    uploadobj.up("index.php?m=index&f=write&a=upload",function(e){
        document.querySelector("input[name=thumb]").value=e.join(",");
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
