<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/5/22
 * Time: 9:18
 */

$con = new mysqli('47.93.13.87', 'root', '123', 'graduation_design');
if (!$con) {
    die("connect error:" . mysqli_connect_error());
}