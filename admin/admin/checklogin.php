<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/7
 * Time: 9:46
 */
//判断session是否存在
if(empty($_SESSION['name'])){
    echo "<script>window.location.href='login.html'</script>";
}
