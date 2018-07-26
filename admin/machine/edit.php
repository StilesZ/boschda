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
    $sql = "update machine set name='{$name}' where id={$id}";
    $result = $mysqli->query($sql);
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "machine", 'edit', "焊机信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli, $_SESSION['name'], "machine", 'edit', "焊机信息修改失败ID=".$id);
        echo "<script>alert('failed'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
} else {
    $check=check($name,$mysqli,$id);
    $sql = "insert into machine(name) values ('{$name}')";
    $result = $mysqli->query($sql);
    $id=$mysqli->insert_id;
    if ($result) {
        addLog($mysqli, $_SESSION['name'], "machine", 'add', "焊机信息添加成功ID=".$id);
        echo "<script>alert('success'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli, $_SESSION['name'], "machine", 'add', "焊机信息添加失败".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}

function check($name,$mysqli,$id){
    $check=$mysqli->query("select name from machine where name='{$name}' and id!='{$id}'");
    if($check->num_rows>0){
        echo "<script>alert('焊机信息');location.href='".$_SERVER["HTTP_REFERER"]."';action('machine/main.php');</script>";
        exit();
    }
}