<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/12
 * Time: 15:33
 */
include '../config.php';
$row = array();
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from weld_type where id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<script>
    $(document).ready(function () {
        var i = 0;
        var json={};
        json.val = {};
        $("select[name='type']").change(function () {
            var place = $("select[name='type']").find("option:selected").text();
            var name = $("select[name='type']").val();
            $(".edit").eq(0).append("<div><input type='text' name='" + name + "' placeholder='" + place + "'><button id='delete" + i + "' class='addButton' onclick='remove(" + i + ")'>-</button></div>");
            i++;
        });
        remove = function (e) {
            $("#delete" + e + "").parent("div").remove();
        }

        //表单提交
        $('#addForm').on('submit', function (e){
            var input = $(".edit").eq(0).find('input');
            var num = input.length;
            //json赋值
            for (var i = 0; i < num; i++) {
                var val = input.eq(i).attr("name");
                // str = "json."+val+"='"+input.eq(i).val()+"'";
                str = "json.val." + val + "='" + input.eq(i).val() + "'";
                eval(str);
            }
            e . preventDefault();
            $.ajax({
                url:'weld_type/edit.php?id=<?=count($row)>0?$row[0]:''?>',
                type:'post',
                dataType:'text',
                data:json,
                async:true,//同步
                success:function(result){
                    console.log(result);
                    if(result.trim()=="success"){
                        action("weld_type/main.php");
                    }else{
                        alert("插入失败");
                    }
                },
                error:function(){
                    alert('false');
                }
            });
        })
    });
</script>
<form id="addForm" action="weld_type/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post">
    <div class="add_button" style="width:88%; margin: 1em auto;">
<!--        下拉菜单遍历-->
        <select name="type">
            <?
            $sql = "select * from weld_attr";
            $res = $mysqli->query($sql);
            while ($option = $res->fetch_assoc()) {
                ?>
                <option value="<?= $option['name'] ?>" <? if ($option['id'] == 1) echo "selected='selected'"; ?>><?= $option['remark'] ?></option>
                <?
            } ?>
        </select>
    </div>

    <div id="check_weld" style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <?
            if (!empty($row[1])) {
                $val = json_decode($row[1]);
                foreach ($val as $key => $value) {
                    ?>
                    <div><?= $key ?><input type='text' name='<?= $key ?>' value='<?= $value ?>'>
                        <button id='delete"+i+"' class='addButton' onclick='remove("+i+")'>-</button>
                    </div>
                    <?
                }
            }
            ?>
        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>
    </div>
</form>

