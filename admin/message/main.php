<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php';
?>
div class="title">
<div class="name">文章搜索：<input type="text" name="name"><button onclick="search('message/main.php')">查询</button></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">标题</div>
        <div class="list_1">姓名</div>
        <div class="list_1">邮箱</div>
        <div class="list_1">电话</div>
        <div class="list_1">内容</div>
        <div class="list_1">日期</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select * from message ";
    if(!empty($_REQUEST['name'])){
        $type=$_REQUEST['name'];
        $sql.=" where title like '%{$type}%'";
    }
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['id']?></div>
            <div class="list_1"><?=$row['title']?></div>
            <div class="list_1"><?=$row['name']?></div>
            <div class="list_1"><?=$row['email']?></div>
            <div class="list_1"><?=$row['phone']?></div>
            <div class="list_1"><?=$row['content']?></div>
            <div class="list_1"><?=$row['time']?></div>
            <div class="list_1"><a onclick="del(<?=$row['id']?>,'message')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>

