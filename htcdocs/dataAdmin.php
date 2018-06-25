<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/4/3
 * Time: 10:11
 */

include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class dataAdmin extends BaseApp{
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
        $sql="select * from ad_data ";
        $result = mysqli_query($con,$sql);
        $arr = array();
        while($rows=mysqli_fetch_object($result)){
            //
            $arr[]=array('numId'=> $rows->num_id,
                'picSrc'=> $rows->pic_src,
                'picWord'=> $rows->pic_word,
                'pic_Origin'=> $rows->pic_origin);
        }

//        var_dump($arr);
        $smarty =new Smarty();
        $smarty->assign("adlists",$arr);
        $smarty->display('../static/backStage/dataAdmin.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}

$obj =new dataAdmin();
$obj->run();