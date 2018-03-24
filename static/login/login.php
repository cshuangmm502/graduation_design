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
if(mysqli_num_rows($result)==1){
    echo "login success";
}else{
    header("location:../../htcdocs/index.php?error=1");
    exit();
}