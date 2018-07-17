<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/11
 * Time: 16:25
 */
include '../config.php';

header('Content-Type:application/json;charset=utf-8');

$id=1;
$error=array("data" => "");
$error = json_encode($error);

if(!empty($_REQUEST['weld'])){
    $id = $_REQUEST['weld'];
}

$sel="select * from weld_type where id ={$id}";

$result = $mysqli->query($sel);

if ($result->num_rows>0) {
    $date=json_encode($result->fetch_all(),true);
    $date=json_decode($date);
    $date=json_encode($date);
    echo $date;//输出json数据
    exit();
} else {
    echo $error;
    exit();
}