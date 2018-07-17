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
        padding-top: 5em;
        background-color: rgb(255, 255, 255);
        padding-bottom: 4em;
    }
    .news-title{
        text-align: center;
    }
    .news-content{
        width: 70%;
        margin-top: 4em;
        /*padding: 0 10em;*/
    }
    .news-content img{
        width: 80%;
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
            <p class="about_us">NEWS</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>
<?
$sql="SELECT *,article.id as aid FROM article,article_type where article.type=article_type.id ";
if (isset($_REQUEST['id']) && $_REQUEST['id']>0) {
    $id=$_REQUEST["id"];
    $sql.="and article.id={$id}";
}
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
$newsObj = $result->fetch_object();
?>
<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="news.php">新闻中心</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red"><?=$newsObj->name?></a>
    </div>
</div>

<div class="main">
    <div class="news-title">
        <h2><?=$newsObj->title?></h2>
        <p></p>
    </div>
    <div class="news-content">
        <?=$newsObj->content?>
    </div>
</div>
<?}?>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
