<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:33
 */
include '../config.php';
$row=array();
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from weld_type where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<form action="weld_type/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="焊缝类型" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }"  size="30" name="name" value="<?=count($row)>0?$row[1]:''?>">
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>
    </div>
</form>

