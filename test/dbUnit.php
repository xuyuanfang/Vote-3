<?php
/**
 * Created by PhpStorm.
 * User: ren
 * Date: 15/2/13
 * Time: 下午12:10
 */
require("../class/mysql_class.php");

$db=new Mysql("renhongleiz.mysql.rds.aliyuncs.com:3306","ren","Harry123","db_vote");            //实例化类
//insert语句测试
$result=$db->insert("admin",'username,password',"'ren','harry123'");
$count=$db->rows($result);
$arr=$db->arr_ay($result);

$sql="select * from admin";

/**
 * query语句测试
 */

$result=$db->query($sql);
$count=$db->rows($result);
$arr=$db->arr_ay($result);

while($arr!=null)
{
    var_dump($arr);
    $arr=$db->arr_ay($result);
}
/**
 * select语句测试
 */
$result=$db->select("admin","where id=1");
$count=$db->rows($result);
$arr=$db->arr_ay($result);
while($arr!=null)
{
    var_dump($arr);
    $arr=$db->arr_ay($result);
}


/**
 * update语句测试
 */

$result=$db->update("admin","password='admin123'","username='admin'");
$count=$db->rows($result);
$arr=$db->arr_ay($result);

/**
 * delete语句测试
 */
$result=$db->del("admin","username='ren'");
$count=$db->rows($result);
$arr=$db->arr_ay($result);

/**
 * close语句测试
 */
$db->dbclose();
