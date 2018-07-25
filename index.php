<?php
// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

$uri = $_SERVER['REQUEST_URI'];

// 加载配置文件
$config = require(APP_PATH . '/config.php');

echo "<script>window.location.href='page/index.php'</script>";