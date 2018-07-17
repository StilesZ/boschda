<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/22
 * Time: 10:45
 */

include 'dao/Db.php';

// 数据库配置
global $config;

$config['host']="localhost";    //主机地址
$config['username']="root";     //用户名
$config['password']="123456";   //密码
$config['database']="bsd";      //数据库
$config['port']=3306;           //端口号

/* 网站信息*/

$sql="select * from site ";
$result = $mysqli->query($sql);
$row = $result->fetch_array();

$site_name=$row[1]; //网站名称
$domain=$row[2];    //域名
$hotline=$row[3];   //热线
$address=$row[4];   //地址
$tel=$row[5];       //电话
$phone=$row[6];     //手机
$email=$row[7];     //邮箱
$fax=$row[8];       //传真

