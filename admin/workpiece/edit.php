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
$name = $_REQUEST['name'];

if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $check=check($name,$mysqli,$id);
    $sql = "update work set name='{$name}' where id={$id}";
    $result = $mysqli->query($sql);
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "workpiece", 'edit', "工件信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli, $_SESSION['name'], "workpiece", 'edit', "工件信息修改失败ID=".$id);
        echo "<script>alert('failed'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
} else {
    $check=check($name,$mysqli,$id);
    $sql = "insert into work(name) values ('{$name}')";
    $result = $mysqli->query($sql);
    $id=$mysqli->insert_id;
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "workpiece", 'add', "工件信息添加成功ID=".$id);
        echo "<script>alert('success'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli, $_SESSION['name'], "workpiece", 'add', "工件信息添加失败".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}

function check($name,$mysqli,$id){
    $check=$mysqli->query("select name from work where name='{$name}' and id!='{$id}'");
    if($check->num_rows>0){
        echo "<script>alert('工件信息已存在');location.href='".$_SERVER["HTTP_REFERER"]."';action('workpiece/main.php');</script>";
        exit();
    }
}