<?php include("../config.php"); ?>
<html>
<head>
    <title><?=$site_name?></title>
</head>
<link href="css/c1.css" rel="stylesheet" type="text/css">
<!--<link href="css/cc.css" rel="stylesheet" type="text/css">-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/hide-nav.js"></script>
<script src="js/ban.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=jvmCdVONCWwkAisZVbbwSfSp"></script>
<script>
    $(function(){
        // var $divWidth = $('body').innerWidth();
        // $('.b-img img').css({'width':$divWidth});

        // $(document).click(function(){
        //     $('.nav').removeClass('open')
        // });
        // $('.nav-trigger,.nav').click(function(e){e.stopPropagation()});
        // $('.nav-trigger').click(function(e){
        //     $('.nav').toggleClass('open');
        // })

        var img = $('.left-img').height();
        $('.slan4-con').height(img);
        $('.right-text').height(img);
    });
    $(window).resize(function () {
        var img = $('.left-img').height();
        $('.slan4-con').css({'height':img});
        // $('.right-text').css({'max-height':img});
        $('.right-text').height(img);
    })
</script>
<body>
<?php
include("head.php");
?>
<div class="banner">
    <div class="b-img">
        <a href="#" style="background:url(img/1.jpg) center no-repeat; background-size:cover;"></a>
        <a href="#" style="background:url(img/2.jpg) center no-repeat; background-size:cover;"></a>
        <a href="#" style="background:url(img/3.jpg) center no-repeat; background-size:cover;"></a>
    </div>
    <div class="b-list"></div>
    <a class="bar-left" href="#"><em></em></a><a class="bar-right" href="#"><em></em></a>
</div>

