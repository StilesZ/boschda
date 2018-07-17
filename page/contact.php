<?php include("../config.php"); ?>
<html>
<head>
    <title><?=$site_name?></title>
    <!--    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<link href="css/c1.css" rel="stylesheet" type="text/css">
<link href="css/about.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/hide-nav.js"></script>
<script src="js/ban.js"></script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=jvmCdVONCWwkAisZVbbwSfSp"></script>
<style>

    .main {
        margin-bottom: 150px;
    }

    .main-title {
        margin-top: 90px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: 0px;
    }
    .title-h {
        color: rgb(150, 150, 150);
        margin-top: 0px;
        margin-bottom: 10px;
        font-size: 24px;
        font-weight: bold;
    }
    .title-ep {
        color: rgb(220, 220, 220);
        text-transform: capitalize;
        margin-bottom: 10px;
        font-family: Oswald;
    }

    .contact-main {
        margin-top: 3em;
        margin-bottom: 5em;
    }
    .contact-about {
        text-align: center;
        font-size: .8rem;
        line-height: 2em;
        color: #555;
        width: 70%;
    }
    .contact-view {
        margin-top: 30px;
    }
    .contact-icon {
        padding-bottom: 0;
        border-bottom: 1px none rgb(79, 79, 79);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 8em;
        padding-right: 8em;
    }
    .c-row {
        margin-left: 0;
        margin-right: 0;
        padding-right: 0;
        padding-left: 0;
        word-spacing: -4px;
    }

    .view-icon {
        padding-left: 0px;
        padding-right: 0px;
        margin-bottom: 85px;
        height: auto;
        background-color: transparent;
        padding-top: 0px;
        border-width: 1px;
        border-style: none none none solid;
        margin-top: 85px;
        border-color: rgba(204, 204, 204, 0.4);
        border-left-style: none;
        float: none;
        display: inline-block;
        vertical-align: top;
        _zoom: 1;
        word-spacing: normal;
    }
    .icon-box {
        height: 13em;
        /*position: absolute;*/
        z-index: 0;
        bottom: 0;
        right: 0;
        top: -5em;
        left: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .img-icon {
        width: 5em;
        height: 5em;
    }
    .image-block {
        width: 100%;
        height: 100%;
        display: inline-block;
        background-size: cover;
    }
    /*.c-imageblock {*/
        /*width: 6em;*/
        /*height: 6em;*/
    /*}*/

    .paragraph_VX1ko3 {
        text-align: center;
        margin-top: 5px;
        font-family: "times new roman";
        font-size: 1rem;
        /*margin-left: 5px;*/
        text-transform: capitalize;
    }
    .paragraph_unt0WE {
        text-align: center;
        font-size: .8rem;
        color: rgb(153, 153, 153);
    }
</style>
<body>
<?php
include("head.php");
?>
<div class="title-img">
    <div class="about-img" style="background-image: url('img/origin.jpg'); "></div>
    <div class="title-text">
        <div>
            <p class="about_us">CONTACT</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>

<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red">联系我们</a>
    </div>
</div>

<div class="main">
    <div class="main-title">
        <h1 class="title-h">联系我们</h1>
        <p class="title-ep">CONTACT US</p>
    </div>

    <div class="contact-main">
        <p class="contact-about">
            公司秉承专业、专心、专一的理念，竭诚欢迎社会各界朋友真诚合作，提升中国焊接自动化水平！
        </p>
        <div class="contact-view">
            <div class="grid">
                <div class="c-row contact-icon">
                    <div class="view-icon">
                        <div class="icon-box">
                            <div class="img-icon">
                                <div class="image-block" src="img/tel.png" style="background-image: url(img/tel.png); background-position: center center;background-repeat: no-repeat;"></div>
                            </div>
                            <p class="c-paragraph paragraph_VX1ko3">phone</p>
                            <p class="c-paragraph paragraph_unt0WE"><?=$hotline?> / <?=$tel?><br><?=$phone?></p>
                        </div>
                    </div>
                    <div class="view-icon">
                        <div class="icon-box">
                            <div class="img-icon">
                                <div class="image-block" src="img/time.png" style="background-image: url(img/time.png); background-position: center center;background-repeat: no-repeat;"></div>
                            </div>
                            <p class="c-paragraph paragraph_VX1ko3">email</p>
                            <p class="c-paragraph paragraph_unt0WE"><a href="<?=$email?>"><?=$email?></p></a>
                        </div>
                    </div>
                    <div class="view-icon">
                        <div class="icon-box">
                            <div class="img-icon">
                                <div class="image-block" src="img/address.png" style=" background-image: url(img/fax.png);background-position: center center;background-repeat: no-repeat; "></div>
                            </div>
                            <p class="c-paragraph paragraph_VX1ko3">fax</p>
                            <p class="c-paragraph paragraph_unt0WE"><?=$fax?></p>
                        </div>
                    </div>
                    <div class="view-icon">
                        <div class="icon-box">
                            <div class="img-icon">
                                <div class="image-block" src="img/address.png" style="background-image: url(img/address.png); background-position: center center;background-repeat: no-repeat;"></div>
                            </div>
                            <p class="c-paragraph paragraph_VX1ko3">address</p>
                            <p class="c-paragraph paragraph_unt0WE"><?=$address?></br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div style="width:70%;height: 30em;border:#ccc solid 1px;margin: 0 auto;" id="dituContent"></div>
            </div>
        </div>
    </div>

</div>
<?php
include("foot.html");
?>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap() {
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap() {
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.590568, 29.820085);//定义一个中心点坐标
        map.centerAndZoom(point, 15);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl();
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{
        title: "宁波博视达焊接机器人有限公司",
        content: "<?=$address?>",
        point: "121.590851|29.819936",
        isOpen: 0,
        icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
    }
    ];

    //创建marker
    function addMarker() {
        for (var i = 0; i < markerArr.length; i++) {
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0, p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point, {icon: iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor: "#808080",
                color: "#333",
                cursor: "pointer"
            });

            (function () {
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click", function () {
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open", function () {
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close", function () {
                    _marker.getLabel().show();
                })
                label.addEventListener("click", function () {
                    _marker.openInfoWindow(_iw);
                })
                if (!!json.isOpen) {
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }

    //创建InfoWindow
    function createInfoWindow(i) {
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
        return iw;
    }

    //创建一个Icon
    function createIcon(json) {
        var icon = new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png", new BMap.Size(json.w, json.h), {
            imageOffset: new BMap.Size(-json.l, -json.t),
            infoWindowOffset: new BMap.Size(json.lb + 5, 1),
            offset: new BMap.Size(json.x, json.h)
        })
        return icon;
    }

    initMap();//创建和初始化地图
</script>
<script src="js/nav.js"></script>
</body>
</html>
