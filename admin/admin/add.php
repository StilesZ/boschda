<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 16:46
 */
include '../config.php';
$row=array();//定义空数组
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];//获取id
    $sql = "select * from admin where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<!--三元字符判断是否有值-->
<form action="admin/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="用户名" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }"  size="30" name="name" value="<?=count($row)>0?$row[1]:''?>">
            <input type="text" placeholder="密码" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }"  size="30" name="psw" value="<?=count($row)>0?$row[2]:''?>">
            <input type="text" placeholder="状态" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }"  size="30" name="status" value="<?=count($row)>0?$row[5]:''?>">
<!--            <input type="text" placeholder="用户类型" onblur="if(this.value == '') { this.value = this.defaultValue; }"-->
<!--                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }"  size="30" name="type" value="--><?//=count($row)>0?$row[3]:''?><!--">-->
            <select name="type">
                <?
                $sql="select * from user_type";
                $res = $mysqli->query($sql);
                while($option = $res->fetch_assoc()){
                    ?>
                    <option value="<?=$option['id']?>" <? if($option['id']==(count($row)>0?$row[3]:'1')) echo "selected='selected'";?>><?=$option['name']?></option>
                    <?
                }?>
            </select>
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>
    </div>
</form>


