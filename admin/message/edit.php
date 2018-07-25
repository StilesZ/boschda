<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 16:26
 */
include '../config.php';
include '../log/log.php';

$title = empty($_REQUEST['title']) ? "" : $_REQUEST['title'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = empty($_REQUEST['phone']) ? "" : $_REQUEST['phone'];
$content = $_REQUEST['content'];
$date = date('Y-m-d H:i:s', time());

$sqlU = "insert into message(title,name,email,phone,content,time) values ('{$title}','{$name}','{$email}','$phone','{$content}','{$date}')";
$re = $mysqli->query($sqlU);
$id=$mysqli->insert_id;
if ($re) {
    addLog($mysqli,$name,"message",'add',"用户留言成功");
    echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
} else {
    addLog($mysqli,$name,"message",'add',"用户留言失败");
    echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
}

