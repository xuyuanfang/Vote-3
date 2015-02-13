<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <style type="text/css">
        <!--
        .STYLE2 {color: #990000; }
        .STYLE3 {	font-size: 14px;
            color: #990000;
            font-weight: bold;
        }
        body,td,th {
            font-size: 12px;
        }
        -->
    </style>
</head>

<body>
<p>
    <?php
    include("header.php");
    include("header1.php");
    ?>
</p>
<table width="800" height="127" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="50" colspan="4"><div align="center"><span class="STYLE3">投票主题管理</span></div></td>
    </tr>
    <tr>
        <td height="26" colspan="4"><div align="right"><a href="tjzt.php">添加主题</a> <a href="tjxx.php">添加选项</a></div></td>
    </tr>
    <tr>
        <td width="278" height="25"><div align="left"><span class="STYLE2">主题名称</span></div></td>
        <td width="127"><div align="center" class="STYLE2">
                <div align="left">发布人</div>
            </div></td>
        <td width="156"><div align="center" class="STYLE2">
                <div align="left">发布日期</div>
            </div></td>
        <td width="239"><div align="center" class="STYLE2">操作</div></td>
    </tr>
    <?php
    if(isset($_SESSION['name']) and $_SESSION['name']!=null){
        $select=$db->select("vote","");
        while($array=$db->arr_ay($select)){
            ?>
            <tr>
                <td height="26"><?php echo $array['title'];?></td>
                <td><?php echo $array['pub_user'];?></td>
                <td><?php echo $array['date'];?></td>
                <td><div align="center"><a href="delete.php?id=<?php echo $array['id'];?>">删除</a></div></td>
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
<?php
include("footer.php");
?>
</body>
</html>
