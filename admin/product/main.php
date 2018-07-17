<?php include '../config.php';
include '../page.php';?>
<div class="title">
    <div class="name">产品名称：<input type="text" name="name"><button onclick="search('product/main.php')">查询</button></div>
    <div class="add"><a onclick="action('product/add.php')">添加</a></div>
</div>
<div id="ch-main">
    <div class="list-title">
        <div class="list_1">id</div>
        <div class="list_1">产品名称</div>
        <div class="list_1">产品类型</div>
        <div class="list_1">类型</div>
        <div class="list_1">略缩图</div>
        <div class="list_1">效果图</div>
        <div class="list_1">产品介绍</div>
        <div class="list_1">性能</div>
        <div class="list_1">技术</div>
        <div class="list_1">应用</div>
        <div class="list_1">配件/型号</div>
        <div class="list_1">操作</div>
    </div>
    <?
    $sql="select *,product.id as pid,product.name as name,product_type.name as type_name,product_type.pid as tid from product,product_type where product.type_id=product_type.id ";
    if(!empty($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        $sql.=" where product.name='{$name}'";
    }
    $func=new sqlFunction($config);
    $nu=$func->StrQuery("product","count(*)");
    $pg=new page($nu,10);
    $sql.=$pg->limit;
    $pro=$mysqli->query($sql);
    while($row = $pro->fetch_assoc()) {
        ?>
        <div class="list">
            <div class="list_1"><?=$row['pid']?></div>
            <div class="list_1"><?=$row['name']?></div>
            <div class="list_1"><?=$row['type_name']?></div>
            <div class="list_1"><?=$row['tid']?></div>
            <div class="list_1"><img src="../upload/<?=$row['pic']?>"></div>
            <div class="list_1"><img src="../upload/<?=$row['img']?>"></div>
            <div class="list_1"><?=$row['introduce']?></div>
            <div class="list_1"><?=$row['content_nature']?></div>
            <div class="list_1"><?=$row['content_technology']?></div>
            <div class="list_1"><?=$row['content_use']?></div>
            <div class="list_1"><?=$row['content_parts']?></div>
            <div class="list_1"><a onclick="action('product/add.php?id=<?=$row['pid']?>')">编辑</a><a onclick="del(<?=$row['pid']?>,'product')">删除</a></div>
        </div>
        <?
    }
    ?>
    <?php echo $pg->fpage(); ?>
</div>
