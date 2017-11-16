<?php
/* Smarty version 3.1.30, created on 2017-11-13 11:30:00
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09742812f247_79200603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aedbf1d6d2fc7181ab4b02194043e33af55930b' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/write.html',
      1 => 1510284201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09742812f247_79200603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">
    <style>
        html,body{
            width:100%;height:100%;
            overflow: hidden;
        }
        .container-fluid,.row{
            height:100%;
        }
        div[class*=col]{
            height:90%;

        }
        .left{
            border-right:2px solid #000;
        }
        iframe{
            width:100%;height:100%;
            padding: 0;margin:0;
            box-sizing: border-box;

        }

    </style>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/write.js"><?php echo '</script'; ?>
>


<body>
   <div class="container-fluid">
       <div class="row">
           <div class="col-xs-4 col-md-3 left">
               <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

           </div>
           <div class="col-xs-8 col-md-9">
               <iframe src="index.php?m=index&f=write&a=main" frameborder="0" name="con"></iframe>
           </div>
       </div>
   </div>
</body>
</html><?php }
}
