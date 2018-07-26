<? include '../config.php' ?>
<div class="title">
    <div class="name">类别：<input type="text" name="name"><button onclick="search('img/main.php')">查询</button></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">略缩图</div>
        <div class="list_1">类别</div>
        <div class="list_1">路径</div>
        <div class="list_1">上传时间</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select * from image  ";
    if(!empty($_REQUEST['name'])){
        $type=$_REQUEST['name'];
        $sql.=" where type like '%{$type}%'";
    }
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['id']?></div>
            <div class="list_1"><img src="../upload/<?=$row['url']?>"></div>
            <div class="list_1"><?=$row['type']?></div>
            <div class="list_1"><?=$row['url']?></div>
            <div class="list_1"><?=$row['add_time']?></div>
            <div class="list_1"><a onclick="del(<?=$row['id']?>,'img')">删除</a></div>
        </div>
        <?
    }
    ?>
</div>
