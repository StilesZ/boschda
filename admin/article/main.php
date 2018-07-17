<? include '../config.php' ?>
<div class="title">
    <div class="name">文章类型：<input type="text" name="name"><button onclick="search('article/main.php')">查询</button></div>
    <div class="add"><a onclick="action('article/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">标题</div>
        <div class="list_1">略缩图</div>
        <div class="list_1">内容</div>
        <div class="list_1">类型</div>
        <div class="list_1">添加日期</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select *,article.id as aid from article,article_type where article.type=article_type.id ";
    if(!empty($_REQUEST['name'])){
        $type=$_REQUEST['name'];
        $sql.=" and type='{$type}'";
    }
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['aid']?></div>
            <div class="list_1"><?=$row['title']?></div>
            <div class="list_1"><img src="../upload/<?=$row['pic']?>"></div>
            <div class="list_1"><?=$row['content']?></div>
            <div class="list_1"><?=$row['name']?></div>
            <div class="list_1"><?=$row['add_time']?></div>
            <div class="list_1"><a onclick="action('article/add.php?id=<?=$row['aid']?>')">编辑</a><a onclick="del(<?=$row['aid']?>,'article')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>
