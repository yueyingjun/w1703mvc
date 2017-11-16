<?php
/* Smarty version 3.1.30, created on 2017-11-14 11:22:28
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ac3e4951b70_51237215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ee5ff08a37ae0168362be50663f0db2a50ffb7' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/comment.html',
      1 => 1510654897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0ac3e4951b70_51237215 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="commentbox">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

    <div class="clist">
         <!--作者信息-->
         <div class="authorbox">
                <div class="authorPhoto">

                </div>
                <div class="authorinfo">
                    <div class="authorname">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>

                    </div>
                    <div class="time">
                        10楼
                    </div>
                </div>
         </div>

         <div class="messagebox">
             <div class="message">
                 <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

             </div>
             <div class="replaybtn">
                    <button type="button" class="rbtn" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" idnum="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复</button>
             </div>

             <div class="replaybox">

                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                     <div class="replaylist">
                         <div class="replayauthor">
                            <?php echo $_smarty_tpl->tpl_vars['v1']->value['uname'];?>

                         </div>
                         <div class="replaycon">
                           <?php echo $_smarty_tpl->tpl_vars['v1']->value['mcon'];?>

                         </div>
                         <div class="replaystste">
                             <div class="replaytime">xxx:xx</div>
                             <div class="replaybtn">

                                 <button type="button" class="rbtn" author="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uname'];?>
" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" idnum="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复</button>
                             </div>
                         </div>

                     </div>

                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                 <div class="addmessage" style="display: none">
                     <button type="button" class="rbtn" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" idnum="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">添加新评论</button>
                 </div>
                 <div class="replayform" style="margin-top: 5px;">
                     <textarea style="width: 100%;height:50px;padding:0;margin:0"></textarea>
                     <button type="button" class="replayBtn">提交</button>
                     <button type="button" class="cancel1">取消</button>
                 </div>

             </div>
         </div>


      </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




    <a href="javascript:;" class="up page" url="index.php?m=index&f=show&a=pages&pages=<?php echo $_smarty_tpl->tpl_vars['pages']->value-1;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">上一页</a>
    <a href="javascript:;" class="next page" url="index.php?m=index&f=show&a=pages&pages=<?php echo $_smarty_tpl->tpl_vars['pages']->value+1;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">下一页</a>



</div><?php }
}
