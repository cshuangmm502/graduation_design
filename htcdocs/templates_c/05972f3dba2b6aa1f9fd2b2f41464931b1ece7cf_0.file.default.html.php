<?php
/* Smarty version 3.1.30, created on 2018-04-07 16:13:03
  from "G:\phpStormProjects\test\static\backStage\default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8ee0f707718_90592155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05972f3dba2b6aa1f9fd2b2f41464931b1ece7cf' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\backStage\\default.html',
      1 => 1522721476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac8ee0f707718_90592155 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>空白页面_Bootstrap3响应式后台主题模板Boot3Admin - cssmoban</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="../lib/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">


    <!-- FontAwesome Styles-->
    <link href="../static/backStage/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom Styles-->
    <link href="../static/backStage/css/custom-styles.css" rel="stylesheet" />

    <!-- Bootstrap Admin Theme -->
    <link href="../static/backStage/css/bootstrap-admin-theme.css" rel="stylesheet" media="screen">

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
                <li class="active">
                    <a href=""><i class="glyphicon glyphicon-chevron-right "></i> 首页</a>
                </li>
                <li>
                    <a href="userAdmin.php"><i class="glyphicon glyphicon-chevron-right"></i> 用户管理</a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 日历</a><!-- calendar.html -->
                </li>
                <li class="disabled">
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 统计图表</a><!-- stats.html -->
                </li>
                <li>
                    <a href=""><i class="glyphicon glyphicon-chevron-right"></i> 表单</a>
                </li>
                <li>
                    <a href=""><i class="glyphicon glyphicon-chevron-right"></i> 数据表格</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">812</span> 清单</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">1234</span> 用户</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">2,221</span> 消息</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">11</span> 报告</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">83</span> 错误</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">4,231</span> 操作日志</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <div class="col-md-10">
            <div class="row">
                <div class="alert alert-success bootstrap-admin-alert">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <h4>登陆成功</h4>
                    欢迎<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
！
                </div>
            </div>


            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">数据统计</div>
                    </div>

                    <div></div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-green" style="margin-top: 20px">
                                <div class="panel-body">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                    <h3>1</h3>
                                </div>
                                <div class="panel-footer back-footer-green">
                                    Ad Accounts

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-blue" style="margin-top: 20px">
                                <div class="panel-body">
                                    <i class="fa fa-html5 fa-5x"></i>
                                    <h3>1</h3>
                                </div>
                                <div class="panel-footer back-footer-blue">
                                    Html Accounts

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-red" style="margin-top: 20px">
                                <div class="panel-body">
                                    <i class="fa fa fa-comments fa-5x"></i>
                                    <h3>1 </h3>
                                </div>
                                <div class="panel-footer back-footer-red">
                                    Messages

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-brown" style="margin-top: 20px">
                                <div class="panel-body">
                                    <i class="fa fa-users fa-5x"></i>
                                    <h3>1 </h3>
                                </div>
                                <div class="panel-footer back-footer-brown">
                                    User Accounts

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bootstrap-admin-no-edges-padding">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">用户</div>
                            <div class="pull-right"><span class="badge">1234</span></div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Terryblade</td>
                                    <td>Huang</td>
                                    <td>@test</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Terryblade</td>
                                    <td>Huang</td>
                                    <td>@test</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Terryblade</td>
                                    <td>Huang</td>
                                    <td>@test</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">操作记录</div>
                            <div class="pull-right"><span class="badge">752</span></div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Add advertisement</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Add advertisement</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Add advertisement</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Add advertisement</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="../lib/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../lib/bootstrap-3.3.7-dist/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
