<?php include("../config.php");
$pid=$_REQUEST["pid"];
$pid1=$_GET["pid"];
?>
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
        margin-bottom: 8em;
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


    .row-list {
        padding-top: 1em;
        word-spacing:-4px;
        /*text-align:justify;*/
    }
    .div-list {
        position: relative;
        padding: 0px 1em;
        height: auto;
        /*text-align: center;*/
        min-height: 5em;
        display: inline-block;
        /*float: left;*/
        baseline-shift: 0;
        zoom:1;
        vertical-align: top;
        width: 20%;
        transform: rotate(0deg) scale(1) translate(0%,0%);
        transition: All 0.5s ease;
        -ms-transform: rotate(0deg) scale(1) translate(0%,0%);
        -o-transform: rotate(0deg) scale(1) translate(0%,0%);
        -moz-transform: rotate(0deg) scale(1) translate(0%,0%);
        -webkit-transform: rotate(0deg) scale(1) translate(0%,0%);
        -ms-transition: All 0.5s ease;
        -o-transition: All 0.5s ease;
        -moz-transition: All 0.5s ease;
        -webkit-transition: All 0.5s ease;
        text-align: left;
    }

    .div-column {
        position: relative;
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: all 0.5s ease;
        top: 0px;
    }
    .column-img {
        position: relative;
        min-height: 3.5em;
        border: 1px none rgb(217, 217, 217);
        background-repeat: no-repeat;
        background-size: 100%;
        padding-top: 15%;
    }
    .column-title {
        padding-top: 2em;
        padding-left: 0px;
        transform: rotate(0deg) scale(1) translate(0%,0%);
        transition: All 0.5s ease;
        -ms-transform: rotate(0deg) scale(1) translate(0%,0%);
        -o-transform: rotate(0deg) scale(1) translate(0%,0%);
        -moz-transform: rotate(0deg) scale(1) translate(0%,0%);
        -webkit-transform: rotate(0deg) scale(1) translate(0%,0%);
        -ms-transition: All 0.5s ease;
        -o-transition: All 0.5s ease;
        -moz-transition: All 0.5s ease;
        -webkit-transition: All 0.5s ease;
        text-align: left;
    }
    .column-name {
        font-size: 1em;
        font-weight: 700;
        margin-top: 0px;
        margin-bottom: 0.5em;
        display: block;
        text-decoration: none;
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: all 0.5s ease;
        text-align: left;
        color: rgb(204, 204, 204);
        padding-left: 5px;
    }
    .name-type {
        min-height: 0px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 30px;
        padding-left: 5px;
    }
    .type-name {
        color: #868686;
        -webkit-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -ms-transform: rotate(0deg) scale(1) translate(0%, 0%);
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: all 0.5s ease;
    }
    .column-link {
        position: absolute;
        z-index: 0;
        bottom: 0;
        right: 0;
        top: 0;
        left: 0;
        min-height: 4em;
        min-width: 4em;
        display: inline-block;
    }
    .img-a {
        position: absolute;
        z-index: 0;
        bottom: 0;
        right: 0;
        top: 0;
        left: 0;
    }
    .div-list:hover{
        transform:translate(0,-1em);
        -webkit-transform:translate(0,-1em);
        -moz-transform:translate(0,-1em);
        -o-transform:translate(0,-1em);
        -ms-transform:translate(0,-1em);
        -webkit-box-shadow:0px 5px 15px #e5e5e5;
        -moz-box-shadow:0px 5px 15px #e5e5e5;
        box-shadow:0px 5px 15px #e5e5e5;
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
            var id=this.id;
        })
        <?
            if(empty($_REQUEST["tid"])){
                $tid="";
            }else{
                $tid=$_REQUEST["tid"];
            }
        if($tid==null){
            ?>
        // $('.menu-nav li a:first').css("color","#c70000");
        $('.menu-nav li a:first').addClass('active');
        <?
        }
        ?>
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
        <?
        if($pid==1){
        ?>
        <a class="p-text" href="?pid=1" style="color: red">产品中心</a>
    </div>
</div>

<div class="main">
    <div class="main-title">

            <h1 class="title-h">产品中心</h1>
            <p class="title-ep">product</p>
            <?
        }else if($pid==2){
            ?>
<a class="p-text" href="?pid=2" style="color: red">行业应用</a>
</div>
</div>

<div class="main">
    <div class="main-title">

        <h1 class="title-h">行业应用</h1>
        <p class="title-ep">Applications</p>
                <?
            }
        ?>

    </div>
    <div class="main-menu">
        <div class="menu-ul">
                <ul class="menu-nav">
                    <li><a href="product.php?pid=<?=$pid?>">全部</a></li>
                    <?
                    $sql="select * from product_type where pid={$pid}";
                    $result=$mysqli->query($sql);
                    if($result->num_rows>0){
                    while($row = $result->fetch_assoc()) {
                    ?>
                        <li><a href="?tid=<?=$row['id']?>&pid=<?=$row['pid']?>" id="<?=$row['id']?>" <? if($row['id']==$tid){?>class="active" <?}?>><?=$row['name']?></a></li>
                    <?    }
                    }
//                    $mysqli->close();
                    ?>
                </ul>
            </div>
    </div>

    <div style="margin-top: 80px;">
        <div class="c-row row-list">
            <?
            $pro_sql="select product.id as pid,product.name as name,pic,product_type.name as type_name from product,product_type where product.type_id=product_type.id ";
            if($tid){
                $pro_sql.="and product.type_id={$tid} ";
            }
            if($pid){
                $pro_sql.="and pid={$pid}";
            }
            $pro=$mysqli->query($pro_sql);
            while($row = $pro->fetch_assoc()) {
            ?>
                <div class="div-list">
                    <div class="div-column">
                        <div class="column-img"><img src="../upload/<?=$row['pic']?>" style="width: 100%"></div>
                        <a class="img-a" href="product-item.php?id=<?=$row['pid']?>&pid=<?=$pid?>"></a>
                        <div class="column-title">
                            <a class="column-name" href="product-item.php?id=<?=$row['pid']?>&pid=<?=$pid?>"><?=$row['name']?></a>
                            <div class="name-type"><p class="type-name"><?=$row['type_name']?></p></div>
                        </div>
                        <a class="column-link" href="product-item.php?id=<?=$row['pid']?>&pid=<?=$pid?>"></a>
                    </div>
                </div>
            <?
            }
            ?>
        </div>
    </div>
</div>
<?php
include("foot.html");
?>
<script>
    $(document).ready(function () {
        var wid = $(".div-list").innerWidth();
        var w=($("body").width() - wid * 4)>1?($("body").width() - wid * 4):($("body").width() - wid * 3);
        var left = w / 2;
        left=(left>0)?left:0;
        $(".div-list").css("left", left);
    })
    $(window).resize(function () {
        var wid = $(".div-list").innerWidth();
        var w=($("body").width() - wid * 4)>1?($("body").width() - wid * 4):($("body").width() - wid * 3);
        var left = w / 2;
        left=(left>0)?left:0;
        $(".div-list").css("left", left);
        console.log($("body").width(), wid, left);
    })
</script>
<script src="js/nav.js"></script>
</body>
</html>
