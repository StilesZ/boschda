<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php';
//默认焊缝种类 第一条
$sql = "select * from weld_type order by id ASC limit 1";
$result = $mysqli->query($sql);
$row = $result->fetch_array();
?>
<script>
    $(document).ready(function () {

        var id="";
        var json={};
        json.val = {};
        var i=0;

        //弹窗 工件名称为工件下拉框选中的值
        $(".dialog-title span").text($("select[name='type']").find("option:selected").text());

        //显示dialog弹窗
        $("#show").click(function () {
            $(".dialog").css("display","block");
        });
        //关闭dialog弹窗
        $(".close").click(function () {
            $(".dialog").css("display","none");
        });
        //添加工件属性标签
        $("#add").click(function () {
            var name=prompt("工件属性","");
            if(name.trim()){
                $("#add").after("<div><input type='text' name='"+name+"' placeholder='"+name+"/(默认长度单位0.001mm，默认角度单位0.0001deg)'><button id='delete"+i+"' class='addButton' onclick='remove("+i+")'>-</button></div>");
                i++;
            }
        });
        //dialog 保存按钮 保存后存值 亦或可把代码放在开始按钮内
        $("#save").click(function () {
            var weld=$("select[name='weld-type']").val();
            var type=$("select[name='type']").val();
            var machine=$("select[name='machine']").val();

            json.weld=weld;
            json.type=type;
            json.machine=machine;

            $(".dialog").css("display","none");
        });

        //工件类型
        $("select[name='type']").change(function () {
            $(".dialog-title span").text($("select[name='type']").find("option:selected").text());
        });

        //焊缝种类
        $("select[name='weld-type']").change(function () {
            var weld=$("select[name='weld-type']").val();
            $.ajax({
                url:'report/list.php',
                type:'post',
                dataType:'json',
                data:{weld:weld},
                async:true,
                success:function(result){
                    $('#weld tr:first').empty();
                    $('#weld tr:not(:first)').remove();
                    var th="<th></th>";
                    var tr="<tr><td>i</td>";
                    var result=JSON.parse(result);
                    console.log(result);
                    for(var p in result){//遍历json对象的每个key/value对,p为key
                        console.log(p + " " + result[p]);
                        th+="<th>"+p+"</th>";
                        tr+="<td>"+result[p]+"</td>";
                    }
                    tr+="</tr>";
                    $('#weld tr:first').append(th);
                    $('#weld').append(tr);
                },
                error:function(){
                    alert('false');
                }
            });
        });
        //删除添加的标签
        remove=function(e){
            $("#delete"+e+"").parent("div").remove();
        }

        //ip table 选中事件
        $(".client tr").click(function () {
            $(this).addClass("active");
            id=$(this).children('td').eq(0).text();
            $(this).siblings('tr').removeClass("active");
            // console.log(id);
        });

        //开始按钮
        $(".start").click(function () {
            var input=$('.dialog-attr').find('input');
            var num=input.length;
            for (var i=0;i<num;i++){
                var val=input.eq(i).attr("name");
                // str = "json."+val+"='"+input.eq(i).val()+"'";
                str = "json.val."+val+"='"+input.eq(i).val()+"'";
                eval(str);
            }

            $.ajax({
                url:'report/edit.php',
                type:'post',
                dataType:'json',
                data:json,
                async:true,//同步
                success:function(result){
                    console.log(result);
                    websocket.send(JSON.stringify(result));
                },
                error:function(){
                    alert('false');
                }
            });

            // websocket.send(JSON.stringify(json));
        })

    })
</script>
<div class="track">
    <div class="sel">
        工件类型：
        <select name="type" id="type">
            <?
            $sql="select * from work";
            $res = $mysqli->query($sql);
            while($option = $res->fetch_assoc()){
                ?>
                <option value="<?=$option['id']?>" <? if($option['id']==1) echo "selected='selected'";?>><?=$option['name']?></option>
                <?
            }?>
        </select>
        焊机选择：
        <select name="machine">
            <?
            $sql="select * from machine";
            $res = $mysqli->query($sql);
            while($option = $res->fetch_assoc()){
                ?>
                <option value="<?=$option['id']?>" <? if($option['id']==1) echo "selected='selected'";?>><?=$option['name']?></option>
                <?
            }?>
        </select>
    </div>
    <div class="sel-mui">
        工件属性：
        <button id="show">+</button>
    </div>
</div>
<div class="dialog">
    <div class="close">X</div>
    <div class="dialog-title"> 工件类型--<span></span></div>
    <div class="dialog-attr">
<!--        <div class="name"></div>-->
        <button id="add" class="addButton">+</button>
    </div>
    <div class="dialog-type">
        焊缝种类：
        <select name="weld-type">
            <?
            $sql="select * from weld_type";
            $res = $mysqli->query($sql);
            while($option = $res->fetch_assoc()){
                ?>
                <option value="<?=$option['id']?>" <? if($option['id']==1) echo "selected='selected'";?>><?=$option['id']?></option>
                <?
            }
            ?>
        </select>
        <button id="review" class="addButton">进入</button>
    </div>
    <div class="weld">
        <table id="weld">
            <tr>
                <th></th>
                <?
                if (!empty($row[1])) {
                    $val = json_decode($row[1]);
                    foreach ($val as $key => $value) {
                        ?>
                        <th><?=$key?></th>
                        <?
                    }
                }
                ?>
            </tr>

        </table>
    </div>
    <button id="save" class="save">保存</button>
</div>
<div class="view">
    <div class="left-view"></div>
    <div class="right-view"></div>
</div>
<div class="client">
    <table cellspacing="0" rules="cols">
        <tr style="border-bottom: 1px #868686 solid;background: #a5a5a5;" aria-disabled="true">
            <th>序号</th>
            <th>IP</th>
            <th>备注</th>
        </tr>
        <tr>
            <td>1</td>
            <td>192.168.1.1</td>
            <td>312</td>
        </tr>
        <tr>
            <td>2</td>
            <td>192.168.1.11</td>
            <td>312</td>
        </tr>
        <tr>
            <td>3</td>
            <td>192.168.1.12</td>
            <td>312</td>
        </tr>
    </table>
    <button class="start">开始</button>
</div>