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
    $sql="select * from article,article_type where article.type=article_type.id and article.id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
}
?>
<form action="article/edit.php?id=<?=count($row)>0?$row[0]:''?>" method="post" enctype="multipart/form-data">
    <div style="margin:20px auto;">
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input type="text" placeholder="标题" onblur="if(this.value == '') { this.value = this.defaultValue; }"
                   onfocus="if(this.value == this.defaultValue) { this.value = ''; }" name="title" value="<?=count($row)>0?$row[1]:''?>">
            <select name="type_id">
                <?
                $sql1="select * from article_type";
                $res = $mysqli->query($sql1);
                while($option = $res->fetch_assoc()){
                    ?>
                    <option value="<?=$option['id']?>" <? if($option['id']==(count($row)>0?$row[4]:'1')) echo "selected='selected'";?>><?=$option['name']?></option>
                    <?
                }?>
            </select>
            <input type="file" id="1" name="file1" placeholder="略缩图" onchange="show(this)">
            <div id="img1" class="img"><img src="../../upload/<?=count($row)>0?$row[2]:''?>"></div>
            <textarea id="editor"  name="editor" placeholder="内容" ><?=count($row)>0?$row[3]:''?></textarea>
<!--            <script id="editor" name="editor" type="text/plain" ></script>-->
<!--            <textarea  type="text/plain" >--><?//=count($row)>0?$row[3]:''?><!--</textarea>-->
            <script type="text/javascript">

                //实例化编辑器
                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                var edit = UE.getEditor('editor');
                edit.ready(function() {
                    edit.execCommand('serverparam', {
                        'key1': 'news/{time}{rand:6}' //重定义图片上传路径
                    });
                });
                window.UEDITOR_HOME_URL = "__PUBLIC__/upload/news/";
                function getContent() {
                    var arr = [];
                    arr.push("使用editor.getContent()方法可以获得编辑器的内容");
                    arr.push("内容为：");
                    arr.push(UE.getEditor('editor').getContent());
                    alert(arr.join("\n"));
                }

                function setContent(isAppendTo) {
                    var arr = [];
                    arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
                    UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
                    alert(arr.join("\n"));
                }

                function hasContent() {
                    var arr = [];
                    arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
                    arr.push("判断结果为：");
                    arr.push(UE.getEditor('editor').hasContents());
                    alert(arr.join("\n"));
                }

                function clearLocalData () {
                    UE.getEditor('editor').execCommand( "clearlocaldata" );
                    alert("已清空草稿箱")
                }
            </script>

        </div>
        <div class="edit" style="width:88%; height:auto; margin: 0 auto;">
            <input id="submit" type="submit" value="提交" style="cursor: pointer;background: rgba(165,165,165,0.37);">
        </div>

    </div>
</form>