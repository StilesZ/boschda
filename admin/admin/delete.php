<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/3
 * Time: 10:21
 */
include '../config.php';
include '../log/log.php';
//id不存在返回
if(empty($_REQUEST['id'])){
    echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
$id=$_REQUEST['id'];

if($id==1){
    echo "<script>alert('管理员不可删除!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    exit();
}
$sql="delete from admin where id={$id}";
$result=$mysqli->query($sql);
if(!$result){
    //记录日志
    addLog($mysqli,$_SESSION['name'],"admin",'delete',"用户信息删除失败ID=".$id);
    echo "<script>alert('删除失败!');action('admin/main.php');</script>";
}else{
    addLog($mysqli,$_SESSION['name'],"admin",'delete',"用户信息删除成功ID=".$id);
    echo "<script>alert('删除成功!');action('admin/main.php');</script>";
}

