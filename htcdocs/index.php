<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/2/9
 * Time: 12:38
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->assign("test", "test");
$smarty->display('../static/login/index.html');



