<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/4
 * Time: 9:51
 */
$filename=$_GET['filename'];

if($filename){
    $file="../../upload/".$filename;
    $url = trim($filename, '/');
    $urlarray = explode('/', $url);
    array_shift($urlarray);
    $filename=$urlarray[0];
    header("Content-Disposition:attachment;filename=download_$filename");
    header('content-length:'.filesize($file));
    readfile($file);
    exit;
}