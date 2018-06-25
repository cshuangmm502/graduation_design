<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/5/22
 * Time: 0:42
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');


class userAdd extends BaseApp{
    function outputHead()
    {
        $smarty =new Smarty();
        $smarty->display('../static/common/head.tpl');
    }

    function outputBody()
    {
        $smarty = new Smarty();
        $smarty->display('../static/backStage/userAdd.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}

$key=isset($_GET['key'])&&!empty($_GET['key'])?$_GET['key']:0;
if($key==0){
    $obj =new userAdd();
    $obj->run();
}else if($key==1){
//注册数据库逻辑部分
}

