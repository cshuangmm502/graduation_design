<?php
/* Smarty version 3.1.30, created on 2019-04-29 14:01:48
  from "G:\phpStormProjects\test\static\login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cc703cc8d4ae5_93797036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a89df521b3957dc4018851407201a495eddd512' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\login\\login.html',
      1 => 1527062063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc703cc8d4ae5_93797036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../static/login/css/style.css" rel='stylesheet' type='text/css'/>
    <?php echo '<script'; ?>
 src="../lib/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="application/x-javascript">

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        $(document).ready(function () {
            $("#submit_button").click(function (e) {
                if($("#username").val()==""||$("#password").val()==""){
                    alert('账号密码不能为空');
                    e.preventDefault();
                }
            })
        })

        function GetQueryString(name)
        {
            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if(r!=null)return  decodeURI(r[2]); return null;
        }
        if(GetQueryString('error')==1){
            alert("账号密码错误");
        }

    <?php echo '</script'; ?>
>
</head>
<body>
<!--SIGN UP-->
<h1>广告监测系统</h1>
<div class="login-form">
    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"></div>
    <div class="avtar">
        <img src="../static/login/images/avtar.png"/>
    </div>
    <form autocomplete="off" action="../static/login/login.php" method="post">

        <input type="text" id="username" class="text"  placeholder="Username" name="username">

        <input type="password" placeholder="Password" id="password" name="password">
        <div class="signin">
            <input type="submit" value="Login" id="submit_button">
        </div>
    </form>
</div>
</body>
</html><?php }
}
