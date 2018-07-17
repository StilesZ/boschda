<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php';
?>
<div class="title">
    <div class="name">文件标题：<input type="text" name="name"><button onclick="search('upload/main.php')">查询</button></div>
    <div class="add"><a onclick="action('upload/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">标题</div>
        <div class="list_1">路径</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select * from download ";
    if(!empty($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        $sql.=" and name='{$name}'";
    }
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['id']?></div>
            <div class="list_1"><?=$row['name']?></div>
<!--            <div class="list_1"><a href="upload/download.php?filename=--><?//=$row['url']?><!--">--><?//=$row['url']?><!--</a></div>-->
            <div class="list_1"><a target="_blank" href="../../upload/<?=$row['url']?>"><?=$row['url']?></a></div>
            <div class="list_1"><a onclick="action('upload/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'upload')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>

