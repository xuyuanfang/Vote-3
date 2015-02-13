<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include("../class/mysql_class.php");
if(isset($_SESSION['name']) and $_SESSION['name']!=null){
    $delete=$db->del("announcement","id='".$_GET['id']."'");
    echo "<script>alert('删除成功!');window.location.href='gonggao.php'</script>;";
}