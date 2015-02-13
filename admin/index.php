<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言管理</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        .STYLE2 {color: #990000; }
        .STYLE3 {
            font-size: 14px;
            color: #990000;
            font-weight: bold;
        }
        -->
    </style></head>

<body>
<p>
    <?php
    include("header.php");
    include("header1.php");
    ?>
</p>
<table width="800" height="116" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="50" colspan="4"><div align="center"><span class="STYLE3">留言管理</span></div></td>
    </tr>
    <tr>
        <td width="180"><div align="center" class="STYLE2">
                <div align="left">留言IP</div>
            </div></td>
        <td width="247"><div align="center" class="STYLE2">
                <div align="left">留言主题</div>
            </div></td>
        <td width="273"><div align="center" class="STYLE2">
                <div align="left">留言内容</div>
            </div></td>
        <td width="100"><div align="center" class="STYLE2">操作</div></td>
    </tr>
    <?php
    if(isset($_SESSION['name']) and $_SESSION['name']!=null){
        $select=$db->select("message","");
        while($array=$db->arr_ay($select)){
            ?>
            <tr>
                <td><?php echo $array['ip'];?></td>
                <td><?php echo $array['title'];?></td>
                <td><?php echo $array['content'];?></td>
                <td><div align="center"><a href="delete3.php?id=<?php echo $array['id'];?>">删除</a></div></td>
            </tr>
        <?php
        }
    }else{
        echo "<script>alert('请先登录！');window.location.href='admin.php'</script>";
    }
    ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
include("footer.php");
?>
</body>
</html>
