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

    .message-main {
        margin-top: 3em;
        margin-bottom: 5em;
    }
    .message-about {
        font-size: .8rem;
        line-height: 2em;
        color: #555;
        width: 70%;
    }
    .message-form {
        width: 70%;
        height: 70%;
        text-align: left;
        padding-left: 0;
        margin-top: 4em;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
    }
    .form {
        margin-top: 5px;
    }
    .c-input {
          display: block;
          width: 100%;
          padding: 8px 12px;
          margin-bottom: 10px;
          font-size: 14px;
          line-height: 1.42857143;
          vertical-align: middle;
          border: 1px solid #ccc;
      }
    .input {
        float: left;
        background-color: transparent;
        border-style: none none solid;
        border-bottom-color: rgba(204,204,204,0.6);
        margin-bottom: 1.5em;
        padding-bottom: 1em;
        padding-top: 1em;
        height: 3em;
        color: rgb(153, 153, 153);
        width: 90%;
    }
    .text-area {
        float: left;
        height: 15em;
        width: 90%;
        background-color: transparent;
        border-style: none none solid;
        border-bottom-color: rgba(204, 204, 204, 0.6);
        color: rgb(153, 153, 153);
    }
    .point{
        float: left;
        width: 10%;
        height: 3em;
        line-height: 3em;
        color: rgb(153, 153, 153);
    }
    .submit {
        width: 40%;
        height: 50px;
        font-family: Oswald;
        background-color: rgb(217, 83, 79);
        color: rgb(255, 255, 255);
        border: none;
        margin-top: 10px;
        -webkit-transform: rotate(0deg) scale(1) translate(0%, 0%);
        -ms-transform: rotate(0deg) scale(1) translate(0%, 0%);
        transform: rotate(0deg) scale(1) translate(0%, 0%);
        transition: all 0.5s ease;
        text-transform: uppercase;
    }
    .success{
        display: none;
        text-align: center;
    }
    .fail {
        display: none;
        text-align: center;
        padding-top: 1em;
        padding-bottom: 1em;
        color: rgb(255, 0, 0);
        background-color: rgba(196, 196, 196, 0.498039);
        font-style: italic;
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
            <p class="about_us">MESSAGE</p>
            <p class="about">专业、专心、专一</p>
        </div>
    </div>
</div>

<div class="path">
    <div class="tips">
        <p class="p-text">您的位置：</p>
        <a class="p-text" href="index.php">首页</a>
        <p class="p-text">&nbsp; &gt; &nbsp;</p>
        <a class="p-text" href="#" style="color: red">在线留言</a>
    </div>
</div>

<div class="main">
    <div class="main-title">
        <h1 class="title-h">在线留言</h1>
        <p class="title-ep">MESSAGE</p>
    </div>

    <div class="message-main">
        <p class="message-about">
            说明：<br>
            1.以下带"*"部分必须填写;<br>
            2.请放心、认真填写以下内容,该内容不会对外公开;
        </p>
        <div class="message-form">
            <form class="form" method="post" action="../admin/message/edit.php" >
                <input class="c-input input" name="title" placeholder="标题" required="True" type="text"><div class="point">*</div>
                <input class="c-input input" name="name" placeholder="姓名" required="True" type="text"><div class="point">*</div>
                <input class="c-input input" name="email" placeholder="Email" required="True" type="email"><div class="point">*</div>
                <input class="c-input input" name="phone" placeholder="电话" type="text">
                <textarea class="c-input text-area" name="content" placeholder="内容" required="True"></textarea><div class="point">*</div>
                <button class="submit" name="Submit" type="submit" wait="">submit</button>
            </form>
            <h3 class="success">谢谢,表单已提交成功！</h3>
            <h4 class="fail">请完整填写表单的信息后，再进行提交！</h4>
        </div>
    </div>

</div>
<?php
include("foot.html");
?>
<script src="js/nav.js"></script>
</body>
</html>
