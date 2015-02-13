<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include("../class/mysql_class.php");
if(isset($_POST['name']) and isset($_POST['pwd'])){
    $select=$db->select("admin","where username='".$_POST['name']."' and password='".$_POST['pwd']."'");
    $row=$db->rows($select);
    if($row>=1){
        echo "<script>alert('登录成功!');window.location.href='index.php';</script>";
        $_SESSION['name']=$_POST['name'];
    }else{
        echo "<script>alert('用户名和密码不正确!');window.location.href='admin.php';</script>";
    }
}
?>