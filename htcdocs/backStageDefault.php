<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/3/26
 * Time: 11:03
 */

include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class backStageDefault extends BaseApp{
    function outputBody()
    {
        $smarty =new Smarty();
        $smarty->display('../static/backStage/index.html');
    }
}

$obj = new backStageDefault();
$obj->run();