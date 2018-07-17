<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php';
$row=array();
$sql="select * from site ";
$result = $mysqli->query($sql);
$row = $result->fetch_array();
?>
<form action="site/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post" enctype="multipart/form-data">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="站名" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="site_name" value="<?=count($row)>0?$row[1]:''?>">
            <input type="text" placeholder="域名" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="domain" value="<?=count($row)>0?$row[2]:''?>">
            <input type="text" placeholder="全国热线" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="copyright" value="<?=count($row)>0?$row[3]:''?>">
            <input type="text" placeholder="地址" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="address" value="<?=count($row)>0?$row[4]:''?>">
            <input type="text" placeholder="联系电话" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="tel" value="<?=count($row)>0?$row[5]:''?>">
            <input type="text" placeholder="手机号码" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="phone" value="<?=count($row)>0?$row[6]:''?>">
            <input type="text" placeholder="邮箱" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="email" value="<?=count($row)>0?$row[7]:''?>">
            <input type="text" placeholder="传真" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="fax" value="<?=count($row)>0?$row[8]:''?>">
            <input type="file" id="1" name="file1" placeholder="logo" onchange="show(this)">
<!--            <div id="img1" class="img"><img src="../../upload/--><?//=count($row)>0?$row[9]:''?><!--"></div>-->
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>

    </div>
</form>