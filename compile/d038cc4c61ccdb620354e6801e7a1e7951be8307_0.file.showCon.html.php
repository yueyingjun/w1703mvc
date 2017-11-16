<?php
/* Smarty version 3.1.30, created on 2017-11-14 11:34:25
  from "/Users/gaoxin/Documents/www/1703/mvc/template/index/showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ac6b1dbc630_86470685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd038cc4c61ccdb620354e6801e7a1e7951be8307' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/index/showCon.html',
      1 => 1510655649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0ac6b1dbc630_86470685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/wyp/content.css">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/wyp/content.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/comment.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/comment.css">
 <div class="notice">
     操作成功
 </div>
<section class="word" cid="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" uid1="<?php echo $_smarty_tpl->tpl_vars['uid1']->value;?>
" uid2="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
" uname="<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
">
    <main>
        <div class="word1">
            <h3 class="word2"><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h3>
            <div class="word3">
                <a href="index.php?m=index&f=author" class="word31"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></a>
                <div class="word32">
                    <div class="word33">
                        <a href="index.php?m=index&f=author" class="word34"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</a>


                      <?php if (!$_smarty_tpl->tpl_vars['uname']->value) {?>
                        <a href="javascript:;" class="word35 guanzhu">+关注</a>
                        <a href="javascript:;" class="word35 cancel" style="display: none">取消关注</a>
                      <?php } else { ?>

                          <?php if ($_smarty_tpl->tpl_vars['flag']->value) {?>
                        <a href="javascript:;" class="word35 cancel">取消关注</a>
                        <a href="javascript:;" class="word35 guanzhu" style="display: none">+关注</a>
                          <?php } else { ?>
                        <a href="javascript:;" class="word35 guanzhu">+关注</a>
                        <a href="javascript:;" class="word35 cancel" style="display: none">取消关注</a>
                         <?php }?>

                       <?php }?>
                    </div>
                    <div class="word36"><span><?php echo $_smarty_tpl->tpl_vars['data']->value["condate"];?>
</span> <span>字数 <?php echo strlen($_smarty_tpl->tpl_vars['data']->value["con"]);?>
</span> <span>阅读 <?php echo $_smarty_tpl->tpl_vars['hits']->value;?>
</span> <span>评论 307</span> <span>关注者 <?php echo $_smarty_tpl->tpl_vars['guanzhunum']->value;?>
</span> <span>赞赏 4</span></div>
                </div>
            </div>

            <span class="word5">

                <?php echo $_smarty_tpl->tpl_vars['data']->value["con"];?>

            </span>
            <div class="word6">
                <div class="word61">
                    <a href="index.php?m=index&f=type" class="icon-wenzhang1"> <span>谈情说爱</span></a>
                    <span>© 著作权归作者所有</span>
                </div>
                <div class="word62">
                    <div class="word63">
                        <a href="index.php?m=index&f=author" class="word64"><img src="<?php echo IMG_URL;?>
/xie.png" alt=""></a>
                        <div class="word65">
                            <a href="index.php?m=index&f=author">陌上花开</a>
                            <span>写了 184237 字，被 39044 人关注，获得了 18909 个喜欢</span>
                        </div>
                        <a href="index.php?m=index&f=author" class="word66">+ 关注</a>
                    </div>
                    <div class="word67">微信公众号ID：陌上花开 💗💗喜欢我就关注我 两天一更，时间多一天一更</div>
                </div>

            </div>
            <div class="word7">
                <span>如果觉得我的文章对您有用，请随意赞赏。您的支持将鼓励我继续创作！</span>
                <div class="word71">赞赏支持</div>
            </div>
            <div class="word8">
                <div class="word81 icon-wodeshoucang"><p>喜欢</p> &nbsp;|&nbsp; <span>255</span></div>
                <div class="word82">
                    <div class="word83 icon-weixin"></div>
                    <div class="word83 icon-0025"></div>
                    <div class="word83 icon-qq3"></div>
                </div>
            </div>
            <div class="comment">
                <div class="geren">
                    <div class="gerenImg">
                        <img src="<?php echo IMG_URL;?>
/ui-sam.jpg" alt="">
                    </div>
                    <textarea name="" class="messageCon" cols="30" rows="10" placeholder="写下你的评论..."></textarea>
                </div>
                <div class="fabu" style="margin-bottom: 50px">
                    <button type="submit" class="sendMessage">发送</button>
                </div >

            </div>

        </div>
        <div class="ajaxcon">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['comment']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
    </main>
</section>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<style>
        .notice{
            width:150px;height:50px;
            background: rgba(0,0,0,.6);
            position: fixed;
            left:0;top:0;right:0;bottom: 0;
            margin:auto;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            color:#fff;
            border-radius: 5px;

            opacity: 0;



        }
    @keyframes notice {
            0%{

                opacity: 0;
            }

            50%{

                opacity: 1;
            }
            100%{
                opacity: 0;
            }
    }
</style><?php }
}
