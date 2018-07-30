<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/6
 * Time: 8:47
 */
include '../config.php';
include '../page.php';
?>

<div class="title">
    <div class="name">类型：<input type="text" name="name">
        <button onclick="search('log/main.php')">查询</button>
    </div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">用户名</div>
        <div class="list_1">类型</div>
        <div class="list_1">操作</div>
        <div class="list_1">信息</div>
        <div class="list_1">时间</div>
        <div class="list_1">操作</div>
    </div>
    <?

    $nsql="select count(*) from log ";
    $sql = "select * from log ";
    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
        $sql .= "where type like '%{$name}%' ";
        $nsql .= "where type like '%{$name}%' ";
    }
    $nu = $mysqli->query($nsql);
    $nu = $nu->fetch_array();

    $pg = new page($nu[0], 10);//分页
    $sql .= $pg->limit;
    $pro = $mysqli->query($sql);
    while ($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?= $row['id'] ?></div>
            <div class="list_1"><?= $row['user'] ?></div>
            <div class="list_1"><?= $row['type'] ?></div>
            <div class="list_1"><?= $row['operate'] ?></div>
            <div class="list_1"><?= $row['content'] ?></div>
            <div class="list_1"><?= $row['time'] ?></div>
            <div class="list_1"><a onclick="del(<?= $row['id'] ?>,'log')">删除</a></div>
        </div>
        <?
    }
    ?>
<!--    显示分页脚本-->
    <?php echo $pg->fpage(); ?>
</div>