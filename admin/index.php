<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/25
 * Time: 15:49
 */
include_once 'config.php';
include './admin/checklogin.php';
//include './report/SocketServer.php';

//$url=$_SERVER['REQUEST_URI'];
//$position = strpos($url, '?');
//$url = $position === false ? $url : substr($url, 0, $position);
//$url = trim($url, '/');
//$urlArray = explode('/', $url);
//$controllerName = ucfirst($urlArray[0]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博视达后台管理</title>
    <script src="../page/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="editor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="editor/lang/zh-cn/zh-cn.js"></script>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
    $(document).ready(function() {

        //菜单效果样式 上滑下滑 slideUp/slideDown
        $('.left-nav li').click(function(){
            $(this).children('ul').slideDown();
            $(this).siblings('li').children('ul').slideUp();
            $(this).children('a').addClass("active");
            $(this).siblings('li').children('a').removeClass("active");
            $(this).siblings('li').children('ul').children('li').children('a').removeClass("active");
        });

        function getObjectURL(file) {
            var url = null ;
            if (window.createObjectURL!=undefined) { // basic
                url = window.createObjectURL(file) ;
            } else if (window.URL!=undefined) { // mozilla(firefox)
                url = window.URL.createObjectURL(file) ;
            } else if (window.webkitURL!=undefined) { // webkit or chrome
                url = window.webkitURL.createObjectURL(file) ;
            }
            return url ;
        }

        // read();
    });

    //tcp协议
    websocket = new WebSocket('ws://192.168.0.161:2046/');
    //打开连接
    websocket.onopen = function(evt) {
        console.log('connect');
        // websocket.send('{"data":"您好，世界！"}');
    };
    //关闭连接
    websocket.onclose = function(evt) {
        console.log('onclose');
        console.log(evt);
    };
    //返回信息
    websocket.onmessage = function(evt) {
        console.log('onmessage');
        if (evt.data) {
            console.log(JSON.parse(JSON.parse(evt.data)));
        }
    };
    //返回错误信息
    websocket.onerror = function(evt) {
        console.log('onerror');
        console.log(evt);
    };
    //图片上传文件显示
    function show(file) {
        var id=file.id;
        var img=$("#img"+id+" img");
        if (file.files && file.files[0]){
            var reader = new FileReader();
            reader.onload = function (evt) {
                img.src = evt.target.result;
                img.attr("src",img.src);
            };
            reader.readAsDataURL(file.files[0]);
        }
    }

    function executeScript(html) {

        var reg = /<script[^>]*>([^\x00]+)$/i;
        //对整段HTML片段按<\/script>拆分
        var htmlBlock = html.split("<\/script>");
        for (var i in htmlBlock)
        {
            var blocks;//匹配正则表达式的内容数组，blocks[1]就是真正的一段脚本内容，因为前面reg定义我们用了括号进行了捕获分组
            if (blocks = htmlBlock[i].match(reg))
            {
                //清除可能存在的注释标记，对于注释结尾-->可以忽略处理，eval一样能正常工作
                var code = blocks[1].replace(/<!--/, '');
                try
                {
                    eval(code) //执行脚本
                }
                catch (e)
                {
                    alert(e);
                }
            }
        }
    }

    function action(url) {

        var xmlHttp;

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlHttp=new XMLHttpRequest();    //创建 XMLHttpRequest对象
        }
        else {
            // code for IE6, IE5
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlHttp.onreadystatechange=function(){

            if (xmlHttp.readyState == 4) {
                //xmlHttp.readyState == 4    ——    finished downloading response

                if (xmlHttp.status == 200) {
                    //xmlHttp.status == 200        ——    服务器反馈正常
                    document.getElementById("main").innerHTML = xmlHttp.responseText;
                    executeScript(xmlHttp.responseText);
                    //main.php列表标题自适应宽度 百分比%
                    var list=$('.list-title .list_1');
                    var item=$('.list .list_1');
                    var li=list.length;
                    var w= Math.floor(100/li);
                    item.css("width",w-1+"%");
                    list.css("width",w-1+"%");
                }
                //错误状态处理
                else if (xmlHttp.status == 404) {
                    alert("出错了☹   （错误代码：404 Not Found），……！");
                    /* 对404的处理 */
                    return;
                }
                else if (xmlHttp.status == 403) {
                    alert("出错了☹   （错误代码：403 Forbidden），……");
                    /* 对403的处理  */
                    return;
                }
                else {
                    alert("出错了☹   （错误代码：" + request.status + "），……");
                    /* 对出现了其他错误代码所示错误的处理   */
                    return;
                }
            }
        }

        xmlHttp.open("GET", url, true);        //true表示异步处理
        xmlHttp.send();

    }

    function del(id,site){
        if(window.confirm("您确认要删除此信息?")){
            // window.location=site+"/delete.php?id="+id;
            action(site+"/delete.php?id="+id);
        }
    }

    function search(url){
        var name=$("input[ name='name' ]").val();
        action(url+"?name="+name);
    }


</script>
<header style="box-sizing: border-box; height: 8%; top: 4%; min-height: 2em; background: #222222;color: #e5e5e5; font-size: 2em">
    <div style="float: left; height: 100%;line-height: 200%;"><em>博视达</em>后台管理系统 <span><a target="_blank" href="../page/index.php" style="color: white;font-size: .5em;">前台首页</a></span></div>
    <div style="float: right; height: 100%;line-height: 200%;"><?=$_SESSION['name']?>&nbsp;<a href="admin/LoginOut.php" style="color: #e5e5e5">登出</a></div>
</header>
<div class="content">
    <div class="left">
        <ul class="left-nav">
            <li><a href="#" onclick="action('admin/main.php')">用户管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('admin/main.php')">用户列表</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('product/main.php')">产品管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('product/main.php')">产品列表</a></li>
                    <li><a href="#" onclick="action('product_type/main.php')">产品类型</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('article/main.php')">文章管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('article/main.php')">文章列表</a></li>
                    <li><a href="#" onclick="action('article_type/main.php')">文章类型</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('img/main.php')">图片管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('img/main.php')">图片管理</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('report/main.php')">商品跟踪</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('workpiece/main.php')">工件种类</a></li>
                    <li><a href="#" onclick="action('machine/main.php')">焊机种类</a></li>
                    <li><a href="#" onclick="action('weld_type/main.php')">焊缝种类</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('upload/main.php')">下载管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('upload/main.php')">下载列表</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('video/main.php')">视频管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('video/main.php')">视频列表</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('log/main.php')">日志管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('log/main.php')">日志信息</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="action('site/main.php')">站点管理</a>
                <ul class="submenu">
                    <li><a href="#" onclick="action('site/main.php')">站点信息</a></li>
                </ul>
            </li>
        </ul>
        <div style="bottom: 0;position:fixed;width: 20%; background: #222222; overflow: hidden;">copyright:boschda</div>
    </div>
    <div id="main" class="main">

    </div>
</div>
</html>

