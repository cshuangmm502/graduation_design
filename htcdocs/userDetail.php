<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/5/21
 * Time: 19:44
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class userDetail extends BaseApp{
    public $user_id=null;
    function outputHead()
    {
        $smarty =new Smarty();
        $smarty->display('../static/common/head.tpl');
    }

    function outputBody()
    {
        $this->user_id = isset($_GET['id'])&&!empty($_GET['id'])?$_GET['id']:null;
        $_SESSION['user_id']=$this->user_id;
        $con = new mysqli('47.93.13.87', 'root', '123', 'graduation_design');
        if (!$con) {
            die("connect error:" . mysqli_connect_error());
        }
        $sql="select * from user_information WHERE user_id = {$this->user_id}";
        $result = mysqli_query($con,$sql);
        $arr = array();
        while($rows=mysqli_fetch_object($result)){
            $arr[]=array('user_Id'=> $rows->user_id,
                'user_Name'=> $rows->user_name,
                'user_Age'=> $rows->user_age,
                'user_Phone'=> $rows->user_phone,
                'user_Birth'=> $rows->user_birth,
                'user_Email'=> $rows->user_email,
                'user_Identity'=>$rows->user_identity);
        }
        $smarty = new Smarty();
        $smarty->assign("user_information",$arr);
        $smarty->display('../static/backStage/userDetail.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}

$obj =new userDetail();
$obj->run();