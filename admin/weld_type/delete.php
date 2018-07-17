<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:33
 */
include '../config.php';
include '../log/log.php';

if(empty($_REQUEST['id'])){
    echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
$id=$_REQUEST['id'];
$sql="delete from weld_type where id={$id}";
$result=$mysqli->query($sql);
if(!$result){
    echo "failed";
}else{
    addLog($mysqli,$_SESSION['name'],"weld_type",'delete',"焊缝信息删除成功ID=".$id);
    echo "<script>alert('删除成功!');action('weld_type/main.php');</script>";
}