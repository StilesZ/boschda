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
$type = $_REQUEST['type'];
$content=$_REQUEST['url'];

$fileInfo=$_FILES["file1"];
$maxSize = 10485760;//文件大小 10M,10*1024*1024
$allowExt = array('jpeg', 'jpg', 'png', 'tif', "bmp");//图片类型
$path = "../../upload/".$type;//路径

include_once '../upload/upload.php';
$file = upload_fun($fileInfo, $path, $allowExt, $maxSize); //上传 成功返回路径：失败返回4


if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from ".$type." where pic in(select url from image where id='{$id}')";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    $pic = check($file, $row['pic'], $type);

    $sqlU = "update ".$type." set pic='{$pic}' where id={$id}";
    $re = $mysqli->query($sqlU);
    $id=$mysqli->insert_id;
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"image",'edit',"图片修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"image",'edit',"图片修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}
//路径判断 4为上传失败 图片是否更改
function check($url, $row, $type)
{
    if ($url == 4) {
        return $pic = $row ? $row : "";
    } else {
        return $pic = $type."/" . $url;
    }
}
