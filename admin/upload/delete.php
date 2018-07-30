<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/6
 * Time: 12:20
 */
include '../config.php';
include '../log/log.php';

if(empty($_REQUEST['id'])){
    echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
$id=$_REQUEST['id'];

$sql="delete from download where id={$id}";
$result=$mysqli->query($sql);
if(!$result){
    echo "failed";
}else{
    $sel="select * from download where id={$id}";
    $result=$mysqli->query($sel);
    $res=$result->fetch_assoc();
    unlink("../../upload/".$res['url']);//删除本地文件
    addLog($mysqli,$_SESSION['name'],"download",'delete',"下载信息删除成功ID=".$id);
    echo "<script>alert('删除成功!');action('upload/main.php');</script>";
}