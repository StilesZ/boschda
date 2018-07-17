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
    .news-content{
        width: 70%;
        margin: 0 auto;
        text-align: center;
        vertical-align: middle;
    }
    .news-content embed{
        min-width: 10em;
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
<?if (isset($_REQUEST['id']) && $_REQUEST['id']>0)
{
$pid = $_REQUEST['id'];
$result =$mysqli->query("SELECT * FROM video WHERE id={$pid}");
if ($result->num_rows>0)
{
$videoObj = $result->fetch_object();
?>
<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="video.php">视频案例</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red"><?=$videoObj->name?></a>
    </div>
</div>

<div class="main">
    <div class="news-content">
        <embed type="application/x-shockwave-flash" allowscriptaccess="always" align="middle" height="50%" width="100%" quality="high" allowfullscreen="true" src="<?=$videoObj->url?>">
        <?
	}
}
?>
    </div>
</div>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
