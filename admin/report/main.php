<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/6/29
 * Time: 10:55
 */
include '../config.php';

?>
<script>
    $(document).ready(function () {

        var id="";
        var json={};
        json.val = {};
        var i=0;

        $("#show").click(function () {
            $(".dialog").css("display","block");
        });
        $(".close").click(function () {
            $(".dialog").css("display","none");
        });
        $("#add").click(function () {
            var name=prompt("工件属性","");
            if(name.trim()){
                $("#add").after("<div><input type='text' name='"+name+"' placeholder='"+name+"/(默认长度单位0.001mm，默认角度单位0.0001deg)'><button id='delete"+i+"' class='addButton' onclick='remove("+i+")'>-</button></div>");
                i++;
            }
        });
        $("#save").click(function () {
            var weld=$("select[name='weld-type']").val();
            var type=$("select[name='type']").val();
            var machine=$("select[name='machine']").val();

            json.weld=weld;
            json.type=type;
            json.machine=machine;

            $(".dialog").css("display","none");
        });

        $("select[name='weld-type']").change(function () {
            var weld=$("select[name='weld-type']").val();
            $.ajax({
                url:'report/list.php',
                type:'post',
                dataType:'json',
                data:{weld:weld},
                async:true,//同步
                success:function(result){
                    console.log(result);
                },
                error:function(){
                    alert('false');
                }
            });
        });

        remove=function(e){
            $("#delete"+e+"").parent("div").remove();
        }

        $(".client tr").click(function () {
            $(this).addClass("active");
            id=$(this).children('td').eq(0).text();
            $(this).siblings('tr').removeClass("active");
            // console.log(id);
        });

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
                    console.log(result.val);
                },
                error:function(){
                    alert('false');
                }
            });

            websocket.send(JSON.stringify(json));
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
            }?>
        </select>
        <button id="review" class="addButton">进入</button>
    </div>
    <div class="weld">
        <table>
            <tr>
                <th></th>
                <th>电压</th>
                <th>电流</th>
                <th>速度</th>
            </tr>
            <tr>
                <td>1</td>
                <td>电压</td>
                <td>电流</td>
                <td>速度</td>
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
            <td>32</td>
            <td>312</td>
        </tr>
        <tr>
            <td>2</td>
            <td>32</td>
            <td>312</td>
        </tr>
        <tr>
            <td>3</td>
            <td>32</td>
            <td>312</td>
        </tr>
    </table>
    <button class="start">开始</button>
</div>