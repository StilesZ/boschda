<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 16:25
 */

include '../config.php';
$row=array();
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql="select * from image where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<form action="img/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post" enctype="multipart/form-data">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="类别" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="type" value="<?=count($row)>0?$row[1]:''?>">
            <input type="url" placeholder="路径" name="url" value="<?=count($row)>0?$row[2]:''?>">
            <input type="file" id="1" name="file1" placeholder="略缩图" onchange="show(this)">
            <div id="img1" class="img"><img src="../../upload/<?=count($row)>0?$row[2]:''?>"></div>
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>

    </div>
</form>