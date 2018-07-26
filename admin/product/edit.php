<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/3
 * Time: 16:23
 */
include '../config.php';
include '../log/log.php';

header('content-type:text/html;charset=utf-8');
//初始化相关变量
//$fileInfo=$_FILES["myFile"];
$maxSize = 10485760;//10M,10*1024*1024
$allowExt = array('jpeg', 'jpg', 'png', 'tif', "txt");
$path = "../../upload/product";

include_once '../upload/upload.php';
//upload_fun($fileInfo, $path, $allowExt, $maxSize);
$count = 0;
//遍历file文件 赋值
foreach ($_FILES as $fileInfo) {
    $file[] = upload_fun($fileInfo, $path, $allowExt, $maxSize);
//    if ($file[$count] != 4) {
//        $url[$count] = $file[$count];
//    }
//    $count++;
}
$name = $_REQUEST['name'];
$type_id = $_POST['type_id'];
$introduce = $_REQUEST['introduce'];
$content_nature = $_REQUEST['content_nature'];
$content_technology = $_REQUEST['content_technology'];
$content_use = $_REQUEST['content_use'];
$content_parts = $_REQUEST['content_parts'];
$date=date('Y-m-d H:i:s',time());
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from product,product_type where product.type_id=product_type.id and product.id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();

    $pic = check($file[0], $row[3]);
    $img = check($file[1], $row[4]);

    $sqlU = "update product set name='{$name}',type_id='{$type_id}',pic='{$pic}',img='{$img}',introduce='{$introduce}',content_nature='{$content_nature}',content_technology='{$content_technology}',content_use='{$content_use}',content_parts='{$content_parts}' where id={$id}";
    $re = $mysqli->query($sqlU);
    if ($re) {
        addLog($mysqli,$_SESSION['name'],"product",'edit',"产品信息修改成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"product",'edit',"产品信息修改失败ID=".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}else{
    $pic = check($file[0],"");
    $img = check($file[1],"");
    $sqlU = "insert into product(name,type_id,pic,img,introduce,content_nature,content_technology,content_use,content_parts) values ('{$name}','{$type_id}','{$pic}','{$img}','{$introduce}','{$content_nature}','{$content_technology}','{$content_use}','{$content_parts}')";
    $re = $mysqli->query($sqlU);
    $id=$mysqli->insert_id;
    if ($re) {
        for($i=0;$i<count($file);$i++){
            $url=check($file[$i],'');
            if($url!=""){
                $sqlI = "insert into image(type,url,add_time) values ('product','{$url}','{$date}')";
                $res = $mysqli->query($sqlI);
            }
        }
        addLog($mysqli,$_SESSION['name'],"product",'add',"产品信息添加成功ID=".$id);
        echo "<script>alert('success');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    } else {
        addLog($mysqli,$_SESSION['name'],"product",'add',"产品信息添加失败".$id);
        echo "<script>alert('failed');location.href='" . $_SERVER["HTTP_REFERER"] . "';</script>";
    }
}
//判断图片路径值
function check($url, $row)
{
    if ($url == 4) {
        return $pic = $row ? $row : "";
    } else {
        return $pic = "product/" . $url;
    }
}