<div class="list">
    <div class="list_title">
        <h2></h2>
        <span class="slan22"></span>
    </div>

    <div class="list-main">
        <div class="list-box">
            <ul class="artist">
                <li class="i1 a0">
                    <img src="img/cp10.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href="#"><strong>埋弧焊</strong></a>
                </li>
                <li class="i2 a1">
                    <img src="img/cp2.jpg" style="background-size: cover; background-position: center;">
                    <a href="#"><strong>等离子焊</strong></a>
                </li>
                <li class="i2 a2">
                    <img src="img/cp9.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href="#"><strong>氩弧焊</strong></a>
                </li>
                <li class="i0 a3">
                    <img src="img/cp4.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>激光焊</strong></a>
                </li>
                <li class="i0 a4">
                    <img src="img/cp5.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>气保焊</strong></a>
                </li>
                <li class="i0 a5">
                    <img src="img/cp6.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>汽车配件</strong></a>
                </li>
                <li class="i0 a6">
                    <img src="img/cp7.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>石油化工</strong></a>
                </li>
                <li class="i0 a7">
                    <img src="img/cp8.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>制冷设备 </strong></a>
                </li>
                <li class="i0 a8">
                    <img src="img/cp3.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>电力电气</strong></a>
                </li>
                <li class="i1 a9">
                    <img src="img/cp1.jpg" style="background-size: cover; background-position: center;">
                    <a class="cover" href=""><strong>工业制管</strong></a>
                </li>
            </ul>
            <div class="sgunl">
                <div class="show-title">
                    - 产品展示-
                </div>
                <div id="demo" class="zhanh_list0">
                    <div class="zhanh_list" id="demo1">
                        <?
                        $pro_sql="select product.id as id,product.name as name,pic from product,product_type where product.type_id=product_type.id and product_type.pid=2";
                        $pro=$mysqli->query($pro_sql);
                        while($row = $pro->fetch_assoc()) {
                            ?>
                            <div class="zhanh_list_1">
                                <a href="product-item.php?id=<?=$row['id']?>&pid=2">
                                    <img src="../upload/<?=$row['pic']?>" ><br>
                                    <span class=""><?=$row['name']?></span>
                                </a>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="zhanh_list" id="demo2">

                    </div>
                </div>

                <script>
                    var speed = 35;
                    demo2.innerHTML = demo1.innerHTML;
                    demo.scrollTop = demo.scrollHeight;
                    function Marquee() {
                        if (demo1.offsetTop - demo.scrollTop >= 0)
                            demo.scrollTop += demo2.offsetTop //2205
                        else {
                            demo.scrollTop--
                        }
                    }
                    var MyMar = setInterval(Marquee, speed)
                    demo.onmouseover = function () {
                        clearInterval(MyMar)
                    }
                    demo.onmouseout = function () {
                        MyMar = setInterval(Marquee, speed)
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<div class="sfeng_1">
    <div class="w100">
			<span class="block" data-move-x="300px">
			<p>公司理念</p><p>尖端研发、高端定制、品质聚焦</p>
			</span>
    </div>
</div>

<div class="slan4" id="section-2">
    <div class="list_title" style="cursor:pointer">
        <h3 class=""></h3>
        <span class="slan22"></span>
    </div>

    <div class="slan4-con" align="center" style="text-align:left;">
        <div id="my_menu" class="sdmenu" style=" border:0px;">
            <!--<div style="">-->
            <a>
                <div class="left-img"><img src="img/cf111.jpg"></div>
                <div class="right-text">
                    <p>&nbsp; &nbsp; &nbsp; &nbsp;宁波博视达焊接机器人有限公司长期致力于焊接领域的视觉引导、运动控制和焊接流水线自动化的专业研发。</p>
                    <p>&nbsp;</p>
                    <div>&nbsp; &nbsp; &nbsp; &nbsp;其焊缝跟踪系统能实现各种类型的直缝、环缝、空间曲线焊缝的自动实时视觉引导，适用于氩弧焊、激光焊、等离子焊、气保焊、埋弧焊等焊接形式，并在石油化工、制冷设备、汽车配件、电力电气、特种车、钢构、造船等领域得到广泛应用。&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp; &nbsp; &nbsp; &nbsp;公司秉承专业、专心、专一的理念，竭诚欢迎社会各界朋友真诚合作，提升中国焊接自动化水平！</div>
                </div>
            </a>
            <!--</div>-->
        </div>
    </div>
    <br><br>
</div>

<div class="slan5" id="section-4">
    <div class="clearfix">
        <div class="syfl_1">
            <a href="news.php">
            </a>
        </div>
        <div class="syfl_2">
            <a href="join.php">
            </a>
        </div>
        <div class="syfl_3">
            <a href="video.php">
            </a>
        </div>
    </div>
</div>

<div style="width:100%; height:851px;">
    <div style="width:100%; height:131px; float:left; background:url(img/cen.jpg) no-repeat center top;"></div>
    <div style="width:80%;height:500px;border:#ccc solid 1px;margin: 0 auto;" id="dituContent"></div>
    <div style="width:100%; height:auto; ">
        <div style="width:100%; height:auto; margin:0 auto;">
            <div style="width:40%; height:auto; float:left; margin-left: 5%">
                <ul style="list-style: none">
                    <li style="width:100%; height:auto; float:left; margin-top:1em; text-indent:1em;">
                        <h2 style="font-weight:normal; background:url(img/cen1.jpg) center left no-repeat; height:30px; line-height:30px;">地址：</h2>
                        <div style="width:100%; height:2em; float:left; line-height:1.5em;"><?=$address?></div>
                    </li>
                    <li style="width:100%; height:auto; float:left; margin-top:20px; text-indent:20px;">
                        <h2 style="font-weight:normal; background:url(img/cen1.jpg) center left no-repeat; height:30px;line-height:30px;">联系方式：</h2>
                        <div style="width:100%; height:30px; float:left; line-height:30px;"><?=$tel?></div>
                        <div style="width:100%; height:30px; float:left; line-height:30px;"><?=$phone?></div>
                    </li>
                </ul>
            </div>
            <div style=" width:50%; height:auto; float:right; margin-right: 5%">
                <form id="contactform" name="contactform" action="../admin/message/edit.php" method="post">
                    <div class="gusetbook" style="margin-top:20px;">
                        <div class="gb_right" style="width:50%; height:auto; float:right;">
                            <textarea id="content" placeholder="留言内容" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                                      onfocus="if(this.value == this.defaultValue) { this.value = ''; }" rows="3"
                                      cols="40" name="content" class="text_area" required="True" ></textarea>
                        </div>
                        <div class="gb_left" style="width:48%; height:auto; float:left;">
                            <input id="name" type="text" placeholder="昵称"
                                   onblur="if(this.value == '') { this.value = this.defaultValue; }"
                                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" size="30"
                                   name="name" class="input" required="True" >
                            <input id="phone" type="text" placeholder="电话"
                                   onblur="if(this.value == '') { this.value = this.defaultValue; }"
                                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" size="30"
                                   name="phone" class="input">
                            <input id="email" type="text" placeholder="邮箱"
                                   onblur="if(this.value == '') { this.value = this.defaultValue; }"
                                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" size="30"
                                   name="email" class="input" required="True" >
                        </div>
                        <div style="width:100%; height:37px; float:left;">
                            <input id="submit" type="submit" value="提交" class="submit">
                        </div>
                    </div>
                </form>
                <style>
                    .gusetbook .gb_left .input {
                        width: 100%;
                        height: 2em;
                        border: 1px solid #dbdbdb;
                        margin-bottom: 1em;
                        color: #636363;
                        font-family: "微软雅黑";
                        font-size: .8em;
                        text-indent: 8px;
                        line-height: 2em;
                    }

                    .gusetbook .gb_right .text_area {
                        width:100%;
                        height: 8em;
                        /*padding: 10px;*/
                        color: #636363;
                        font-family: "微软雅黑";
                        font-size: .8em;
                        resize: none;
                        border: 1px solid #dbdbdb;
                    }

                    .submit {
                        width: 100%;
                        height: 2em;
                        background: #aaaaaa;
                        color: #fff;
                        font-family: "微软雅黑";
                        font-size: 1em;
                        border: 1px solid #aaaaaa;
                    }
                </style>
            </div>
        </div>
    </div>
</div>
<?php
include("foot.html");
?>
<!--<div class="sfoot2">-->
<!--    <div>-->
<!--        版权所有：宁波博视达焊接机器人有限公司 &nbsp; &nbsp; &nbsp;	<a href="http://www.miibeian.gov.cn/" style="color:#FFF" target="_blank">浙ICP备15025096号  </a>  <br>-->
<!---->
<!--    </div>-->
<!--</div>-->

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