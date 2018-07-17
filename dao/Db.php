<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/22
 * Time: 10:42
 */


$dbname="root";
$dbhost="localhost";
$dnpsw="123456";
$dbbase="bsd";

$mysqli=new mysqli($dbhost,$dbname,$dnpsw,$dbbase);
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}

//function GetIPAddr()
//{
//    return $_SERVER['REMOTE_ADDR'];
//}

//function Get_real_ip()
//{
//    static $realip = NULL;
//
//    if ($realip !== NULL)
//    {
//        return $realip;
//    }
//
//    if (isset($_SERVER))
//    {
//        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
//        {
//            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
//
//            /* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
//            foreach ($arr AS $ip)
//            {
//                $ip = trim($ip);
//
//                if ($ip != 'unknown')
//                {
//                    $realip = $ip;
//
//                    break;
//                }
//            }
//        }
//        elseif (isset($_SERVER['HTTP_CLIENT_IP']))
//        {
//            $realip = $_SERVER['HTTP_CLIENT_IP'];
//        }
//        else
//        {
//            if (isset($_SERVER['REMOTE_ADDR']))
//            {
//                $realip = $_SERVER['REMOTE_ADDR'];
//            }
//            else
//            {
//                $realip = '0.0.0.0';
//            }
//        }
//    }
//    else
//    {
//        if (getenv('HTTP_X_FORWARDED_FOR'))
//        {
//            $realip = getenv('HTTP_X_FORWARDED_FOR');
//        }
//        elseif (getenv('HTTP_CLIENT_IP'))
//        {
//            $realip = getenv('HTTP_CLIENT_IP');
//        }
//        else
//        {
//            $realip = getenv('REMOTE_ADDR');
//        }
//    }
//
//    preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
//    $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';
//
//    return $realip;
//}