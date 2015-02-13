<?php require("class/mysql_class.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>投票首页</title>
    <style type="text/css">
        <!--
        .STYLE1 {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 14px;
        }
        body,td,th {
            font-size: 12px;
        }
        .STYLE5 {color: #FF0000}
        .STYLE6 {
            font-size: 14px;
            font-weight: bold;
            color: #990000;
        }
        .STYLE7 {
            color: #993300;
            font-weight: bold;
        }
        a:link {
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        a:active {
            text-decoration: none;
        }
        .STYLE8 {
            color: #990033;
            font-weight: bold;
        }
        .STYLE9 {color: #F39500}
        .STYLE10 {color: #990000}
        -->
    </style>
</head>

<body>
<?php
include("header.php");
include("header1.php");
?>

<table width="1000" height="336" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="40" colspan="4" valign="middle" background="images/huitiao.gif"><blockquote>
                <p align="justify" class="STYLE5">欢迎使用明日投票管理系统！现在时间：<?php date_default_timezone_set('PRC');
                    $date=date(Y."年".m."月".d."日".G."时".i."分"); echo $date;?></p>
            </blockquote>
            <p align="center"><img src="images/shangxian.gif" width="966" height="2" /></p>    </td>
    </tr>
    <tr>
        <td width="217" height="180" rowspan="2" align="left" valign="top"><p><img src="images/xiaoxi.gif" width="24" height="24" /><span class="STYLE7"> 最新公告</span></p>
            <p><img src="images/xiaxian.gif" width="203" height="2" /></p>
            <table width="203" height="29" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="203" height="29" align="left" valign="top"><div align="center">
                            <p align="left">&nbsp;</p>
                        </div></td>
                </tr>
                <marquee scrollamount="1" scrolldelay="40" direction="up" width="220" height="120" onMouseOver="this.stop()" onMouseOut="this.start()">
                    <?php
                    $select=$db->select("announcement","");
                    while($arr=$db->arr_ay($select)){
                        ?>
                        <div class="divList"><a href="gonggao.php?id=<?php echo $arr['id']?>" class="hui12"><?php echo $arr['title']?></a></div>
                    <?php
                    }
                    ?>
                </MARQUEE>
            </table></td>
        <td width="5" rowspan="3" valign="middle"><img src="images/shuxian.gif" width="1" height="293" /></td>
        <td width="552" rowspan="3" valign="top">
            <table width="505" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="46" height="33"><div align="center" class="STYLE8">id</div></td>
                    <td width="297"><div align="center" class="STYLE8">主题</div></td>
                    <td width="101"><div align="center" class="STYLE8">发布时间</div></td>
                    <td width="61"><div align="center" class="STYLE8"><img src="images/22.gif" width="45" height="13" /></div></td>
                </tr>
                <tr>
                    <td height="7" colspan="4" align="center" valign="middle"><img src="images/xiaxian.gif" width="500" height="2" /></td>
                </tr>
                <?php
                $sel=$db->select("vote","");
                while($array=$db->arr_ay($sel)){
                    ?>
                    <tr>
                        <td height="30"><?php echo $array['id'];?></td>
                        <td><a href="toupiao.php?id=<?php echo $array['id'];?>"><?php echo $array['title'];?></a></td>
                        <td><?php echo $array['vote_now'];?></td>
                        <td><div align="center" class="STYLE9"><a href="jieguo.php?id=<?php echo $array['id'];?>">结果</a></div></td>
                    </tr>
                <?php
                }
                ?>
            </table></td>
        <td width="226" height="154"><form id="form1" name="form1" method="post" action="sou.php">
                <table width="213" height="135" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="44" bgcolor="#FF9933"><div align="center" class="STYLE6">主题搜索</div></td>
                    </tr>
                    <tr>
                        <td bgcolor="#FF9933"></td>
                    </tr>
                    <tr>
                        <td height="91" bgcolor="#FF9933"><p align="center">
                                <input name="content" type="text" id="content" />
                            </p>
                            <p align="center">
                                <input type="submit" name="Submit" value="提交" />
                            </p></td>
                    </tr>
                </table>
            </form>    </td>
    </tr>

    <tr>
        <td rowspan="2" align="center" valign="middle"><table width="213" height="122" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="32" bgcolor="#FF9933"><div align="center" class="STYLE6">相关下载</div></td>
                </tr>
                <tr>
                    <td bgcolor="#FF9933"></td>
                </tr>
                <tr>
                    <td height="90" bgcolor="#FF9933"><p align="center" class="STYLE10">暂无下载内容！</p>          </td>
                </tr>
            </table></td>
    </tr>
    <tr>
        <td height="140" valign="top"><table width="203" height="134" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="203" height="48" align="left" valign="bottom"><p><img src="images/lianxiwomen.gif" width="28" height="24" /> <span class="STYLE7">联系我们</span></p>
                        <p><img src="images/xiaxian.gif" width="203" height="2" /></p></td>
                </tr>
                <tr>
                    <td height="86"><div align="center">
                            <p>QQ：200958604</p>
                            <p><a href="http://www.mrbccd.com">http://www.mrbccd.com</a></p>
                        </div></td>
                </tr>
            </table></td>
    </tr>
</table>
<?php
include("footer.php");
?>
</body>
</html>
