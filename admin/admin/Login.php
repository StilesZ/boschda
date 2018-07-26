<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/26
 * Time: 14:04
 */
include '../../dao/Db.php';
include '../log/log.php';

$name = $_POST['name']; // 获取用户名
$pwd = md5($_POST['password']);   // 获取密码 md5加密
//$pwd = $_POST['password'];
$uri = $_SERVER['REQUEST_URI'];
if (!empty($name) && !empty($pwd)) {
    $sql = "select * from admin where name='{$name}'";
    $result = $mysqli->query($sql);
    $res = $result->fetch_assoc();
    //双层判断防注入
    if ($res['password']==$pwd) {
//        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['id'] = $res['id'];
        $date = date('Y-m-d H:i:s', time());
        $sql1 = "update admin set login_time='{$date}',login_times=login_times+1 where id={$res['id']}";
        $result = $mysqli->query($sql1);
        addLog($mysqli, $_SESSION['name'], "login", 'login', "用户登录成功ID=" . $res['id']);
        echo "<script>window.location.href='../index.php'</script>";
    } else {
        addLog($mysqli, $name, "login", 'login', "用户登录失败:" . $name);
        echo "<script>alert('登录失败'); window.location.href='../login.html'</script>";
        exit();
    }
} else {
    echo "<script>alert('登录失败'); window.location.href='../login.html'</script>";
    exit();
}

//if($_GET['action'] == "logout"){
//    unset($_SESSION['id']);
//    unset($_SESSION['name']);
//    echo '注销登录成功！点击此处 <a href="../login.html">登录</a>';
//    exit;
//}