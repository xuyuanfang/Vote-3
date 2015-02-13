<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加公告</title>
    <style type="text/css">
        <!--
        .STYLE1 {
            font-size: 14px;
            font-weight: bold;
            color: #990000;
        }
        .STYLE2 {font-size: 12px}
        .STYLE3 {font-size: 12px; font-weight: bold; color: #990000; }
        -->
    </style>
</head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<form id="form1" name="form1" method="post" action="tjgg_ok.php">
    <table width="561" height="289" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="47" colspan="2"><div align="center" class="STYLE3">添加公告</div></td>
        </tr>
        <tr>
            <td width="98"><span class="STYLE2">公告主题：</span></td>
            <td width="463"><input name="zt" type="text" id="zt" size="40" /></td>
        </tr>
        <tr>
            <td height="172"><span class="STYLE2">公告内容：</span></td>
            <td><textarea name="nr" cols="55" rows="10" id="nr"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
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
