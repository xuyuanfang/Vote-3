<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>公告管理</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        .STYLE1 {
            font-size: 14px;
            font-weight: bold;
            color: #990000;
        }
        .STYLE3 {color: #990000}
        .STYLE9 {color: #990000; font-weight: bold; }
        -->
    </style></head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<form id="form1" name="form1" method="post" action="">
    <table width="650" height="130" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="37" colspan="4"><div align="center"><span class="STYLE9">公告管理</span></div></td>
        </tr>
        <tr>
            <td height="40" colspan="4"><div align="right"><a href="tjgg.php">添加公告</a></div></td>
        </tr>
        <tr>
            <td width="211" height="29"><span class="STYLE3">公告主题</span></td>
            <td width="261"><span class="STYLE3">公告内容</span></td>
            <td width="75"><span class="STYLE3">发布人</span></td>
            <td width="103"><div align="center"><span class="STYLE3">操作</span></div></td>
        </tr>
        <?php
        if(isset($_SESSION['name']) and $_SESSION['name']!=null){
            $select=$db->select("announcement","");
            while($array=$db->arr_ay($select)){
                ?>
                <tr>
                    <td height="24"><?php echo $array['title'];?></td>
                    <td><?php echo $array['content'];?></td>
                    <td><?php echo $array['pub_user'];?></td>
                    <td><div align="center"><a href="delete1.php?id=<?php echo $array['id'];?>">删除</a></div></td>
                </tr>
            <?php
            }
        }
        ?>
    </table>
</form>
<?php
include("footer.php");
?>
</body>
</html>
