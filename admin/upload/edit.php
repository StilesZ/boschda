<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 16:26
 */
include '../config.php';
include '../log/log.php';

header('content-type:text/html;charset=utf-8');
//初始化相关变量
$fileInfo=$_FILES["file1"];
$maxSize = 10485760;//10M,10*1024*1024
$allowExt = array('pdf', 'doc', 'excel','txt','docx','rar','zip');
$path = "../../upload/file";

include_once '../upload/upload.php';
$file = upload_fun($fileInfo, $path, $allowExt, $maxSize);

$name = $_REQUEST['name'];
$url=$_REQUEST['url'];
if($file){
    $url='file/'.$file;
}
$date=date('Y-m-d H:i:s',time());
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from download where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();

    $sqlU = "update download set name='{$name}',url='{$url}' where id={$id}";
    $re = $mysqli->query($sqlU);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"download",'edit',"下载信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"download",'edit',"下载信息修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}else{
    $sqlI = "insert into download(name,url) values ('{$name}','{$url}')";
    $re = $mysqli->query($sqlI);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"download",'add',"下载信息添加成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"download",'add',"下载信息添加失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}

