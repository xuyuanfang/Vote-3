
<?php
header("Content-Type:text/html;charset=utf-8");
include("../class/mysql_class.php");
if(isset($_POST['Submit']) and !empty($_POST['Submit'])){
    $select=$db->select("vote","where id=".$_POST['select']."");
    $array=$db->arr_ay($select);
    for($i=0;$i<count($_POST['xx']);$i++){
        $_POST['xx'][$i];
        $insert=$db->insert("vote_option","option_name,vote_title,theme_id,count","'".$_POST['xx'][$i]."','".$array['title']."','".$_POST['select']."','0'");
    }
    echo "<script>alert('添加成功！');window.location.href='tpzt.php'</script>";
}else{
    echo "<script>alert('选项不能为空！');history.go(-1);</script>";
}