<?php include("../config.php"); ?>
<html>
<head>
    <title><?=$site_name?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<link href="css/c1.css" rel="stylesheet" type="text/css">
<link href="css/about.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/hide-nav.js"></script>
<script src="js/ban.js"></script>

<style>
    .main {
        /*margin-bottom: 150px;*/
    }
    .pro-title {
        padding-top: 1em;
    }
    .pro-left {
        float: left;
        position: relative;
        margin: 0 1.5% 0 3%;
        min-height: 5em;
        zoom:1;
        vertical-align: top;
        width: 45%;
        border: #8b8b8b 1px solid;
        overflow: hidden;
    }
    .pro-left img{
        position:relative;
        background-size: 100%;
        width:100%;
        margin:auto;
        z-index: -1;
        overflow: hidden;
    }
    .pro-right{
        float: left;
        position: relative;
        margin: 0 3% 0 1.5%;
        min-height: 5em;
        zoom:1;
        vertical-align: top;
        width: 45%;
        text-align: left;
        border: #e5e5e5 1px solid;
    }
    .pro-right h2 {
        width: 100%;
        height: 2em;
        float: left;
        border-bottom: 1px solid #ccc;
        font-size: 2rem;
        font-weight: normal;
        text-indent: 1em;
        line-height: 2em;
        /*margin-left: 1em;*/
    }

    .pro-content{
        width: 90%;
        float: left;
        /*line-height: 24px;*/
        font-size: .8rem;
        margin-left: 1em;
    }

    .pro-about{
        width:100%;
        height:auto;
        margin-top:2em;
    }
    .pro-slild{
        margin: 1em 0;
        clear: both;
        width: 100%;
    }

    .ctt {
        min-height: 15em;
        padding-top: .5em;
        clear: both;
        border-top: 0;
        text-align: left;
        color: #bcbcbc;
    }

    .tb ul {
        height: 3em;
        list-style-type: none;
    }

    .tb li {
        float: left;
        height: 3em;
        line-height: 3em;
        width: 174px;
        cursor: pointer;
    }

    /*用于控制显示与隐藏的css类*/
    .normaltab {
        color: #969696;
    }

    .hovertab {
        color: #ff0000;
        font-size: 1rem;
        background: #3e3e3e;
    }

    .dis {
        display: block;
        margin: 0 3%;
    }

    .undis {
        display: none;
        margin: 0 3%;
    }

</style>
<script>
    function g(o) {
        return document.getElementById(o);
    }

    function HoverLi(n) {//如果有N个标签，就将i<=N;
        var j=0,num=4;

        <?if($_REQUEST['pid']==2){
            echo "j=1;";
            echo "num=3;";
        }?>

        for (var i = 1; i <= num; i++) {
            var k=i+j;
            g('tb_' + k).className = 'normaltab';
            g('tbc_0' + k).className = 'undis';
        }

        g('tbc_0' + n).className = 'dis';
        g('tb_' + n).className = 'hovertab';
    }
</script>
<body>
<?php
include("head.php");
?>
<div class="title-img">
    <div class="about-img" style="background-image: url('img/origin.jpg'); "></div>
    <div class="title-text">
        <div>
            <p class="about_us">PRODUCT</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>
<?
if (isset($_REQUEST['id']) && $_REQUEST['id']>0) {
    $id = $_REQUEST['id'];
    $pid = $_REQUEST['pid'];
    $result = $mysqli->query("SELECT * FROM product WHERE id={$id}");
    if ($result->num_rows > 0) {
        $proObj = $result->fetch_object();
        ?>
        <div class="path">
            <div class="tips">
                <p class="p-text">您的位置：</p>
                <a class="p-text" href="index.php">首页</a>
                <p class="p-text">&nbsp; &gt; &nbsp;</p>
                <?
                if ($pid == 1) {
                    ?>
                    <a class="p-text" href="product.php?pid=1">产品中心</a>
                <?
                } elseif ($pid == 2) { ?>
                    <a class="p-text" href="product.php?pid=2">行业应用</a>
                <?
                } ?>
                <p class="p-text">&nbsp; &gt; &nbsp;</p>
                <a class="p-text" href="#" style="color: red"><?= $proObj->name ?></a>
            </div>
        </div>

        <div class="main">
            <div class="pro-title">
                <div class="pro-left"><img src="../upload/<?= $proObj->img ?>"></div>
                <div class="pro-right">
                    <h2><?= $proObj->name ?></h2>
                    <div class="pro-content">
                        <?= $proObj->introduce ?>
                    </div>
                </div>
            </div>

            <div class="pro-about">
                <div class="pro-slild">
                    <div id="tb" class="tb">
                        <ul>
                            <?
                            if ($pid == 1) {
                                ?>
                                <li id="tb_1" class="normaltab" onmouseover="x:HoverLi(1);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">性能特点
                                </li>
                                <li id="tb_2" class="normaltab" onmouseover="i:HoverLi(2);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">技术特点
                                </li>
                                <li id="tb_3" class="normaltab" onmouseover="a:HoverLi(3);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">相关应用
                                </li>
                                <li id="tb_4" class="hovertab" onmouseover="a:HoverLi(4);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">相关配件
                                </li>
                                <?
                            } elseif ($pid == 2) { ?>
                                <li id="tb_2" class="normaltab" onmouseover="x:HoverLi(2);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">技术参数
                                </li>
                                <li id="tb_3" class="normaltab" onmouseover="i:HoverLi(3);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">应用视频
                                </li>
                                <li id="tb_4" class="hovertab" onmouseover="a:HoverLi(4);"
                                    style="font-size: 16px;margin-left:1px;text-align: center;">系统型号
                                </li>
                            <?
                            } ?>
                        </ul>
                    </div>
                    <div class="ctt">
                        <div class="undis" id="tbc_01">
                            <?=$proObj->content_nature ?>
                        </div>
                        <div class="undis" id="tbc_02">
                            <?= $proObj->content_technology ?>
                        </div>
                        <div class="undis" id="tbc_03">
                            <?= $proObj->content_use ?>
                        </div>
                        <div class="dis" id="tbc_04">
                            <?= $proObj->content_parts ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?
    }
}
?>
<?php
include("foot.html");
?>
<script>
    $(window).resize(function () {
            var heightLeft= $(".pro-left").height();
            var heightRight= $(".pro-right").height();
            if (heightLeft > heightRight)
            {
                $(".pro-right").height(heightLeft);
            }
            else
            {
                $(".pro-left").height(heightRight);
            }
        });

        $(document).ready(function(){
            var heightLeft= $(".pro-left").height();
            var heightRight= $(".pro-right").height();
            if (heightLeft > heightRight)
            {
                $(".pro-right").height(heightLeft);
            }
            else
            {
                $(".pro-left").height(heightRight);
            }
        })
</script>
<script src="js/nav.js"></script>
</body>
</html>
