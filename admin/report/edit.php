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
$date=json_encode($array);//转json类型

$val=json_encode($array['val']);//二维数组 属性值转json类型
$val=json_decode($val);
$val=json_encode($val,JSON_UNESCAPED_UNICODE);

$sel="select *,count(*) as count from workpiece,work where work.id=workpiece.type and workpiece.type ={$array['type']}";
$result = $mysqli->query($sel);
$nu=$result->fetch_array();
$name=$nu[7].$nu[8];

$sql = "insert into workpiece(name,type,attribute,weld_type,machine) values ('{$name}','{$array['type']}','{$val}','{$array['weld']}','{$array['machine']}')";
$result = $mysqli->query($sql);

//$val=json_encode($val);
if ($result) {
    $insert_id=$mysqli->insert_id;
    addLog($mysqli, $_SESSION['name'], "report", 'add', "数据发送成功");
    echo $date;//输出json数据
    exit();
} else {
    addLog($mysqli, $_SESSION['name'], "report", 'add', "数据发送失败");
    echo $date;//输出json数据
    exit();
}
