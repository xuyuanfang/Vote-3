<?php
require("class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>投票处理页</title>
</head>

<body>
<?php
$ip=$_SERVER['REMOTE_ADDR'];   //获取客户端IP地址
date_default_timezone_set('PRC');
$date=date(Y."年".m."月".d."日".G."时".i."分");
if(isset($_POST['Submit']) and $_POST['Submit']=="投票"){
    $sel=$db->select("user_ip","where ip_address='$ip' and title='".$_POST['title']."'");		//执行查询语句
    $row=$db->rows($sel);			//获取查询记录数
    if($row>=1){			//判断是否存在
        echo "<script>alert('您已经投过票了！');window.location.href='index.php';</script>";
    }else{

        $update=$db->update("vote_option","count=count+1","'".$_POST['radios']."'");
        $insert=$db->insert("user_ip","ip_address,title,content,date","'$ip','".$_POST['title']."','".$_POST['radios']."','$date'");
        echo "<script>alert('投票成功！');window.location.href='index.php';</script>";
    }
}
?>
</body>
</html>
