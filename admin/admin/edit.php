<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/3
 * Time: 11:25
 */
include '../config.php';
include '../log/log.php';
//request 表单input值

if($_SESSION['type']!=1){
    echo "<script>alert('您没有权限'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    exit();
}
$id = "";
$name = $_REQUEST['name'];
$psw = $_REQUEST['psw'];
$status = empty($_REQUEST['status']) ? null : $_REQUEST['status'];
$type = empty($_REQUEST['type']) ? null : $_REQUEST['type'];
//判断id ：存在更新 ？ 不存在插入
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $checkpsw=$mysqli->query("select password from admin where id='{$id}'");
    $re=$checkpsw->fetch_assoc();
    if($re['password']!=$psw){ //判断密码是否更改
        $psw=md5($psw);//md5 加密
    }

    $check=check($name,$mysqli,$id);//判断用户名是否存在

    $sql = "update admin set name='{$name}',password='{$psw}',user_type='{$type}',status='{$status}' where id={$id}";
    $result = $mysqli->query($sql);
    if ($result) {
        //记录日志
        addLog($mysqli, $_SESSION['name'], "admin", 'edit', "用户信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        //记录日志
        addLog($mysqli, $_SESSION['name'], "admin", 'edit', "用户信息修改失败ID=".$id);
        echo "<script>alert('failed'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
} else {
    $check=check($name,$mysqli,$id);//判断用户名是否存在

    $sql = "insert into admin(name,password,user_type,status) values ('{$name}','{$psw}','{$type}','{$status}')";
    $result = $mysqli->query($sql);
    $id=$mysqli->insert_id;//返回新增ID
    if ($result) {
        //记录日志
        addLog($mysqli, $_SESSION['name'], "admin", 'add', "用户信息添加成功ID=".$id);
        echo "<script>alert('success'); location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        //记录日志
        addLog($mysqli, $_SESSION['name'], "admin", 'add', "用户信息添加失败");
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}

function check($name,$mysqli,$id){
    //查询除自己以外的用户名
    $check=$mysqli->query("select name from admin where name='{$name}' and id!='{$id}'");
    if($check->num_rows>0){
        echo "<script>alert('用户名已存在');location.href='".$_SERVER["HTTP_REFERER"]."';action('admin/main.php');</script>";
        exit();
    }
}