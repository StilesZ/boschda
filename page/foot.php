<?php
/**
 * Created by PhpStorm.
 * User: Triton
 * Date: 2018/7/5
 * Time: 16:46
 */
include '../config.php';
?>
<div class="sfoot2">
    <div>
        <?=$copyright?>&nbsp; &nbsp; &nbsp;
        <a href="http://www.miibeian.gov.cn/" style="color:#FFF" target="_blank">浙ICP备15025096号  </a>  <br>

    </div>
</div>
<script>
    var $nav = $('#head');

    var navTop = $nav.offset().top;// 获取导航节点距离顶部位置

    var navH = $nav.outerHeight();

    var fix_length = navH; //设置导航滚动到多少再消失(可自己设置)

    var winTop_1 = 0; // 设置初始位置

    var winWidth = $(window).width();// 判断浏览器宽度(可用于自适应是否启用此效果)


    // 判断滚动条a
    $(window).on('scroll', function () {

        $('.nav').removeClass('open');
        $('.menu').removeClass('open');
        // 滚动条距离顶部距离
        var winTop_2 = $(window).scrollTop();
        //开始浮动，不过不显示
        if (winTop_2 > navTop) {
            $nav.addClass('fixed-nav');
            if (winTop_2 > winTop_1) {
                $nav.addClass('fix_sec');
                if (winTop_2 > fix_length) {
                    $nav.removeClass('fix_sec');
                }
            }
        } else {
            $nav.removeClass('fixed-nav');
        }
        //判断鼠标向上滚动，显示出来
        if (winTop_2 > winTop_1) {
            $nav.removeClass('fixed-nav-appear');
            $nav.removeClass('shadow');
            $nav.addClass('fixed-nav');
        } else if (winTop_2 < winTop_1 && winTop_2 > 0) {
            $nav.addClass('fixed-nav-appear');
            // $nav.removeClass('shadow');
            $nav.removeClass('fix_sec');
        } else if (winTop_2 == 0) {
            $nav.removeClass('fixed-nav-appear');
            $nav.addClass('shadow');
        }
        // 滚动后距离赋值
        winTop_1 = $(window).scrollTop();
    })
    </script>