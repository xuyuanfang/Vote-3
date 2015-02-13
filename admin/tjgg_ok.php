<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
include("../class/mysql_class.php");
date_default_timezone_set('PRC');
$date=date(Y."年".m."月".d."日".G."时".i."分");
if(isset($_SESSION['name']) and $_POST['zt']!=null and $_POST['nr']!=null){
    $insert=$db->insert("announcement","title,content,pub_date,pub_user,is_available","'".$_POST['zt']."','".$_POST['nr']."','$date','".$_SESSION['name']."'".",1");
    echo "<script>alert('公告添加成功！');window.location.href='gonggao.php'</script>";
}