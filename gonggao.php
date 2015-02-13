<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>公告内容</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        -->
    </style></head>

<body>
<?php
if(isset($_GET['id'])){
    echo "<script>alert('对不起！公告内容未开通！');window.location.href='index.php';</script>";
}
?>
</body>
</html>
