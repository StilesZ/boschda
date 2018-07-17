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

</style>
<body>
<?php
include("head.php");
?>
<div class="title-img" data-c_tl_id="tl_86b5022c">
    <div class="about-img" style="background-image: url('img/origin.jpg'); "></div>
    <div class="title-text">
        <div>
            <p class="about_us">ABOUT US</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>

<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="about.php">博视达</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="about.php" style="color: red">公司简介</a>
    </div>
</div>

<div class="insideMain">
    <div>
        <div class="title-tips">
            <h1 class="title-name">集团故事</h1>
               <p class="title-en">about us</p>
        </div>
        <?
        $sql="SELECT * FROM article where article.type=3";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
        $newsObj = $result->fetch_object();
        ?>
        <div class="about-content">
<!--            <div class="content-img">-->
<!--                <img class="div-img" src="../upload/--><?//=$newsObj->pic?><!--">-->
<!--            </div>-->
            <div class="content-main">
                <?=$newsObj->content?>
            </div>
        </div>
    </div>
</div>
<?}?>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
