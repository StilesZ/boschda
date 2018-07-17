<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/25
 * Time: 15:47
 */
include 'config.php';
$url=$_SERVER['REQUEST_URI'];
$position = strpos($url, '?');
$url = $position === false ? $url : substr($url, 0, $position);
$url = trim($url, '/');
$urlArray = explode('/', $url);
$controllerName = ucfirst($urlArray[0]);
array_shift($urlArray);
$actionName= $urlArray ? $urlArray[0] : $actionName;
include $controllerName.'/'.$actionName."/main.php";


