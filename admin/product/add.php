<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/3
 * Time: 16:46
 */
include '../config.php';
$row=array();
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql="select * from product,product_type where product.type_id=product_type.id and product.id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<form action="product/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post" enctype="multipart/form-data">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="产品名称" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="name" value="<?=count($row)>0?$row[1]:''?>">
            <select name="type_id">
                <?
                $sql1="select * from product_type";
                $res = $mysqli->query($sql1);
                while($option = $res->fetch_assoc()){
                     ?>
                    <option value="<?=$option['id']?>" <? if($option['id']==(count($row)>0?$row[2]:'1')) echo "selected='selected'";?>><?=$option['name']?></option>
                    <?
                }?>
            </select>
            <input type="file" id="1" name="file1" placeholder="略缩图" onchange="show(this)">
            <div id="img1" class="img"><img src="../../upload/<?=count($row)>0?$row[3]:''?>"></div>
            <input type="file" id="2" name="file2" placeholder="效果图" onchange="show(this)">
            <div id="img2" class="img"><img src="../../upload/<?=count($row)>0?$row[4]:''?>"></div>
<!--            <textarea placeholder="产品介绍" name="introduce" >--><?//=count($row)>0?$row[5]:''?><!--</textarea>-->
<!--            <textarea placeholder="性能" name="content_nature" >--><?//=count($row)>0?$row[6]:''?><!--</textarea>-->
<!--            <textarea placeholder="技术" name="content_technology" >--><?//=count($row)>0?$row[7]:''?><!--</textarea>-->
<!--            <textarea placeholder="应用" name="content_use" >--><?//=count($row)>0?$row[8]:''?><!--</textarea>-->
<!--            <textarea placeholder="配件/型号" name="content_parts" >--><?//=count($row)>0?$row[9]:''?><!--</textarea>-->
            <textarea id="introduce"  name="introduce" placeholder="产品介绍" ><?=count($row)>0?$row[5]:''?></textarea>
            <textarea id="nature"  name="content_nature" placeholder="性能" ><?=count($row)>0?$row[6]:''?></textarea>
            <textarea id="technology"  name="content_technology" placeholder="技术" ><?=count($row)>0?$row[7]:''?></textarea>
            <textarea id="use"  name="content_use" placeholder="技术" ><?=count($row)>0?$row[8]:''?></textarea>
            <textarea id="parts"  name="content_parts" placeholder="配件/型号" ><?=count($row)>0?$row[9]:''?></textarea>
            <script type="text/javascript">

                var introduce = UE.getEditor('introduce');
                introduce.ready(function() {
                    introduce.execCommand('serverparam', {
                        'key1': 'product/{time}{rand:6}'
                    });
                });
                var nature = UE.getEditor('nature');
                nature.ready(function() {
                    nature.execCommand('serverparam', {
                        'key1': 'product/{time}{rand:6}'
                    });
                });
                var technology = UE.getEditor('technology');
                technology.ready(function() {
                    technology.execCommand('serverparam', {
                        'key1': 'product/{time}{rand:6}'
                    });
                });
                var use = UE.getEditor('use');
                use.ready(function() {
                    use.execCommand('serverparam', {
                        'key1': 'product/{time}{rand:6}'
                    });
                });
                var parts = UE.getEditor('parts');
                parts.ready(function() {
                    parts.execCommand('serverparam', {
                        'key1': 'product/{time}{rand:6}'
                    });
                });


            </script>
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>

    </div>
</form>