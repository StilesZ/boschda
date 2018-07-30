<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/28
 * Time: 15:59
 */
include __DIR__ . '/../dao/Db.php';
include __DIR__ . '/../dao/sqlFunction.php';

//判断是否设置session
if (!isset($_SESSION)) {
    session_start();
//    if(empty($_SESSION['name'])){
//        echo "<script>window.location.href='".__DIR__."/../admin/login.html'</script>";
//    }

}
$config['host'] = "localhost";    //主机地址
$config['username'] = "root";//用户名
$config['password'] = "123456";//密码
$config['database'] = "bsd";//数据库
$config['port'] = 3306;    //端口号

//$mysqli=new sqlFunction($config);
//$mysqli->connect($config);


