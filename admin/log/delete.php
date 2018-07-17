<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/6
 * Time: 14:24
 */
include '../config.php';
include '../log/log.php';

if(empty($_REQUEST['id'])){
    echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
$id=$_REQUEST['id'];

$sql="delete from log where id={$id}";
$result=$mysqli->query($sql);
if(!$result){
    echo "failed";
}else{
    addLog($mysqli,$_SESSION['name'],"log",'delete',"日志信息删除成功ID=".$id);
    echo "<script>alert('删除成功!');action('log/main.php');</script>";
}
