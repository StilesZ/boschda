<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/5
 * Time: 16:40
 */

include '../config.php';
include '../log/log.php';

$site_name = $_REQUEST['site_name'];
$domain = $_REQUEST['domain'];
$hotline = empty($_REQUEST['hotline'])?"":$_REQUEST['hotline'];
$address = $_REQUEST['address'];
$tel = $_REQUEST['tel'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];;
$fax = $_REQUEST['fax'];;

if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "update site set site_name='{$site_name}',domain='{$domain}',hotline='{$hotline}',address='{$address}',tel='{$tel}',phone='{$phone}',email='{$email}',fax='{$fax}' where id={$id}";
    $re = $mysqli->query($sql);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"site",'edit',"站点信息修改成功ID=".$id);
        echo "<script>alert('failed'); location.href='".$_SERVER["HTTP_REFERER"]."';</script>";echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"site",'edit',"站点信息修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}