<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 16:56
 */
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
echo '注销登录成功！点击此处 <a href="../login.html">登录</a>';
exit;