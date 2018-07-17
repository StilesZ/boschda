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
    .main-menu {
        margin-top: 50px;
        color: #dddddd;
        background-color: rgba(194, 194, 194, 0.6);
    }
    .menu-ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-top: 30px;
        min-height: 80px;
    }
    .menu-nav {
        margin-top: 0;
        margin-bottom: 10px;
        list-style-type: none;
        padding-left: 0px;
    }
    .menu-nav li {
        float: left;
        margin-bottom: 5px;
        display: inline-block;
        margin-left: 5px;
        margin-right: 5px;
        background-color: transparent;
        border-radius: 0px;
    }
    .menu-nav li a {
        display: block;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
        padding: 5px 15px;
        display: block;
        color: rgb(255, 255, 255);
        border-radius: 0px;
        -webkit-transform: rotate(0deg) scale(1) translate(0px, 0px);
        -ms-transform: rotate(0deg) scale(1) translate(0px, 0px);
        transform: rotate(0deg) scale(1) translate(0px, 0px);
        transition: all 0.5s ease;
    }
    .menu-nav li a.active {
        color: #c70000;
    }
    .menu-nav li a:hover {
        color: #c70000;
    }

    .news-list {
        margin-bottom: 0px;
        margin-top: 4em;
        padding-bottom: 2em;
        border-bottom: 1px solid rgba(204, 204, 204, 0.0980392);
        border-bottom-style: none;
    }

    .c-div, .c-list, .c-listitem {
        min-height: 3em;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }

    .list_ul {
        list-style-type: none;
        padding-left: 0px;
    }
    .list_li {
        padding: 1em 2em 1em 1em;
        margin-bottom: 2em;
        background-color: transparent;
    }

    .list-item {
        position: relative;
        min-height: 10em;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-color: rgba(68, 68, 68, 1);
    }

    .item-img {
        width: 40%;
        height: 15em;
        float: left;
        display: inline-block;
        position: static;
        top: 0px;
        left: 0px;
        border: 1px none rgb(204, 204, 204);
        background-size: cover;
        background-position: 50% 50%;
        filter: saturate(0.2);
        /*overflow: hidden;*/
    }

    .item-img img{
        width: 100%;
        height: 100%;
        min-width: 100%;
        min-height: 100%;
        /*overflow: hidden;*/
    }
    
    .item-text {
        width: 50%;
        margin-left: 1em;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        margin-top: 0px;
        padding-right: 4em;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: All 0.5s ease;
        -ms-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -o-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -moz-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -webkit-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -ms-transition: All 0.5s ease;
        -o-transition: All 0.5s ease;
        -moz-transition: All 0.5s ease;
        -webkit-transition: All 0.5s ease;
    }

    .text-title {
        font-size: 1rem;
        float: none;
        clear: both;
        display: inline-block;
        padding-left: 0px;
        margin-top: 2em;
        font-weight: bold;
        text-decoration: none;
        color: rgb(204, 204, 204);
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: All 0.5s ease;
        -ms-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -o-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -moz-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -webkit-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -ms-transition: All 0.5s ease;
        -o-transition: All 0.5s ease;
        -moz-transition: All 0.5s ease;
        -webkit-transition: All 0.5s ease;
    }

    .item-content {
        float: none;
        width: 100%;
        padding-left: 0;
        line-height: 1.5em;
        text-align: justify;
        color: rgb(112, 112, 112);
        height: auto;
        margin-bottom: 0;
        margin-top: 1em;
        font-size: .8rem;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        /*white-space: nowrap;*/
        /*text-overflow: ellipsis;*/
        /*word-break:keep-all;*/
        /*-o-text-overflow: ellipsis;*/
    }
    .item-content p{
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-break:keep-all;
        -o-text-overflow: ellipsis;
        -webkit-line-clamp: 3;

    }
    .item-time {
        /*margin-top: 2em;*/
        height: 0;
        min-height: 0;
        background-color: transparent;
        border-top: 1px solid rgba(204, 204, 204, 0.0980392);
        width: 100%;
        overflow: hidden;
        -webkit-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -ms-transform: rotate(0deg) scale(1) translate(0%, 0%);
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: all 0.5s ease;
        opacity: 0;
    }
    .div_time {
        min-height: 0;
        width: 6em;
        overflow: hidden;
    }
    .paragraph {
        color: rgb(204, 204, 204);
        margin-top: 5px;
        /*text-align: center;*/
        position: relative;
        left: -2.8em;
    }
    .paragraph-s{
        color: rgb(204, 204, 204);
        margin-top: -1em;
        /*text-align: center;*/
        position: relative;
        left: -2.8em;
    }
    .linkblock {
        position: absolute;
        bottom: 0;
        right: 0;
        top: 0;
        left: 0;
        min-height: 4em;
        min-width: 4em;
        display: inline-block;
    }

