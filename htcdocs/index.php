<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/2/9
 * Time: 12:38
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class index extends BaseApp{
    public $error=null;
    function getInformation()
    {
        $this->error=$_GET['error'];
    }

    function outputBody()
    {
        $smarty = new Smarty();
        if($this->error){
            $smarty->assign("test", $this->error);
        }
        $smarty->display('../static/login/index.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/foot.tpl');
    }
}

$obj=new index();
$obj->run();



