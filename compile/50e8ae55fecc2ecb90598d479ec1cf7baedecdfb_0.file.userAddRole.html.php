<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:26:26
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/userAddRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03cae2c97a47_87119296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e8ae55fecc2ecb90598d479ec1cf7baedecdfb' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/userAddRole.html',
      1 => 1510197970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03cae2c97a47_87119296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="index.php?m=admin&f=user&a=addRoleCon" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">角色名称</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="角色名称" name="rname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">发布文章的数量</label>

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="写入文章的最少发布数量" name="connum">
            </div>

            <div class="form-group">
                <label>查看文章的级别</label>
            </div>

            <label for="one">普通 :</label> <input type="radio"  name="conlevel" value="1" id="one">

            <label>精华 :<input type="radio"  name="conlevel" value="2"></label>

           <label> 极品 :<input type="radio"  name="conlevel" value="3"></label>

            <br>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html><?php }
}
