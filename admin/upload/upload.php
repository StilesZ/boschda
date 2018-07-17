<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/3
 * Time: 16:33
 */

function upload_fun($fileInfo,$path,$allowExt,$maxSize){
    $filename=$fileInfo["name"];
    $tmp_name=$fileInfo["tmp_name"];
    $size=$fileInfo["size"];
    $error=$fileInfo["error"];
    $type=$fileInfo["type"];

    $ext=pathinfo($filename,PATHINFO_EXTENSION);//取出文件路径中文件的类型的部分

    if (!file_exists($path)) {
        mkdir($path,0777,true);//创建目录
        chmod($path, 0777);//改变文件模式,所有人都有执行权限、写权限、度权限
    }

    $uniName=md5(uniqid(microtime(true),true)).'.'.$ext;
    $destination=$path."/".$uniName; //目标存放文件地址

    //当文件上传成功，存入临时文件夹，服务器端开始判断
    if ($error==0) {
        if ($size>$maxSize) {
            exit("上传文件过大！");
        }
        if (!in_array($ext, $allowExt)) {
            exit("非法文件类型");
        }
        if (!is_uploaded_file($tmp_name)) {
            exit("上传方式有误，请使用post方式");
        }
//        //判断是否为真实图片（防止伪装成图片的病毒一类的
//        if (!getimagesize($tmp_name)) {//getimagesize真实返回数组，否则返回false
//            exit("不是真正的图片类型");
//        }
        if (@move_uploaded_file($tmp_name, $destination)) {//@错误抑制符，不让用户看到警告
            return $uniName;
        }else{
            echo "文件".$filename."上传失败!";
        }
    }else{
        switch ($error){
            case 1:
                echo "超过了上传文件的最大值，请上传10M以下文件";
                break;
            case 2:
                echo "上传文件过多，请一次上传20个及以下文件！";
                break;
            case 3:
                echo "文件并未完全上传，请再次尝试！";
                break;
            case 4:
                return 4;
            case 7:
                echo "没有临时文件夹";
                break;
        }
    }
    return $uniName;
}
function saveRemote()
{
    $path = $_SERVER['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;

    $imgUrl = htmlspecialchars($this->fileField);
    $imgUrl = str_replace("&amp;", "&", $imgUrl);

    //获取带有GET参数的真实图片url路径
    $pathRes     = parse_url($imgUrl);
    $queryString = isset($pathRes['query']) ? $pathRes['query'] : '';
    $imgUrl      = str_replace('?' . $queryString, '', $imgUrl);
    //http开头验证
    if (strpos($imgUrl, "http") !== 0) {
        $this->stateInfo = $this->getStateInfo("ERROR_HTTP_LINK");
        return;
    }
    //获取请求头并检测死链
    $heads = get_headers($imgUrl, 1);
    if (!(stristr($heads[0], "200") && stristr($heads[0], "OK"))) {
        $this->stateInfo = $this->getStateInfo("ERROR_DEAD_LINK");
        return;
    }
    //格式验证(扩展名验证和Content-Type验证)
    $fileType = strtolower(strrchr($imgUrl, '.'));
    if (!in_array($fileType, $this->config['allowFiles']) || !isset($heads['Content-Type']) || !stristr($heads['Content-Type'], "image")) {
        $this->stateInfo = $this->getStateInfo("ERROR_HTTP_CONTENTTYPE");
        return;
    }
    //打开输出缓冲区并获取远程图片
    ob_start();
    $context = stream_context_create(
        array('http' => array(
            'follow_location' => false // don't follow redirects
        ))
    );
    readfile($imgUrl . '?' . $queryString, false, $context);
    $img = ob_get_contents();
    ob_end_clean();
    preg_match("/[\/]([^\/]*)[\.]?[^\.\/]*$/", $imgUrl, $m);
    $this->oriName = $m ? $m[1]:"";
    $this->fileSize = strlen($img);
    $this->fileType = $this->getFileExt();
    $this->fullName = $this->getFullName();
    $this->filePath = $this->getFilePath();
    $this->fileName = $this->getFileName();
    $dirname = dirname($this->filePath);
    //检查文件大小是否超出限制
    if (!$this->checkSize()) {
        $this->stateInfo = $this->getStateInfo("ERROR_SIZE_EXCEED");
        return;
    }
    //检查文件内容是否真的是图片
    if (substr(mime_content_type($this->filePath), 0, 5) != 'image') {
        $this->stateInfo = $this->getStateInfo("ERROR_TYPE_NOT_ALLOWED");
        return;
    }
    //创建目录失败
    if (!file_exists($dirname) && !mkdir($dirname, 0777, true)) {
        $this->stateInfo = $this->getStateInfo("ERROR_CREATE_DIR");
        return;
    } else if (!is_writeable($dirname)) {
        $this->stateInfo = $this->getStateInfo("ERROR_DIR_NOT_WRITEABLE");
        return;
    }
    //移动文件
    if (!(file_put_contents($this->filePath, $img) && file_exists($this->filePath))) { //移动失败
        $this->stateInfo = $this->getStateInfo("ERROR_WRITE_CONTENT");
    } else { //移动成功
        $this->stateInfo = $this->stateMap[0];
    }
}