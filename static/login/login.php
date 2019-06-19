<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/3/11
 * Time: 20:53
 */

$con = new mysqli('47.93.13.87', 'root', '123', 'graduation_design');
if (!$con) {
    die("connect error:" . mysqli_connect_error());
}

$username=$_POST['username'];
$pwd=$_POST['password'];

$sql="select * from user_list WHERE userName = '{$username}' AND passWord = '{$pwd}'";
$result = mysqli_query($con,$sql);
$obj = mysqli_fetch_object($result);
//var_dump($obj->levelPower);
//var_dump(mysqli_num_rows($result));
if(mysqli_num_rows($result)){
    header('location:../../htcdocs/backStageDefault.php?user='.$username.'&levelPower='.$obj->levelPower);
}else{
    header("location:../../htcdocs/index.php?error=1");
    exit();
}

//$con = new mysqli('120.79.8.109','root','123456','test');
//if (!$con) {
//    die("connect error:" . mysqli_connect_error());
//}

//$js = '{"demo":[{"add":"","name":"a","value":"11"},{"add":"2","name":"newbee","value":"17"}
//,{"add":"3","name":"ooo","value":"2222"},{"add":"4","name":"123","value":"32"}]}';
//$js=json_encode($js);
//var_dump($js);
//$js=json_decode($js,true);
//var_dump($js);
//$add='333';
//$name='new';
//$value='555';
//$sql = "INSERT INTO test1(name,value) VALUES ('".$name."','".$value."')";
//if (!mysqli_query($con,$sql))
//{
//    die('Error: ' . mysqli_error($con));
//}
