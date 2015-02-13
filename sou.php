<?php include("class/mysql_class.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>搜索</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        .STYLE1 {color: #990000}
        .STYLE3 {color: #990000; font-weight: bold; }
        -->
    </style></head>

<body>
<p>
    <?php
    include("header.php");
    include("header1.php");
    ?>
    <?php
    if(isset($_POST['content']) and $_POST['content']!=null){
    ?>
</p>
<table width="1000" height="106" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="32" colspan="4" class="STYLE1"><blockquote>
                <p><span class="STYLE3">搜索的内容：<span class="STYLE3"><?php echo $_POST['content'];?></p>
            </blockquote></td>
    </tr>
    <tr>
        <td width="27" height="31"><div align="left"></div></td>
        <td width="83"><div align="center" class="STYLE1">
                <div align="left"><span class="STYLE3">id</div>
            </div></td>
        <td width="692"><div align="center" class="STYLE1">
                <div align="left"><span class="STYLE3">投票主题</div>
            </div></td>
        <td width="198"><div align="center" class="STYLE1"><span class="STYLE3">结果</div></td>
    </tr>
    <?php
    $select=$db->select("vote","where title like '%".$_POST['content']."%'");
    $row=$db->rows($select);
    if($row>=1){
        while($array=$db->arr_ay($select)){
            ?>
            <tr>
                <td>&nbsp;</td>
                <td><?php echo $array['id'];?></td>
                <td><a href="toupiao.php?id=<?php echo $array['id'];?>"><?php echo $array['title'];?></a></td>
                <td><div align="center"><a href="jieguo.php?id=<?php echo $array['id'];?>">结果</a></div></td>
            </tr>
        <?php
        }
    }else{
        echo "没有您要查找的内容！";
    }
    ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
include("footer.php");
}else{
    echo "<script>alert('请输入查询关键字！');window.location.href='index.php';</script>";
}
?>
</body>
</html>
