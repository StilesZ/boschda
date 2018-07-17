<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/2
 * Time: 14:18
 */


error_reporting(E_ALL);
// 设置运行时间
set_time_limit(0);
// 起用缓冲
ob_implicit_flush();
$ip = "127.0.0.1"; // IP地址
$port = 2555; // 端口号

$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("socket_create() fail:" . socket_strerror(socket_last_error()) . "/n");
//阻塞模式
socket_set_block($sock) or die("socket_set_block() fail:" . socket_strerror(socket_last_error()) . "/n");
//绑定到socket端口
$result = socket_bind($sock, $ip, $port) or die("socket_bind() fail:" . socket_strerror(socket_last_error()) . "/n");
//开始监听
$result = socket_listen($sock, 4) or die("socket_listen() fail:" . socket_strerror(socket_last_error()) . "/n");
echo "OK Binding the socket on $ip:$port ... ";
echo "\n OK Now ready to accept connections.Listening on the socket ... \n";

do { // never stop the daemon
    //它接收连接请求并调用一个子连接Socket来处理客户端和服务器间的信息
    $msgsock = socket_accept($sock);
    if($msgsock==false){
        echo "socket_accept() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
    }
        //读取客户端数据
        echo "Read client data \n";
        //socket_read函数会一直读取客户端数据,直到遇见\n,\t或者\0字符.PHP脚本把这写字符看做是输入的结束符.
        $buf = socket_read($msgsock, 8192);
        echo "Received msg: $buf   \n";

        if($buf == "bye"){
            //接收到结束消息，关闭连接，等待下一个连接
            socket_close($msgsock);
            continue;
        }

        //数据传送 向客户端写入返回结果
        $msg = "welcome \n";
        socket_write($msgsock, $msg, strlen($msg)) or die("socket_write() failed: reason: " . socket_strerror(socket_last_error()) ."/n");

} while (true);
socket_close($sock);