<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/7/3
 * Time: 13:54
 */
include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

$con = new mysqli('47.93.13.87', 'root', '123', 'pois');
if (!$con) {
    die("connect error:" . mysqli_connect_error());
}

$sql = "select * from poi_detail limit 0,1";
$result = mysqli_query($con, $sql);
$arr = array();
while ($rows = mysqli_fetch_object($result)) {
    //
    $arr[] = array('address' => $rows->address);
}

$str = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $arr[0]['address']);
$str = html_entity_decode($str, null, 'UTF-8');

$smarty = new Smarty();
$smarty->assign("data",$str);
$smarty->display('../static/backStage/test.tpl');