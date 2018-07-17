<script>
    $(function(){
        var $divWidth = $('body').innerWidth();
        $('.b-img img').css({'width':$divWidth});

    });
</script>
<header id="head">
    <div class="head-top">
        <form>
            <div class="search">
                <select class="select">
                    <option>product</option>
                </select>
                <input type="text" size="10" style="float: left; height: 2em; border: 0; background-color: rgba(229,229,229,0.6);;" placeholder="xsxssx">
                <input type="button" class="seaBut">
            </div>
        </form>
    </div>
    <div class="head-main">
        <div class="logo"></div>
        <div class="nav-trigger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu">
            <ul class="nav" id="cd-navigation">
                <li><a href="index.php">首页</a></li>
                <li><a href="about.php">走进博视达</a>
                    <ul class="sub-nav">
                        <li><a href="about.php">公司简介</a></li>
                    </ul>
                </li>
                <li><a href="news.php">产业资讯</a>
                    <ul class="sub-nav">
                        <li><a href="news.php">新闻资讯</a></li>
                        <li><a href="news.php?pid=2">技术研讨</a></li>
                        <li><a href="video.php">视频案例</a></li>
                    </ul>
                </li>
                <li class="active"><a href="product.php?pid=1">产品系列</a>
                    <ul class="sub-nav">
                        <?
                        $sql="select * from product_type where pid=1";
                        $result=$mysqli->query($sql);
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()) {
                        ?>
                                <li><a href="product.php?tid=<?=$row['id']?>&pid=1"><?=$row['name'] ?></a></li>
                            <?    }
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="product.php?pid=2">行业应用</a>
                    <ul class="sub-nav">
                        <?
                        $sql="select * from product_type where pid=2";
                        $result=$mysqli->query($sql);
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <li><a href="product.php?tid=<?=$row['id']?>&pid=2"><?=$row['name'] ?></a></li>
                            <?    }
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="join.php">合作加盟</a></li>
                <li><a href="contact.php">联系我们</a>
                    <ul class="sub-nav">
                        <li><a href="contact.php">联系我们</a></li>
                        <li><a href="job.php">招贤纳士</a></li>
                        <li><a href="me.php">在线留言</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>