<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:31
 */
include '../config.php' ?>
<div class="title">
    <div class="name">焊缝类型：<input type="text" name="name"><button onclick="search('weld_type/main.php')">查询</button></div>
    <div class="add"><a onclick="action('weld_type/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">焊缝类型</div>
        <div class="list_1">操作</div>
    </div>
<?
$sql="select * from weld_type";
if(!empty($_REQUEST['name'])){
    $name=$_REQUEST['name'];
    $sql.=" where name='{$name}'";
}
$pro=$mysqli->query($sql);
while($row = $pro->fetch_assoc()) {
    ?>
    <div class="list">
        <div class="list_1"><?=$row['id']?></div>
        <div class="list_1"><?=$row['name']?></div>
        <div class="list_1"><a onclick="action('weld_type/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'weld_type')">删除</a></div>
    </div>
    <?
}
?>
</div>
