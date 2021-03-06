<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/10
 * Time: 16:01
 */
include '../config.php';
include '../log/log.php';

header('Content-Type:application/json;charset=utf-8');
/* 遍历$_REQUEST */
$array=array();
$array['val']=new ArrayObject();
foreach ($_REQUEST as $key => $value){
    $array[$key]= $value;
}

$val=json_encode($array['val']);//二维数组 属性值转json类型
$val=json_decode($val);
$val=json_encode($val,JSON_UNESCAPED_UNICODE);//中文转换格式

$sel="select *,count(*) as count from workpiece,work where work.id=workpiece.type and work.id ={$array['type']}";
$result = $mysqli->query($sel);
$nu=$result->fetch_array();
$name=$nu[7].$nu[8];

$sek_weld="select attribute from weld_type where id={$array['weld']}";
$res=$mysqli->query($sek_weld);
$attr=$res->fetch_assoc();
//$attr=json_decode($attr['attribute']);
$array=array_merge($array, array('attr' => json_decode($attr['attribute'])));//合并数组

$date=json_encode($array);//转json类型

$sql = "insert into workpiece(name,type,attribute,weld_type,machine) values ('{$name}','{$array['type']}','{$val}','{$array['weld']}','{$array['machine']}')";
$result = $mysqli->query($sql);

//$val=json_encode($val);
if ($result) {
    $insert_id=$mysqli->insert_id;//返回新增ID
    addLog($mysqli, $_SESSION['name'], "report", 'add', "数据发送成功");
    echo $date;//输出json数据
    exit();
} else {
    addLog($mysqli, $_SESSION['name'], "report", 'add', "数据发送失败");
    echo $date;//输出json数据
    exit();
}
