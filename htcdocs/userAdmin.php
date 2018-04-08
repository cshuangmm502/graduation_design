<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/4/3
 * Time: 10:11
 */

include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class userAdmin extends BaseApp{
    function outputHead()
    {
        $smarty =new Smarty();
        $smarty->display('../static/common/head.tpl');
    }

    function outputBody()
    {
        $con = new mysqli('47.93.13.87', 'root', '123', 'graduation_design');
        if (!$con) {
            die("connect error:" . mysqli_connect_error());
        }
        $sql="select * from user_list";
        $result = mysqli_query($con,$sql);
        $arr = array();
        while($rows=mysqli_fetch_object($result)){
            $rows = json_encode($rows);
            $arr[] = $rows;
        }
        $smarty =new Smarty();
        $smarty->assign("userlist",$arr);
        $smarty->display('../static/backStage/userAdmin.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}

$obj =new userAdmin();
$obj->run();