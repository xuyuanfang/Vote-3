<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员登录</title>
</head>
<script>
    function check(){
        if(form1.name.value==""){
            alert("请输入用户名！");
            form1.pwd.focus;
            return false;
        }
        if(form1.pwd.value==""){
            alert("请输入密码！");
            form1.pwd.focus;
            return false;
        }
        return true;
    }
</script>
<body>
<form id="form1" name="form1" method="post" action="admin_ok.php">
    <table width="1023" height="650" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
        <tr>
            <td colspan="6"><img src="images/dl_01.gif" width="1023" height="297" alt="" /></td>
        </tr>
        <tr>
            <td rowspan="6"><img src="images/dl_02.gif" width="315" height="353" alt="" /></td>
            <td height="28" colspan="4"><input name="name" type="text" id="name" size="34" /></td>
            <td rowspan="6"><img src="images/dl_04.gif" width="468" height="353" alt="" /></td>
        </tr>
        <tr>
            <td colspan="4"><img src="images/dl_05.gif" width="240" height="18" alt="" /></td>
        </tr>
        <tr>
            <td height="27" colspan="4"><input name="pwd" type="password" id="pwd" size="34" /></td>
        </tr>
        <tr>
            <td colspan="4"><img src="images/dl_07.gif" width="240" height="21" alt="" /></td>
        </tr>
        <tr>
            <td width="64" height="49"><input type="image" name="imageField" src="images/dl_08.gif" onclick="return check();" /></td>
            <td rowspan="2"><img src="images/dl_09.gif" width="14" height="259" alt="" /></td>
            <td width="61" height="49"><input type="image" name="imageField2" src="images/dl_10.gif" onclick="form.reset();return false;" /></td>
            <td rowspan="2"><img src="images/dl_11.gif" width="101" height="259" alt="" /></td>
        </tr>
        <tr>
            <td><img src="images/dl_12.gif" width="64" height="210" alt="" /></td>
            <td><img src="images/dl_13.gif" width="61" height="210" alt="" /></td>
        </tr>
    </table>
</form>
</body>
</html>
