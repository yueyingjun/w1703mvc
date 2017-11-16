<?php
/* Smarty version 3.1.30, created on 2017-11-14 09:22:15
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/messageTemplate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0aa7b724ff44_85567924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14406b8aaa00c4c579c5e6486117c165c82dbbe' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/messageTemplate.html',
      1 => 1510647728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0aa7b724ff44_85567924 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--作者信息-->
    <div class="authorbox">
        <div class="authorPhoto">

        </div>
        <div class="authorinfo">
            <div class="authorname">
               <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>

            </div>
            <div class="time">
                10楼   xxx:xxx:xxx
            </div>
        </div>
    </div>

    <div class="messagebox">
        <div class="message">
            <?php echo $_smarty_tpl->tpl_vars['mcon']->value;?>

        </div>
        <div class="replaybtn">
            <button type="button" class="rbtn" uid2="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" idnum="<?php echo $_smarty_tpl->tpl_vars['idnum']->value;?>
">回复</button>
        </div>

        <div class="replaybox" >


            <div class="addmessage">

                <div class="addmessage"style="display: none">
                    <button type="button" class="rbtn" >添加新评论</button>
            <div class="replayform" style="margin-top: 5px;">
                <textarea style="width: 100%;height:50px;padding:0;margin:0"></textarea>
                <button type="button"class="replayBtn">提交</button>
                <button type="button" class="cancel1">取消</button>
            </div>

        </div>
    </div>
<?php }
}
