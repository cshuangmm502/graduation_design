<?php
/* Smarty version 3.1.30, created on 2019-04-29 14:33:40
  from "G:\phpStormProjects\test\static\backStage\userAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cc70b44980140_72701003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd64b30fae43294e680be2a8e63a1d9912fdc23' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\backStage\\userAdmin.html',
      1 => 1527064566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc70b44980140_72701003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>UserAdmin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="../lib/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">


    <!-- FontAwesome Styles-->
    <link href="../static/backStage/css/font-awesome.css" rel="stylesheet"/>

    <!-- Custom Styles-->
    <link href="../static/backStage/css/custom-styles.css" rel="stylesheet"/>

    <!-- Bootstrap Admin Theme -->
    <link href="../static/backStage/css/bootstrap-admin-theme.css" rel="stylesheet" media="screen">

    <!-- TABLE STYLES-->
    <link href="../static/backStage/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- (...) -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
       <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/html5shiv.js"><?php echo '</script'; ?>
>-->
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/respond.min.js"><?php echo '</script'; ?>
>-->
    <!--<![endif]&ndash;&gt;-->
</head>
<body class="bootstrap-admin-with-small-navbar">

<div class="container">
    <!-- left, vertical navbar & content -->
    <div class="row">
        <!-- left, vertical navbar -->
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li>
                    <a href="backStageDefault.php"><i class="glyphicon glyphicon-chevron-right "></i> 首页</a>
                </li>
                <li class="active">
                    <a><i class="glyphicon glyphicon-chevron-right"></i> 用户管理</a>
                </li>
                <li class="disabled">
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 统计图表</a><!-- stats.html -->
                </li>
                <li>
                   <a href="dataAdmin.php"><i class="glyphicon glyphicon-chevron-right"></i>数据管理</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">12</span> 用户</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">4</span> 操作日志</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            用户账户管理
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button class="btn" id="add_user_btn">添加用户</button>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>userId</th>
                                            <th>userName</th>
                                            <th>levelPower</th>
                                            <th>lastSignIn</th>
                                            <th>option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userlist']->value, 'user', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                        <tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            <td><button class="btn" id="test_btn" style="text-align: center">details</button></td>
                                        </tr>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>


<!-- JS Scripts-->
<!-- jQuery Js -->
<?php echo '<script'; ?>
 type="text/javascript" src="../lib/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap Js -->
<?php echo '<script'; ?>
 type="text/javascript" src="../lib/bootstrap-3.3.7-dist/js/bootstrap.js"><?php echo '</script'; ?>
>
<!-- Metis Menu Js -->
<?php echo '<script'; ?>
 src="../static/backStage/css/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<!-- DATA TABLE SCRIPTS -->
<?php echo '<script'; ?>
 src="../static/backStage/css/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../static/backStage/css/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    $(document).ready(function () {
        $('#dataTables-example').dataTable({
            "searching":false
        });
    });

    $("#add_user_btn").click(function (e) {
        location.href="userAdd.php"
    })

    prenode=document.getElementById("dataTables-example");
    node=prenode.getElementsByClassName("btn");
    $(node).each(function (k,v) {
        $(v).click(function (e) {
            var row=$("table#dataTables-example tr").index($(this).closest("tr"));
            var name=$("table#dataTables-example").find("tr").eq(row).find("td").eq(1).text();
            var id=$("table#dataTables-example").find("tr").eq(row).find("td").eq(0).text();
            location.href="userDetail.php?id="+id;
            // alert(name+"的id是:"+id);
        })
    })
<?php echo '</script'; ?>
>
<!-- Custom Js -->
<?php echo '<script'; ?>
 src="../static/backStage/css/custom-scripts.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
