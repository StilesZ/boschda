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

    .recruit-main {
        padding-top: 5em;
        padding-bottom: 4em;
        background-color: rgb(255, 255, 255);
    }
    .recruit-content{
        width: 50%;
        margin: 0 auto;
        text-align: center;
        vertical-align: middle;
    }
    .recruit-content img{
        width: 100%;
        margin: 0;
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
            <p class="about_us">PRODUCT</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>

<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="contact.php">联系我们</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red">招贤纳士</a>
    </div>
</div>

<div class="recruit-main">
    <div class="recruit-content">
        <img src="img/recruit.jpg">
    </div>
</div>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
