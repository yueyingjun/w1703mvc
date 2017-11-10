<?php
/* Smarty version 3.1.30, created on 2017-11-10 07:23:11
  from "/Users/gaoxin/Documents/www/1703/mvc/template/admin/addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0545cfbc07d0_78944057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b291cbb46358497beabc80da1883073eae0491' => 
    array (
      0 => '/Users/gaoxin/Documents/www/1703/mvc/template/admin/addPos.html',
      1 => 1510294879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0545cfbc07d0_78944057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form method="post" action="index.php?m=admin&f=pos&a=addPosCon">
       推荐位名称：

       <input type="text" name="pname"><br>

       <input type="submit" value="添加">
       
   </form>
</body>
</html><?php }
}
