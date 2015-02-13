<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加选项</title>
    <style type="text/css">
        <!--
        .STYLE3 {font-size: 14px; color: #990000; }
        .STYLE4 {font-size: 14px; color: #990000; font-weight: bold; }
        .STYLE6 {font-size: 14px}
        -->
    </style>
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
    <script>
            $(function(){
            ajax();
            $("#form1").keypress(function(e) {
                if (e.which == 13) {
                    return false;
                }
            });
        });
        function keypress_event()
        {
            $("#Submit").click();
        }
        function edit_enterevent(id)
        {
            $("#input_btn_"+id).click();
        }
        function ajax()
        {
            var theme_id=$('#theme_select').val();
            //alert(theme_id);
            $("#options").empty();
            $.ajax({
                type: "GET",
                url: "options.php",
                data: {theme_id:theme_id},
                dataType: "json",
                success: function(data){
                    var i=0;
                    var div;

                    $.each(data, function(id, item){
                        //alert(i+" "+item);
                        i++;
                        var parentdiv=$('<div></div>');        //创建一个父div
                        parentdiv.attr('id','option_'+id);        //给父div设置id
                        var childp=$("<p></p>");
                        var childspan1=$("<span class='STYLE3'>选项"+i+":</span>");
                        var childinput=$("<input class='STYLE6' id='input_"+id+"' style='text-align:center' onkeydown='if(event.keyCode==13){edit_enterevent("+id+");}' value='"+item+"'></input>");
                        childinput.attr("readonly","readonly");
                        var childbtn_edit=$("<input type='button' id='input_btn_"+id+"'  onclick='editoption("+id+");' value='编辑'/>");
                        var childbtn=$("<input type='button' onclick='deloption("+id+");' value='删除'/>");
                        childspan1.appendTo(childp);
                        childinput.appendTo(childp);
                        childbtn_edit.appendTo(childp);
                        childbtn.appendTo(childp);
                        childp.appendTo(parentdiv);
                        parentdiv.appendTo($("#options"));
                    });
                    var parentdiv=$('<div></div>');        //创建一个父div
                    parentdiv.attr('id','optionnew');        //给父div设置id
                    var childp=$("<p></p>");
                    var childspan1=$("<span class='STYLE3'>新选项</span>");
                    var childinput=$("<input name='xx[]' type='text' id='xx[]' onkeydown='if(event.keyCode==13){keypress_event();}' />");
                    childspan1.appendTo(childp);
                    childinput.appendTo(childp);
                    childp.appendTo(parentdiv);
                    parentdiv.appendTo($("#options"));

                }

            });
        }
        function selectChanged()
        {
            ajax();
        }
        function editoption(id)
        {
            if($("#input_btn_"+id).val()=="编辑")
            {
                $("#input_"+id).removeAttr("readonly");
                $("#input_btn_"+id).val("确定");
                $("#input_"+id).select().focus();
            }
           else if($("#input_btn_"+id).val()=="确定")
            {
                val=$("#input_"+id).val();
                $.ajax({
                    type: "GET",
                    url: "editoption.php",
                    data: {option_id:id,value:val},
                    success: function(data) {

                        if (data == 'success'){
                            alert("编辑成功");
                            location.reload();
                        }
                    }
                });
            }
        }
        function deloption(id)
        {
            $.ajax({
                type: "GET",
                url: "deloption.php",
                data: {option_id:id},
                success: function(data) {
                    if (data == 'success'){
                        alert("删除成功");
                        location.reload();
                    }
                }
                });

        }
        function checkValue()
        {
            if($("#optionnew").val()=="" &&  $("#optionnew").text()=="")
            {
                alert("不能提交空内容!");
                return false;
            }
            else
            {
                return true;
            }

        }
    </script>
</head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<?php
if(isset($_SESSION['name']) and $_SESSION['name']!=null){
    $select=$db->select("vote","where id order by id desc");
}
?>
<form id="form1" name="form1" method="post" action="tjxx_ok.php" onSubmit="return checkValue();">
    <table width="566" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="54" colspan="2"><div align="center" class="STYLE4">添加选项</div></td>
        </tr>
        <tr>
            <td width="401" height="78"><div align="center"><span class="STYLE3">主题：</span>
                    <select id="theme_select" name="select" onchange="selectChanged();">
                        <?php
                        while($array=$db->arr_ay($select)){
                            if($array['id']!=$_SESSION['theme_id'])
                            {
                            ?>
                            <option value="<?php echo $array['id'];?>"><?php echo $array['title'];?></option>

                        <?php
                            }
                            else
                            {
                                ?>
                                <option selected="selected" value="<?php echo $array['id'];?>"><?php echo $array['title'];?></option>
                            <?php
                            }
                        }
                        ?>
                    </select>

                </div></td>
            <td width="165"><div align="center"></div></td>
        </tr>

        <tr>
            <td height="78">
                <div align="center" id="options">

                </div></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="38" colspan="2"><div align="center">
                    <input type="submit" id="Submit" name="Submit" value="提交"/>
                </div></td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</form>
<?php
include("footer.php");
?>
</body>
</html>
