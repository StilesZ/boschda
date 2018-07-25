<?php include '../config.php' ?>
<div class="title">
    <div class="name">用户名：<input type="text" name="name"><button onclick="search('admin/main.php')">查询</button></div>
    <div class="add"><a onclick="action('admin/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">用户名</div>
        <div class="list_1">类型</div>
        <div class="list_1">状态</div>
        <div class="list_1">登录时间</div>
        <div class="list_1">登录次数</div>
        <div class="list_1">操作</div>
    </div>
<?
//信息查询
$sql="select * from admin";
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
        <div class="list_1"><?=$row['user_type']?></div>
        <div class="list_1"><?=$row['status']?></div>
        <div class="list_1"><?=$row['login_time']?></div>
        <div class="list_1"><?=$row['login_times']?></div>
        <div class="list_1"><a onclick="action('admin/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'admin')">删除</a></div>
    </div>
    <?
}
?>
</div>
