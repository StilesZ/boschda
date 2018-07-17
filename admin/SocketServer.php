<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/9
 * Time: 15:48
 */

class SocketServer
{
    private $sockets; //连接池
    private $master;
    private $handshake;

    /**
     * @param $address
     * @param $port
     */

    public function run($address, $port)
    {
        //配置错误级别、运行时间、刷新缓冲区
        error_reporting(0);
        set_time_limit(0);
        ob_implicit_flush();

        //创建socket
        $this->master = $this->_connect($address, $port);
        $this->sockets[] = $this->master;

        //运行socket
        while (true) {
            $sockets = $this->sockets;
            $write = NULL;
            $except = NULL;
            socket_select($sockets, $write, $except, NULL); //$write,$except传引用
            foreach ($sockets as $socket) {
                if ($socket == $this->master) {
                    $client = socket_accept($socket);
                    $this->handshake = false;
                    socket_getpeername($client, $add, $por);
                    if ($client) {
                        $this->sockets[] = $client; //加入连接池
                    }
                } else {
                    //接收信息
                    $bytes = @socket_recv($socket, $buffer, 2048, 0);

                    if ($bytes <= 6) {
                        $this->_disConnect($socket);
                        continue;
                    };
                    //处理信息
                    if (!$this->handshake) {
                        $this->_handshake($socket, $buffer);
                    } else {
                        $buffer = $this->_decode($buffer);
                        $this->_sendMsg($buffer, $socket);
                    }
                }
            }
        }
    }

    /**
     * 创建socket连接
     * @param $address
     * @param $port
     * @return resource
     */
    private function _connect($address, $port)
    {
        //创建socket
        $master = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)
        or die("socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n");
        socket_set_block($master)
        or die("socket_set_block() fail:" . socket_strerror(socket_last_error($master)) . "\n");
        socket_bind($master, $address, $port)
        or die("socket_bind() failed: reason: " . socket_strerror(socket_last_error($master)) . "\n");
        socket_listen($master, 5)
        or die("socket_listen() failed: reason: " . socket_strerror(socket_last_error($master)) . "\n");
        return $master;
    }

    /**
     * 握手动作
     * @param $socket
     * @param $buffer
     */
    private function _handshake($socket, $buffer)
    {
        //握手动作信息
        $buf = substr($buffer, strpos($buffer, 'Sec-WebSocket-Key:') + 18);
        $key = trim(substr($buf, 0, strpos($buf, "\r\n")));
        $new_key = base64_encode(sha1($key . "258EAFA5-E914-47DA-95CA-C5AB0DC85B11", true));
        $new_message = "HTTP/1.1 101 Switching Protocols\r\n";
        $new_message .= "Upgrade: websocket\r\n";
        $new_message .= "Sec-WebSocket-Version: 13\r\n";
        $new_message .= "Connection: Upgrade\r\n";
        $new_message .= "Sec-WebSocket-Accept: " . $new_key . "\r\n\r\n";

        //记录握手动作
        socket_write($socket, $new_message, strlen($new_message));
        $this->handshake = true;
    }

    /**
     * 断开socket连接
     * @param $socket
     */
    private function _disConnect($socket)
    {
        $index = array_search($socket, $this->sockets);
        socket_close($socket);
        if ($index >= 0) {
            array_splice($this->sockets, $index, 1);
        }
    }

    /**
     * 发送信息
     * @param $buffer
     * @param $client
     */
    private function _sendMsg($buffer, $client)
    {
        $send_buffer = $this->_frame(json_encode($buffer));
        foreach ($this->sockets as $socket) {
            if ($socket != $this->master && $socket != $client) { //广播发送（除了自己）
                socket_write($socket, $send_buffer, strlen($send_buffer));
            }else{
                socket_write($socket, $send_buffer, strlen($send_buffer));
            }
        }
    }

    /**
     * 解析数据帧
     * @param $buffer
     * @return null|string
     */
    private function _decode($buffer)
    {
        $len = $masks = $data = $decoded = null;
        $len = ord($buffer[1]) & 127;
        if ($len === 126) {
            $masks = substr($buffer, 4, 4);
            $data = substr($buffer, 8);
        } else if ($len === 127) {
            $masks = substr($buffer, 10, 4);
            $data = substr($buffer, 14);
        } else {
            $masks = substr($buffer, 2, 4);
            $data = substr($buffer, 6);
        }
        for ($index = 0; $index < strlen($data); $index++) {
            $decoded .= $data[$index] ^ $masks[$index % 4];
        }
        return $decoded;
    }

    /**
     * 处理返回帧
     * @param $buffer
     * @return string
     */
    private function _frame($buffer)
    {
        $len = strlen($buffer);
        if ($len <= 125) {
            return "\x81" . chr($len) . $buffer;
        } else if ($len <= 65535) {
            return "\x81" . chr(126) . pack("n", $len) . $buffer;
        } else {
            return "\x81" . char(127) . pack("xxxxN", $len) . $buffer;
        }
    }
}

$sc = new SocketServer();
$sc->run('127.0.0.1', 2046);