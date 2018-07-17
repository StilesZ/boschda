<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:31
 */
include '../config.php' ?>
<div class="title">
    <div class="name">焊机名称：<input type="text" name="name"><button onclick="search('machine/main.php')">查询</button></div>
    <div class="add"><a onclick="action('machine/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">焊机名称</div>
        <div class="list_1">操作</div>
    </div>
<?
$sql="select * from machine";
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
        <div class="list_1"><a onclick="action('machine/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'machine')">删除</a></div>
    </div>
    <?
}
?>
</div>
