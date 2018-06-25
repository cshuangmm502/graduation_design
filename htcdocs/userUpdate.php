<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/5/22
 * Time: 0:42
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');


class userUpdate extends BaseApp{
    function outputHead()
    {
        $smarty =new Smarty();
        $smarty->display('../static/common/head.tpl');
    }

    function outputBody()
    {
        $smarty = new Smarty();
        $smarty->display('../static/backStage/userUpdate.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}


$obj = new userUpdate();
$obj->run();