</style>
<script>
    $(document).ready(function () {
        $("#tips a").each(function () {
            $this = $(this);
            if ($this[0].href == String(window.location)) {
                $this.addClass("active");
            }
        });

        $('.menu-nav li a').click(function () {
            $('.menu-nav li a').removeClass('active');
            $(this).addClass('active');
        })

        $(".list_li").mouseover(function(){
            $(this).children().find(".item-img").css("filter", "none");
            $(this).children().find(".text-title").css({"color": "red"});
            $(this).children().find(".item-time").css({"height": "2em","opacity":"0.8"});
            // $(this).children().find(".paragraph").css({"text-align": "none","left":"-2.8em"});
        });
        $(".list_li").mouseout(function(){
            $(this).children().find(".item-img").css("filter", "saturate(0.2)");
            $(this).children().find(".text-title").css({"color": "rgb(204, 204, 204)"});
            $(this).children().find(".item-time").css({"height": "0","opacity":"0"});
        });

        var pic = $('.item-content').find('img');
        for(var i=0;i<pic.length;i++){
            pic.eq(i).hide();
        }
        console.log(pic.eq(1));
    });
</script>
<body>
<?php
include("head.php");
?>
<div class="title-img">
    <div class="about-img" style="background-image: url('img/origin.jpg'); "></div>
    <div class="title-text">
        <div>
            <p class="about_us">NEWS</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>
<?
$sql="SELECT *,article.id as aid FROM article,article_type where article.type=article_type.id ";
if(empty($_REQUEST["pid"])){
    $pid="1";
    $sql.="and type={$pid}";
}else{
    $pid=$_REQUEST["pid"];
    $sql.="and type={$pid}";
}
$result = $mysqli->query($sql);
$news = $result->fetch_array();
?>

<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="news.php">新闻中心</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red"><?=$news['name']?></a>
    </div>
</div>
<div class="main">
    <div class="main-title">
        <h1 class="title-h"><?=$news['name']?></h1>
        <p class="title-ep"><?=$news['aliases']?></p>
    </div>
    <div class="main-menu">
        <div class="menu-ul">
            <ul class="menu-nav">
                <li><a href="?pid=1" <?if($pid==1){?> class="active" <?} ?>>新闻资讯</a></li>
                <li><a href="?pid=2" <?if($pid==2){?> class="active" <?} ?>>技术研讨</a></li>
                <li><a href="video.php">视频案例</a></li>
            </ul>
        </div>
    </div>

    <div class="news-list">
        <div class="">
            <ul class="c-list list_ul">
                <?
                $results = $mysqli->query($sql);
                if($results->num_rows>0){
                    while($news_list = $results->fetch_assoc()) {
                        ?>
                        <li class="list_li">
                            <div class="list-item">
                                <div class="item-img">
                                    <img src="../upload/<?=$news_list['pic'] ?>">
                                </div>
                                <div class="item-text">
                                    <a class="text-title" href="new-item.php?id=<?= $news_list['aid'] ?>"><?= $news_list['title'] ?></a>
                                    <div class="item-content">
                                        <?= $news_list['content'] ?>
                                    </div>
                                    <div class="item-time">
                                        <div class="div_time"><p class="paragraph"><?= date("Y-m-d H:i",strtotime($news_list['add_time'])) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
