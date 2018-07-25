<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/6
 * Time: 8:48
 */

include_once '../config.php';
/* 日志管理 */
function addLog($mysqli,$user,$type,$operate,$content){
    if(empty($user)){
        $content.="user null";
    }
    if(empty($type)){
        $content.="type null";
    }
    $date=date('Y-m-d H:i:s',time());
    //插入数据库
    $sql = "insert into log(user,type,operate,content,time) values ('{$user}','{$type}','$operate','{$content}','{$date}')";
    $res = $mysqli->query($sql);
    if($res){
        return;
    }
}