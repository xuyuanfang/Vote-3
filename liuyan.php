<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言板</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        -->
    </style></head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<form id="form1" name="form1" method="post" action="liuyan_ok.php">
    <table width="684" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="75" height="40">留言主题：</td>
            <td><input name="lytitle" type="text" id="lytitle" size="40" /></td>
        </tr>
        <tr>
            <td height="212">留言内容：</td>
            <td><textarea name="lycontent" cols="60" rows="14" id="lycontent"></textarea></td>
        </tr>
        <tr>
            <td height="48" colspan="2"><div align="center">
                    <input type="submit" name="Submit" value="提交" />
                </div></td>
        </tr>
    </table>
</form>
<?php
include("footer.php");
?>
</body>
</html>
