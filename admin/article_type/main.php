<? include '../config.php' ?>
<div class="title">
    <div class="name">文章类型：<input type="text" name="name"><button onclick="search('article_type/main.php')">查询</button></div>
    <div class="add"><a onclick="action('article_type/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">类型名称</div>
        <div class="list_1">外文名</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select * from article_type  ";
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
            <div class="list_1"><?=$row['aliases']?></div>
            <div class="list_1"><a onclick="action('article_type/add.php?id=<?=$row['id']?>')">编辑</a><a onclick="del(<?=$row['id']?>,'article_type')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>
