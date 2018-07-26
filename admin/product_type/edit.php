<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 16:04
 */

include '../config.php';
include '../log/log.php';

$id="";
$name=$_REQUEST['name'];
$pid=$_REQUEST['type'];

if (!empty($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="update product_type set name='{$name}',pid='{$pid}' where id={$id}";
    $result=$mysqli->query($sql);
    if($result){
        addLog($mysqli,$_SESSION['name'],"product_type",'edit',"产品类别信息修改成功ID=".$id);
        echo "<script>alert('success'); location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }else{
        addLog($mysqli,$_SESSION['name'],"product_type",'edit',"产品类别信息修改失败ID=".$id);
        echo "<script>alert('failed'); location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
}else{
    $sql="insert into product_type(name,pid) values ('{$name}','{$pid}')";
    $result=$mysqli->query($sql);
    $id=$mysqli->insert_id;
    if($result){
        addLog($mysqli,$_SESSION['name'],"product_type",'add',"产品类别信息添加成功ID=".$id);
        echo "<script>alert('success');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }else{
        addLog($mysqli,$_SESSION['name'],"product_type",'add',"产品类别信息添加失败".$id);
        echo "<script>alert('failed'); location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
}
