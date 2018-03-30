<?php
/* Smarty version 3.1.30, created on 2018-03-29 06:32:56
  from "G:\phpStormProjects\test\static\backStage\default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abc8898c2aab0_67524966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05972f3dba2b6aa1f9fd2b2f41464931b1ece7cf' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\backStage\\default.html',
      1 => 1522224067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abc8898c2aab0_67524966 (Smarty_Internal_Template $_smarty_tpl) {
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

    <!-- Bootstrap Admin Theme -->
    <link href="../static/backStage/css/bootstrap-admin-theme.css" rel="stylesheet" media="screen">

    <!-- Vendors -->
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
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top " role="navigation">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Boot3Admin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="#">关于我们</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">下拉菜单<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="请输入内容">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">管理员<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">设置</a></li>
                            <li><a href="#">个人资料</a></li>
                            <li><a href="#">账户中心</a></li>
                            <li class="divider"></li>
                            <li><a href="#">退出登录</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
</nav>

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
                    <a href=""><i class="glyphicon glyphicon-chevron-right"></i> 账号管理</a>
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
                    <a href=""><i class="glyphicon glyphicon-chevron-right"></i> 按钮 &amp; 图标</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">812</span> 清单</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">1,234</span> 用户</a>
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
                    <a href="#"><span class="badge pull-right">4,231</span> 日志</a>
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
                    <div class="bootstrap-admin-panel-content text-muted" style="padding: 60px 0; text-align: center">
                        这里是你要显示的内容
                    </div>
                </div>
            </div>

            <div class="row bootstrap-admin-no-edges-padding">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">用户</div>
                            <div class="pull-right"><span class="badge">1,234</span></div>
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
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Vincent</td>
                                    <td>Gabriel</td>
                                    <td>@gabrielva</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">订单</div>
                            <div class="pull-right"><span class="badge">752</span></div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Coat</td>
                                    <td>02/02/2013</td>
                                    <td>$25.12</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacket</td>
                                    <td>01/02/2013</td>
                                    <td>$335.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Shoes</td>
                                    <td>01/02/2013</td>
                                    <td>$29.99</td>
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
