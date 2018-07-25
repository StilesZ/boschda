<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:33
 */
include '../config.php';
include '../log/log.php';

$id = "";
$name = $_REQUEST['val'];
$name=json_encode($name);

if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $check=check($name,$mysqli,$id);
    $sql = "update weld_type set attribute='{$name}' where id={$id}";
    $result = $mysqli->query($sql);
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "weld_type", 'edit', "焊缝信息修改成功ID=".$id);
//        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        echo "success";
        exit();
    } else {
        addLog($mysqli, $_SESSION['name'], "weld_type", 'edit', "焊缝信息修改失败ID=".$id);
//        echo "<script>alert('failed'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
//        echo "failed";
        exit();
    }
} else {
    $check=check($name,$mysqli,$id);
    $sql = "insert into weld_type(attribute) values ('{$name}')";
    $result = $mysqli->query($sql);
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "weld_type", 'add', "工件信息添加成功ID=".$id);
//        echo "<script>alert('success'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
        echo "success";
        exit();
    } else {
        addLog($mysqli, $_SESSION['name'], "weld_type", 'add', "工件信息添加失败ID=".$id);
//        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
//        echo "failed";
        exit();
    }
}

function check($name,$mysqli,$id){
//    $check=$mysqli->query("select name from weld_type where attribute='{$name}' and id!='{$id}'");
//    if($check->num_rows>0){
//        echo "<script>alert('焊缝类型已存在');location.href='".$_SERVER["HTTP_REFERER"]."';action('weld_type/main.php');</script>";
//        exit();
//    }
}