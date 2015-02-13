<?php
/**
 * Created by PhpStorm.
 * User: ren
 * Date: 15/2/13
 * Time: 下午2:50
 */

header("Content-Type:text/html;charset=utf-8");
session_start();
include("../class/mysql_class.php");
if(isset($_GET['theme_id'])){
    $select=$db->select("vote_option","where theme_id=".$_GET['theme_id']."");
    $array=$db->arr_ay($select);
    $count=$db->rows($select);
    $arr=array();
    for($i=0;$i<$count;$i++)
    {
        $name=$array["option_name"];
        $id=$array["id"];
        $arr[$id]=$name;
        $array=$db->arr_ay($select);
    }
    $_SESSION['theme_id']=$_GET['theme_id'];
    $jsonencode = json_encode($arr);
    echo $jsonencode;
}