<?php
/**
 * Created by PhpStorm.
 * User: ren
 * Date: 15/2/13
 * Time: 下午5:17
 */
header("Content-Type:text/html;charset=utf-8");
session_start();
include("../class/mysql_class.php");
if(isset($_GET['option_id'])){
    $result=$db->del("vote_option","id=".$_GET['option_id']);
    $re="success";
    echo $re;
}