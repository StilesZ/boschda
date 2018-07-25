<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 16:26
 */
include '../config.php';
include '../log/log.php';

$name = $_REQUEST['name'];
$aliases=$_REQUEST['aliases'];
$date=date('Y-m-d H:i:s',time());
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sqlU = "update article_type set name='{$name}',aliases='{$aliases}' where id={$id}";
    $re = $mysqli->query($sqlU);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"article_type",'delete',"信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"article_type",'delete',"信息修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}else{
    $sqlU = "insert into article_type(name,aliases) values ('{$name}','{$aliases}')";
    $re = $mysqli->query($sqlU);
    $id=$mysqli->insert_id;
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"article_type",'delete',"信息添加成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"article_type",'delete',"信息添加失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}
