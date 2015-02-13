<?php
header("Content-Type:text/html;charset=utf-8");
require("class/mysql_class.php");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('PRC');
$date=date(Y."年".m."月".d."日".G."时".i."分");
if($_POST['lytitle']!=null and $_POST['lycontent']!=null){
    $insert=$db->insert("message","title,content,msg_time,ip","'".$_POST['lytitle']."','".$_POST['lycontent']."','$date','$ip'");
    echo "<script>alert('留言成功！');window.location.href='index.php'</script>";
}else{
    echo "<script>alert('请填写留言内容！');window.location.href='liuyan.php'</script>";
}
?>	
