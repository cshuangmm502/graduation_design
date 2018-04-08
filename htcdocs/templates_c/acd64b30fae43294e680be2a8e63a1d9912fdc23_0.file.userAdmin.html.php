<?php
/* Smarty version 3.1.30, created on 2018-04-07 16:37:59
  from "G:\phpStormProjects\test\static\backStage\userAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac8f3e7b85c88_10974984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd64b30fae43294e680be2a8e63a1d9912fdc23' => 
    array (
      0 => 'G:\\phpStormProjects\\test\\static\\backStage\\userAdmin.html',
      1 => 1523119078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac8f3e7b85c88_10974984 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href=""><i class="glyphicon glyphicon-chevron-right"></i> 用户管理</a>
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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tables Page
                            <small>Responsive tables</small>
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Advanced Tables
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>userId</th>
                                            <th>userName</th>
                                            <th>levelPower</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userlist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['userId'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['userName'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['levelPower'];?>
</td>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>

                                        <!--<tr>-->
                                            <!--<th>Rendering engine</th>-->
                                            <!--<th>Browser</th>-->
                                            <!--<th>Platform(s)</th>-->
                                            <!--<th>Engine version</th>-->
                                            <!--<th>CSS grade</th>-->
                                        <!--</tr>-->
                                        <!--</thead>-->
                                        <!--<tbody>-->
                                        <!--<tr class="odd gradeX">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>Internet Explorer 4.0</td>-->
                                            <!--<td>Win 95+</td>-->
                                            <!--<td class="center">4</td>-->
                                            <!--<td class="center">X</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="even gradeC">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>Internet Explorer 5.0</td>-->
                                            <!--<td>Win 95+</td>-->
                                            <!--<td class="center">5</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="odd gradeA">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>Internet Explorer 5.5</td>-->
                                            <!--<td>Win 95+</td>-->
                                            <!--<td class="center">5.5</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="even gradeA">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>Internet Explorer 6</td>-->
                                            <!--<td>Win 98+</td>-->
                                            <!--<td class="center">6</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="odd gradeA">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>Internet Explorer 7</td>-->
                                            <!--<td>Win XP SP2+</td>-->
                                            <!--<td class="center">7</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="even gradeA">-->
                                            <!--<td>Trident</td>-->
                                            <!--<td>AOL browser (AOL desktop)</td>-->
                                            <!--<td>Win XP</td>-->
                                            <!--<td class="center">6</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Firefox 1.0</td>-->
                                            <!--<td>Win 98+ / OSX.2+</td>-->
                                            <!--<td class="center">1.7</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Firefox 1.5</td>-->
                                            <!--<td>Win 98+ / OSX.2+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Firefox 2.0</td>-->
                                            <!--<td>Win 98+ / OSX.2+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Firefox 3.0</td>-->
                                            <!--<td>Win 2k+ / OSX.3+</td>-->
                                            <!--<td class="center">1.9</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Camino 1.0</td>-->
                                            <!--<td>OSX.2+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Camino 1.5</td>-->
                                            <!--<td>OSX.3+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Netscape 7.2</td>-->
                                            <!--<td>Win 95+ / Mac OS 8.6-9.2</td>-->
                                            <!--<td class="center">1.7</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Netscape Browser 8</td>-->
                                            <!--<td>Win 98SE+</td>-->
                                            <!--<td class="center">1.7</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Netscape Navigator 9</td>-->
                                            <!--<td>Win 98+ / OSX.2+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.0</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.1</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.1</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.2</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.2</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.3</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.3</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.4</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.4</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.5</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.5</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.6</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">1.6</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.7</td>-->
                                            <!--<td>Win 98+ / OSX.1+</td>-->
                                            <!--<td class="center">1.7</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Mozilla 1.8</td>-->
                                            <!--<td>Win 98+ / OSX.1+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Seamonkey 1.1</td>-->
                                            <!--<td>Win 98+ / OSX.2+</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Gecko</td>-->
                                            <!--<td>Epiphany 2.20</td>-->
                                            <!--<td>Gnome</td>-->
                                            <!--<td class="center">1.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>Safari 1.2</td>-->
                                            <!--<td>OSX.3</td>-->
                                            <!--<td class="center">125.5</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>Safari 1.3</td>-->
                                            <!--<td>OSX.3</td>-->
                                            <!--<td class="center">312.8</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>Safari 2.0</td>-->
                                            <!--<td>OSX.4+</td>-->
                                            <!--<td class="center">419.3</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>Safari 3.0</td>-->
                                            <!--<td>OSX.4+</td>-->
                                            <!--<td class="center">522.1</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>OmniWeb 5.5</td>-->
                                            <!--<td>OSX.4+</td>-->
                                            <!--<td class="center">420</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>iPod Touch / iPhone</td>-->
                                            <!--<td>iPod</td>-->
                                            <!--<td class="center">420.1</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Webkit</td>-->
                                            <!--<td>S60</td>-->
                                            <!--<td>S60</td>-->
                                            <!--<td class="center">413</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 7.0</td>-->
                                            <!--<td>Win 95+ / OSX.1+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 7.5</td>-->
                                            <!--<td>Win 95+ / OSX.2+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 8.0</td>-->
                                            <!--<td>Win 95+ / OSX.2+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 8.5</td>-->
                                            <!--<td>Win 95+ / OSX.2+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 9.0</td>-->
                                            <!--<td>Win 95+ / OSX.3+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 9.2</td>-->
                                            <!--<td>Win 88+ / OSX.3+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera 9.5</td>-->
                                            <!--<td>Win 88+ / OSX.3+</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Opera for Wii</td>-->
                                            <!--<td>Wii</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Nokia N800</td>-->
                                            <!--<td>N800</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Presto</td>-->
                                            <!--<td>Nintendo DS browser</td>-->
                                            <!--<td>Nintendo DS</td>-->
                                            <!--<td class="center">8.5</td>-->
                                            <!--<td class="center">C/A<sup>1</sup>-->
                                            <!--</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeC">-->
                                            <!--<td>KHTML</td>-->
                                            <!--<td>Konqureror 3.1</td>-->
                                            <!--<td>KDE 3.1</td>-->
                                            <!--<td class="center">3.1</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>KHTML</td>-->
                                            <!--<td>Konqureror 3.3</td>-->
                                            <!--<td>KDE 3.3</td>-->
                                            <!--<td class="center">3.3</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>KHTML</td>-->
                                            <!--<td>Konqureror 3.5</td>-->
                                            <!--<td>KDE 3.5</td>-->
                                            <!--<td class="center">3.5</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeX">-->
                                            <!--<td>Tasman</td>-->
                                            <!--<td>Internet Explorer 4.5</td>-->
                                            <!--<td>Mac OS 8-9</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">X</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeC">-->
                                            <!--<td>Tasman</td>-->
                                            <!--<td>Internet Explorer 5.1</td>-->
                                            <!--<td>Mac OS 7.6-9</td>-->
                                            <!--<td class="center">1</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeC">-->
                                            <!--<td>Tasman</td>-->
                                            <!--<td>Internet Explorer 5.2</td>-->
                                            <!--<td>Mac OS 8-X</td>-->
                                            <!--<td class="center">1</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>NetFront 3.1</td>-->
                                            <!--<td>Embedded devices</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeA">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>NetFront 3.4</td>-->
                                            <!--<td>Embedded devices</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">A</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeX">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>Dillo 0.8</td>-->
                                            <!--<td>Embedded devices</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">X</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeX">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>Links</td>-->
                                            <!--<td>Text only</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">X</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeX">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>Lynx</td>-->
                                            <!--<td>Text only</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">X</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeC">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>IE Mobile</td>-->
                                            <!--<td>Windows Mobile 6</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeC">-->
                                            <!--<td>Misc</td>-->
                                            <!--<td>PSP browser</td>-->
                                            <!--<td>PSP</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">C</td>-->
                                        <!--</tr>-->
                                        <!--<tr class="gradeU">-->
                                            <!--<td>Other browsers</td>-->
                                            <!--<td>All others</td>-->
                                            <!--<td>-</td>-->
                                            <!--<td class="center">-</td>-->
                                            <!--<td class="center">U</td>-->
                                        <!--</tr>-->
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
        $('#dataTables-example').dataTable();
    });
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
