<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--    <title>无标题文档</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<script>-->
<!--    window.location.href="page/index.php";-->
<!--</script>-->
<!---->
<!--</body>-->
<!--</html>-->
<?php
// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

$uri = $_SERVER['REQUEST_URI'];

// 加载配置文件
$config = require(APP_PATH . '/config.php');

echo "<script>window.location.href='page/index.php'</script>";