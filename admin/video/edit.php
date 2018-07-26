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
$allowExt = array('jpeg', 'jpg', 'png', 'tif', "bmp");
$path = "../../upload/video";

include_once '../upload/upload.php';
$file = upload_fun($fileInfo, $path, $allowExt, $maxSize);

$name = empty($_REQUEST['name'])?"":$_REQUEST['name'];
$url=$_REQUEST['url'];

if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from video where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    $pic = check($file, $row[2]);

    $sqlU = "update video set name='{$name}',pic='{$pic}',url='{$url}' where id={$id}";
    $re = $mysqli->query($sqlU);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"video",'edit',"视频信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"video",'edit',"视频信息修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}else{
    $pic = check($file,"");
    $sqlU = "insert into video(name,pic,url) values ('{$name}','{$pic}','{$url}')";
    $re = $mysqli->query($sqlU);
    $id=$mysqli->insert_id;
    if ($re) {
        if($pic!=""){
            $sqlI = "insert into image(type,url) values ('video','{$pic}')";
            $res = $mysqli->query($sqlI);
        }
        addLog($mysqli,$_SESSION['name'],"video",'add',"视频信息添加成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"video",'add',"视频信息添加失败".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}

function check($url, $row)
{
    if ($url == 4) {
        return $pic = $row ? $row : "";
    } else {
        return $pic = "video/" . $url;
    }
}
