<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php' ?>
<div class="title">
    <div class="name">类型：<input type="text" name="name"><button onclick="search('video/main.php')">查询</button></div>
    <div class="add"><a onclick="action('video/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">标题</div>
        <div class="list_1">略缩图</div>
        <div class="list_1">链接地址</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select * from video ";
    if(!empty($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        $sql.=" where name like '%{$name}%'";
    }
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['id']?></div>
            <div class="list_1"><?=$row['name']?></div>
            <div class="list_1"><img src="../upload/<?=$row['pic']?>"></div>
            <div class="list_1"><?=$row['url']?></div>
            <div class="list_1"><a onclick="action('video/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'video')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>