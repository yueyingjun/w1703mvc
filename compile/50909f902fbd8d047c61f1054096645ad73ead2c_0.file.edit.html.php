<?php
/* Smarty version 3.1.30, created on 2017-11-10 11:05:52
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a057a00905793_66569498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50909f902fbd8d047c61f1054096645ad73ead2c' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/edit.html',
      1 => 1510308183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a057a00905793_66569498 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="标题" name="ctitle" value="<?php echo $_smarty_tpl->tpl_vars['data1']->value['ctitle'];?>
">
    </div>
    <div class="form-group">
        <label>内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:200px;" name="con" ><?php echo '</script'; ?>
>
        <textarea name="" id="" cols="30" rows="10" hidden>
          <?php echo $_smarty_tpl->tpl_vars['data1']->value['con'];?>

        </textarea>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['data1']->value['thumb']) {?>
    <div class="form-group" style="position: relative;width:100px;">

        <img src="<?php echo $_smarty_tpl->tpl_vars['data1']->value['thumb'];?>
" alt="" width="100">
        <div class="delBtn" style="position: absolute;right:0;top:0" cid="<?php echo $_smarty_tpl->tpl_vars['data1']->value['cid'];?>
">
            x
        </div>
    </div>
    <?php }?>
    <div class="form-group sthumb">

    </div>
    <input type="hidden"  name="thumb">
    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">

    <div class="input-group">
        <span class="input-group-addon">￥</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" style="width:100px" name="price" value="<?php echo $_smarty_tpl->tpl_vars['data1']->value['price'];?>
">

    </div><br>

    其他类别选择:

    <div class="input-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if (strpos($_smarty_tpl->tpl_vars['data1']->value['pid'],$_smarty_tpl->tpl_vars['v']->value['pid']) !== false) {?>
       <?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
 <input type="checkbox" name="pid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" checked>
        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
 <input type="checkbox" name="pid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" >
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>


    <button type="submit" class="btn btn-default" formaction="index.php?m=index&f=write&a=editCon&cid=<?php echo $_smarty_tpl->tpl_vars['data1']->value['cid'];?>
">修改</button>
</form>

<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor',{
        toolbars: [
            ['fullscreen', 'undo', 'redo'],
            ['bold', 'italic', 'underline', 'fontborder', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','simpleupload', 'insertimage']
        ]
    });
    ue.addListener( 'ready', function( editor ) {

        UE.getEditor('editor').setContent(document.querySelector("textarea").value);

    });



    var uploadobj=new upload();
    uploadobj.selectBtnCon="选择缩略图";
    uploadobj.createView({
        parent:document.querySelector(".sthumb")
    });
    uploadobj.up("index.php?m=index&f=write&a=upload",function(e){
        document.querySelector("input[name=thumb]").value=e.join("");
    })

    $(".delBtn").click(function(){
        $.ajax({
            url:"index.php?m=index&f=write&a=delImg",
            type:"post",
            data:{ cid:$(".delBtn").attr("cid") },
            success:function(e){
                alert(e);
                if(e=="ok"){
                    $(".delBtn").parent().remove();
                }
            }
        })
    })

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
