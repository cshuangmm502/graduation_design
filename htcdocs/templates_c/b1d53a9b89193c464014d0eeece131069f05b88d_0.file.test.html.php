<?php
/* Smarty version 3.1.30, created on 2018-03-10 10:54:02
  from "G:\phpStormProjects\test\static\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa3b94ad10041_65436762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d53a9b89193c464014d0eeece131069f05b88d' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\test.html',
      1 => 1518502086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa3b94ad10041_65436762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>首页</title>
    <!-- 设置文档编码 -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!--  -->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <?php echo '<script'; ?>
 src="../lib/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>-->
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <?php echo '<script'; ?>
 src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
    <!-- CSS样式 -->
    <style type="text/css">
        .container div{
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container">
    <div ><h4>请选择你要进行的操作</h4></div>
    <br/>
    <div ><button type="button" class="btn btn-primary btn-lg btn-block active" onclick="location=''" >我要出租汽车</button></div>
    <br/>
    <div ><button type="button" class="btn btn-primary btn-lg btn-block" disabled="disabled" onclick="location=''">我要租赁汽车</button></div>
</div>
</body>
</html><?php }
}
