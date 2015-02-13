<?php
session_start();
include("../class/mysql_class.php");
if(isset($_SESSION['name']) and $_SESSION['name']!=null){
    $delete=$db->del("vote","id='".$_GET['id']."'");
    echo "<script>window.location.href='tpzt.php'</script>;";
}
?>