<?php
/* Smarty version 3.1.30, created on 2018-03-22 00:56:37
  from "G:\phpStormProjects\test\static\login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab2ff4503c3a6_66571118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39bd367e973e334edc38996059d544333ef30e5c' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\login\\index.html',
      1 => 1521677577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab2ff4503c3a6_66571118 (Smarty_Internal_Template $_smarty_tpl) {
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
            $("#submit_button").click(function () {
                if($("#username").val()==""||!$("#password").val()==""){
                    $("#username").addClass("key");
                }
            })
        })

    <?php echo '</script'; ?>
>
</head>
<body>
<!--SIGN UP-->
<h1></h1>
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
<?php echo '<script'; ?>
>


<?php echo '</script'; ?>
>
</html><?php }
}
