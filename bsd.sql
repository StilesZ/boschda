-- MySQL dump 10.13  Distrib 5.5.60, for Win64 (AMD64)
--
-- Host: localhost    Database: bsd
-- ------------------------------------------------------
-- Server version	5.5.60

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES UTF8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `site_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `login_times` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e',1,NULL,1,'2018-07-27 15:24:15',67);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `pic` longtext,
  `content` longtext,
  `type` int(11) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'第二十届北京埃森焊接与切割展览会','news/e60520f44e9117ca811d6509ec3214cb.jpg','<p style=\"text-indent: 2em;\"><span style=\"text-indent: 2em;\">&nbsp;我司将参加2015第二十届北京·埃森焊接与切割展览会（上海新国际博览中心），展位号：<strong>E7 248</strong>，届时我司将展出最新科研的视觉焊缝跟踪设备；并会于展会期间<strong>6月16日下午13：00-14：30</strong>，在<strong>E7-M39</strong>座谈室（E7馆内），举办“<strong>焊缝视觉跟踪技术及其应用”讲座</strong>，届时欢迎各位莅临现场参观指导。</span></p>',1,'2015-06-05 10:23:49'),(2,'焊缝视觉跟踪系统','news/2015061014261348.png','<p style=\"text-align: center;\"><img src=\"/upload/news/2015071313285371.jpg\" alt=\"2015071313285371.jpg\" width=\"649\" height=\"749\"/></p><p style=\"line-height: 16px;\"><img src=\"http://localhost:8181/admin/editor/dialogs/attachment/fileTypeImages/icon_pdf.gif\" width=\"16\" height=\"16\" title=\"\" alt=\"\"/><a style=\"font-size:12px; color:#0066cc;\" href=\"/upload/file/1530851281970969.pdf\" title=\"1530851281970969.pdf\">1530851281970969.pdf</a></p><p><br/></p>',2,'2015-06-10 14:26:20'),(3,'宁波博视达焊缝视觉跟踪系统首次亮相埃森展','news/2015071318113910.jpg','<p style=\"text-align: center; line-height: 1.5em; margin-bottom: 5px;\"><img src=\"/upload/news/2015071318113910.jpg\" alt=\"2015071318113910.jpg\"/></p><p style=\"text-indent: 2em; line-height: 1.5em; margin-bottom: 5px;\">在上海刚刚结束的第二十届北京·埃森展（2015.6.16-2015.6.19）中，宁波博视达焊接机器人有限公司展出了系列焊缝视觉跟踪系统，获诸多业内专业人士的瞩目。在展览期间，有清华大学、上海交通大学、吉林大学、华南理工大学、中国石油大学教授和兵科院研究员的参观指导，也有国内各大机器人生产厂商、国内外各大焊接自动化设备公司专业负责人前来交流。</p><p style=\"text-indent: 2em; line-height: 1.5em; margin-bottom: 5px;\">本次展会，公司展出三大系列产品：单轴、双轴和三轴焊缝视觉跟踪系统。其中BSD-WT200单轴纵环缝系列适用于纵环缝和曲线焊缝跟踪，BSD-WT300双轴纵环缝系列适用于焊缝高低和左右均有变换的场合，BSD-WT400三轴马鞍形系列适用于三维空间曲线跟踪。同时，各焊缝视觉跟踪系统适用于氩弧焊、气保焊、激光焊、等离子焊和埋弧焊的焊缝跟踪，该产品已经在石油化工、电力电气、汽车配件、工业制冷、压力容器等各类客户中广泛使用，最长达6年多时间。</p><p style=\"text-indent: 2em; line-height: 1.5em; margin-bottom: 5px;\">博视达焊缝视觉跟踪系统能实现焊接时的焊缝实时跟踪，提高客户产品的焊接质量和焊接自动化水平。另外，能为客户高端定制，满足各类需求。</p><p style=\"text-align: center; text-indent: 0em; line-height: 1.5em; margin-bottom: 5px;\"><img alt=\"2015071318120067.jpg\" src=\"/upload/news/2015071318120067.jpg\"/></p><p style=\"text-indent: 2em; line-height: 1.5em; margin-bottom: 5px;\">展会期间，客服人员耐心细致地为客户讲解跟踪系统的功能、性能与使用方法，得到客户好评。与此同时，有国内外多家厂商对公司产品的应用与推广产生兴趣，并达成进一步合作意向。</p>',1,'2015-06-25 10:23:49'),(4,'','news/2015071314221786.jpg','<p style=\"text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp;<img src=\"/upload/news/2015071314221786.jpg\" alt=\"2015071314221786.jpg\"/></p><p style=\"text-indent: 2em;\">宁波博视达焊接机器人有限公司长期致力于焊接领域的视觉引导、运动控制和焊接流水线自动化的专业研发与生产。</p><p style=\"text-indent: 2em;\">公司的焊缝跟踪系统能实现各种类型的直缝、环缝、空间曲线焊缝的自动实时视觉引导，适用于氩弧焊、激光焊、等离子焊、气保焊、埋弧焊等焊接形式，并在石油化工、制冷设备、汽车配件、电力电气、特种车、钢构、造船等领域得到广泛应用。</p><p style=\"text-indent: 2em;\">公司秉承专业、专心、专一的理念，竭诚欢迎社会各界朋友真诚合作，提升中国焊接自动化水平！</p>',3,NULL),(5,'','','<p style=\"text-indent: 2em;\">宁波博视达焊接机器人有限公司在焊缝视觉跟踪引导领域处于领先水平，其焊缝跟踪系统能实现各种类型的直缝、环缝、空间曲线焊缝的自动实时视觉引导，适用于各种焊接工艺。现寻求区域经销服务商，共同推动服务焊接自动化的大趋势。</p>',4,NULL),(21,'宁波博视达“焊缝视觉跟踪技术及其应用”埃森展 讲座','news/1bef743677fb55687f6e1574457acdbc.jpg','<p style=\"text-indent: 0em; text-align: center;\"><img src=\"/upload/news/2015071413254595.jpg\" alt=\"2015071413254595.jpg\"/></p><p style=\"text-indent: 2em;\">第二十届北京·埃森焊接与切割展览会（6.16-6.19）在上海新国际博览中心落下帷幕，宁波博视达焊接机器人有限公司此次展出了系列焊缝视觉跟踪装置，并于16日下午13:00-14:30在E7-M39座谈室举办了“焊缝视觉跟踪技术及其应用”讲座。</p><p style=\"text-indent: 2em;\">此次讲座，宁波博视达焊接机器人有限公司总经理王一刚博士对焊接领域的自动化趋势进行了阐述，讲解了各类焊缝检测传感器原理，并详细介绍了焊缝视觉跟踪系统的工作原理及其产品系列。</p><p style=\"text-indent: 2em;\">博视达焊缝视觉跟踪系统首先通过视觉采集系统捕捉焊缝与熔池图像，运用机器视觉技术计算熔池与焊枪的相对偏移量，进而对执行机构发送运动指令，达到焊缝自动跟踪目的。同时，可通过熔池和弧焊电极的形态计算，对焊接质量进行深度分析。目前宁波博视达主要产品系列有单轴工业制管焊缝视觉跟踪系列、单轴纵环缝焊缝视觉跟踪系列、双轴纵环缝焊缝视觉跟踪系列、三轴马鞍型焊缝视觉跟踪系列、多轴机器人焊缝视觉跟踪系列、焊缝实时观测专用摄像头系列等。</p><p style=\"text-indent: 2em;\">讲座中，王博士结合实际应用案例视频，向在座嘉宾介绍了博视达焊缝视觉跟踪系统在各领域的成功应用。精彩的演讲，吸引了大批专业人士前来聆听，交流室内座无虚席。</p><p style=\"text-indent: 2em;\">在相互交流环节，王博士针对观众在焊缝视觉跟踪应用中遇到的问题，一一解答，并结合宁波博视达焊缝视觉跟踪系统的各应用案例进行了详细分析解说。</p><p style=\"text-indent: 2em;\">据悉，中国的焊接自动化水平约50%，跟发达国家的约75%相比有较大差距。通过该讲座，观众们对各类不同焊缝跟踪的原理、现状有了更全面了解，对焊缝视觉跟踪在焊接自动化领域的应用也有了更全面认识，有助于推动国内焊接行业自动化水平。</p><p style=\"text-indent: 0em; text-align: center;\"><img src=\"/upload/news/201507141328488.jpg\" alt=\"201507141328488.jpg\"/></p><p><br/></p>',1,'2018-07-06 13:04:57'),(22,'第23届埃森焊接展博视达邀请函','news/acb3d8b924a061a81ee0ead4b6254c6b.jpg','<p style=\"line-height: 1.5em;\">尊敬的合作伙伴：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">宁波博视达焊接机器人有限公司将于2018年5月8至5月11日参加第23届北京·埃森焊接与切割展览会，我司已确定于4号馆位置展出，展位号：4B019，诚邀各界朋友莅临现场指导工作。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">展会时间：2018年5月8至5月11日</p><p style=\"text-indent: 2em; line-height: 1.5em;\">展馆地点：广东现代国际展览中心</p><p style=\"text-indent: 2em; line-height: 1.5em;\">展位号：4号馆 4B019</p><p style=\"text-indent: 2em; line-height: 1.5em;\"><br/></p><p style=\"line-height: 1.5em; text-indent: 0em; text-align: center;\"><img src=\"http://localhost:8181/upload/news/2018050510485454.png\"/></p><p style=\"text-align: center;\"><img src=\"/upload/news/2018050510493060.jpg\"/></p><p style=\"text-align: center;\"><img src=\"http://localhost:8181/upload/news/2018050510500237.jpg\"/></p><p style=\"text-align: center;\"><br/></p>',1,'2018-07-06 13:13:28');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_type`
--

DROP TABLE IF EXISTS `article_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `aliases` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_type`
--

LOCK TABLES `article_type` WRITE;
/*!40000 ALTER TABLE `article_type` DISABLE KEYS */;
INSERT INTO `article_type` VALUES (1,'News',''),(2,'技术研讨','Technical'),(3,'关于','About'),(4,'合作加盟','Join');
/*!40000 ALTER TABLE `article_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `operate` varchar(50) DEFAULT NULL,
  `content` longtext,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'admin','login','login','用户登录成功ID=1','2018-07-13 14:14:50'),(2,'admin','login','login','用户登录成功ID=1','2018-07-13 15:30:57'),(3,'admin','login','login','用户登录成功ID=1','2018-07-16 08:37:12'),(4,'admin','download','edit','下载信息修改成功ID=1','2018-07-16 10:23:52'),(5,'admin','download','edit','下载信息修改成功ID=1','2018-07-16 10:25:09'),(6,'admin','report','add','数据发送成功','2018-07-16 10:49:16'),(7,'admin','report','add','数据发送成功','2018-07-16 10:50:10'),(8,'admin','login','login','用户登录成功ID=1','2018-07-16 10:59:48'),(9,'admin','report','add','数据发送成功','2018-07-16 13:34:10'),(10,'admin','report','add','数据发送成功','2018-07-16 13:34:26'),(11,'admin','report','add','数据发送成功','2018-07-16 13:35:10'),(12,'admin','report','add','数据发送成功','2018-07-16 13:35:36'),(13,'admin','login','login','用户登录成功ID=1','2018-07-16 13:35:55'),(14,'admin','report','add','数据发送成功','2018-07-16 13:36:06'),(15,'admin','report','add','数据发送成功','2018-07-16 13:36:43'),(16,'admin','login','login','用户登录成功ID=1','2018-07-16 14:22:48'),(17,'admin','report','add','数据发送成功','2018-07-16 15:44:54'),(18,'admin','login','login','用户登录成功ID=1','2018-07-16 15:45:21'),(19,'admin','report','add','数据发送成功','2018-07-16 15:48:17'),(20,'admin','report','add','数据发送成功','2018-07-16 15:48:54'),(21,'admin','report','add','数据发送成功','2018-07-16 15:55:02'),(22,'admin','report','add','数据发送成功','2018-07-16 15:55:56'),(23,'admin','report','add','数据发送成功','2018-07-16 15:56:15'),(24,'admin','report','add','数据发送成功','2018-07-16 15:56:38'),(25,'admin','login','login','用户登录成功ID=1','2018-07-16 16:01:51'),(26,'admin','report','add','数据发送成功','2018-07-16 16:02:13'),(27,'admin','report','add','数据发送成功','2018-07-16 16:19:35'),(28,'admin','report','add','数据发送成功','2018-07-16 16:20:52'),(29,'admin','report','add','数据发送成功','2018-07-16 16:24:11'),(30,'admin','report','add','数据发送成功','2018-07-16 16:36:07'),(31,'admin','report','add','数据发送成功','2018-07-16 16:37:27'),(32,'admin','report','add','数据发送成功','2018-07-16 16:37:39'),(33,'admin','report','add','数据发送成功','2018-07-16 16:37:44'),(34,'admin','report','add','数据发送成功','2018-07-16 16:38:49'),(35,'admin','report','add','数据发送成功','2018-07-16 16:56:09'),(36,'admin','report','add','数据发送成功','2018-07-16 16:57:06'),(37,'admin','report','add','数据发送成功','2018-07-16 17:00:36'),(38,'admin','report','add','数据发送成功','2018-07-17 09:43:23'),(39,'admin','report','add','数据发送成功','2018-07-17 09:44:09'),(40,'admin','report','add','数据发送成功','2018-07-17 09:44:33'),(41,'admin','report','add','数据发送成功','2018-07-17 09:50:31'),(42,'admin','report','add','数据发送成功','2018-07-17 09:51:36'),(43,'admin','report','add','数据发送成功','2018-07-17 09:52:28'),(44,'admin','report','add','数据发送成功','2018-07-17 09:53:41'),(45,'admin','report','add','数据发送成功','2018-07-17 09:53:51'),(46,'admin','report','add','数据发送成功','2018-07-17 09:54:14'),(47,'admin','report','add','数据发送成功','2018-07-17 09:57:07'),(48,'admin','report','add','数据发送成功','2018-07-17 09:58:36'),(49,'admin','report','add','数据发送成功','2018-07-17 10:04:51'),(50,'admin','report','add','数据发送成功','2018-07-17 10:04:57'),(51,'admin','report','add','数据发送成功','2018-07-17 10:05:39'),(52,'admin','report','add','数据发送成功','2018-07-17 10:08:23'),(53,'  or 1=1','login','login','用户登录失败ID=','2018-07-17 14:55:24'),(54,'admin','login','login','用户登录成功ID=1','2018-07-17 14:55:34'),(55,'admin','login','login','用户登录失败ID=1','2018-07-17 14:55:40'),(56,'admin','image','delete','图片删除成功ID=1','2018-07-17 14:56:16'),(57,'admin','article_type','delete','信息修改成功ID=1','2018-07-17 14:56:32'),(58,'admin','login','login','用户登录成功ID=1','2018-07-19 11:03:44'),(59,'admin','login','login','用户登录成功ID=1','2018-07-19 11:09:34'),(60,'admin','login','login','用户登录成功ID=1','2018-07-19 11:11:31'),(61,'admin','login','login','用户登录成功ID=1','2018-07-23 08:45:41'),(62,'admin','report','add','数据发送成功','2018-07-23 10:30:54'),(63,'admin','login','login','用户登录成功ID=1','2018-07-24 10:02:38'),(64,'admin','login','login','用户登录成功ID=1','2018-07-25 09:08:36'),(65,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 09:09:10'),(66,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 09:09:55'),(67,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 09:10:22'),(68,'admin','login','login','用户登录成功ID=1','2018-07-25 10:04:24'),(69,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 10:44:50'),(70,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 10:47:15'),(71,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 10:49:19'),(72,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 10:50:05'),(73,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:15:40'),(74,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:16:07'),(75,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:18:19'),(76,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:18:30'),(77,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:18:30'),(78,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:18:31'),(79,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:18:31'),(80,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:19:28'),(81,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:19:49'),(82,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:20:33'),(83,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:21:19'),(84,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:23:03'),(85,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:23:35'),(86,'admin','weld_type','add','工件信息添加失败ID=','2018-07-25 11:26:15'),(87,'admin','weld_type','add','工件信息添加成功ID=','2018-07-25 13:52:46'),(88,'admin','weld_type','add','工件信息添加成功ID=','2018-07-25 13:54:35'),(89,'admin','weld_type','add','工件信息添加成功ID=','2018-07-25 13:56:38'),(90,'admin','weld_type','edit','焊缝信息修改成功ID=6','2018-07-25 14:06:06'),(91,'admin','weld_type','edit','焊缝信息修改成功ID=6','2018-07-25 14:08:31'),(92,'admin','weld_type','edit','焊缝信息修改成功ID=6','2018-07-25 14:09:04'),(93,'admin','weld_type','edit','焊缝信息修改成功ID=6','2018-07-25 14:17:00'),(94,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 14:18:58'),(95,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 14:19:00'),(96,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 14:19:27'),(97,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 14:20:42'),(98,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 14:21:12'),(99,'admin','weld_type','edit','焊缝信息修改成功ID=6','2018-07-25 14:21:38'),(100,'admin','weld_type','edit','焊缝信息修改成功ID=4','2018-07-25 15:47:46'),(101,'admin','report','add','数据发送成功','2018-07-25 16:17:45'),(102,'admin','report','add','数据发送成功','2018-07-25 16:17:52'),(103,'admin','report','add','数据发送成功','2018-07-25 16:18:41'),(104,'admin','weld_type','add','工件信息添加成功ID=','2018-07-25 16:20:26'),(105,'admin','report','add','数据发送成功','2018-07-25 16:21:11'),(106,'admin','report','add','数据发送成功','2018-07-25 16:22:23'),(107,'admin','report','add','数据发送成功','2018-07-25 16:26:40'),(108,'admin','report','add','数据发送成功','2018-07-25 16:29:43'),(109,'admin','report','add','数据发送成功','2018-07-25 16:30:20'),(110,'admin','weld_type','add','工件信息添加成功ID=8','2018-07-25 16:53:55'),(111,'admin','login','login','用户登录成功ID=1','2018-07-25 17:05:22'),(112,'admin','report','add','数据发送成功','2018-07-26 09:49:23'),(113,'admin','report','add','数据发送成功','2018-07-26 09:52:25'),(114,'admin','report','add','数据发送成功','2018-07-26 09:53:08'),(115,'admin','report','add','数据发送成功','2018-07-26 09:55:58'),(116,'admin','report','add','数据发送成功','2018-07-26 09:56:32'),(117,'admin','report','add','数据发送成功','2018-07-26 09:57:26'),(118,'admin','report','add','数据发送成功','2018-07-26 09:58:23'),(119,'admin','report','add','数据发送成功','2018-07-26 09:58:25'),(120,'admin','report','add','数据发送成功','2018-07-26 09:58:33'),(121,'admin','report','add','数据发送成功','2018-07-26 10:00:03'),(122,'admin','download','delete','下载信息删除成功ID=1','2018-07-26 11:05:03'),(123,'admin','download','delete','下载信息删除成功ID=2','2018-07-26 11:05:10'),(124,'admin','product','edit','产品信息修改成功ID=1','2018-07-26 11:08:26'),(125,'admin','admin','delete','用户信息删除成功ID=13','2018-07-26 11:23:11'),(126,'admin','admin','delete','用户信息删除成功ID=12','2018-07-26 11:23:16'),(127,'admin','article','edit','信息修改成功ID=2','2018-07-26 16:26:10'),(128,'admin','login','login','用户登录成功ID=1','2018-07-26 16:29:52'),(129,'admin','admin','edit','用户信息修改成功ID=10','2018-07-26 16:49:10'),(130,'admin','login','login','用户登录成功ID=1','2018-07-26 16:49:35'),(131,'admin','admin','edit','用户信息修改成功ID=11','2018-07-26 16:51:24'),(132,'admin','admin','edit','用户信息修改成功ID=11','2018-07-26 16:53:17'),(133,'admin','admin','edit','用户信息修改成功ID=11','2018-07-26 16:53:43'),(134,'admin','admin','edit','用户信息修改成功ID=10','2018-07-26 16:53:52'),(135,'admin','login','login','用户登录成功ID=1','2018-07-27 15:24:15'),(136,'admin','admin','delete','用户信息删除成功ID=11','2018-07-27 15:30:46'),(137,'admin','admin','delete','用户信息删除成功ID=10','2018-07-27 15:30:50');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

LOCK TABLES `machine` WRITE;
/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
INSERT INTO `machine` VALUES (1,NULL),(2,NULL),(3,NULL);
/*!40000 ALTER TABLE `machine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `content` longtext,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'sad','admin','12@qq.com','','','2018-07-05 17:12:44'),(2,'sad','admin','12@qq.com','','','2018-07-05 17:13:49'),(3,'sad','admin','12@qq.com','','','2018-07-05 17:14:47'),(4,'sad','admin','12@qq.com','','完全二无群','2018-07-05 17:16:59'),(5,'','admin','12@qq.com','电话','的大神大','2018-07-05 17:17:14'),(6,'','admin','12@qq.com','电话','嘻嘻嘻','2018-07-05 17:18:02'),(7,'','昵称','邮箱','电话','留言内容...','2018-07-05 17:18:12'),(8,'','昵称','邮箱','电话','留言内容...','2018-07-05 17:18:18'),(9,'','admin','12@qq.com','电话','的','2018-07-06 08:38:27'),(10,'','昵称','12@qq.com','电话','留言内容...','2018-07-06 08:38:37'),(11,'','昵称','邮箱','电话','留言内容...','2018-07-06 08:38:45'),(12,'','admin','邮箱','电话','留言内容...','2018-07-06 08:42:59'),(13,'','','','','','2018-07-06 08:45:05');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `pic` varchar(200) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `introduce` longtext,
  `content_nature` longtext,
  `content_technology` longtext,
  `content_use` longtext,
  `content_parts` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'BSD-WT101',1,'product/2015070111400719.jpg','product/2015070111400719.jpg','<p><span style=\"font-size: medium\">应用于<br/>•  各类工业制管：热交换管、汽车排气管、线缆、电热管等<br/>•  各类装饰管</span></p>','<p><span style=\"font-size: medium\">主要功能：<br/>•  计算熔池与焊缝偏差<br/>•  通过滑台控制焊枪位置，保持熔池与焊缝一致</span></p><hr/><p><span style=\"font-size: medium\">特点描述：<br/>•  无人值守，自动焊缝纠偏<br/>•  非接触式视觉跟踪<br/>•  提高生产效率，节省人工<br/>•  记录工艺参数</span></p>','<p><span style=\"font-size: medium\">•  跟踪精度：≤0.02mm<br/>•  识别速度：≤40ms<br/>•  焊接速度：≤12m/min<br/>•  工作温度：-10℃～60℃<br/>•  工作电压：220V/50-60Hz</span></p>','<p><a href=\"/page/product-item.php?id=17&pid=2\" target=\"_self\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071711142185.jpg\"/></a><a href=\"/page/product-item.php?id=18&pid=2\" target=\"_self\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071711143931.jpg\"/></a></p>','<p>•  焊缝跟踪专用摄像机<br/>•  中央控制箱<br/>•  单轴滑台<br/>•  电流采集模块（选配）<br/>•  速度采集模块（选配）<br/>•  气压采集模块（选配）<br/>•  控制输出模块（选配）</p>'),(2,'BSD-WT201',1,'product/2015070112561875.jpg','product/2015070112561875.jpg','<p><span style=\"font-size: medium\">应用于：<br />\n&bull;&nbsp; 各类工业制管：热交换管、汽车排气管、线缆、电热管等<br />\n&bull;&nbsp; 各类装饰管</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 检测钨针状态，提醒更换<br />\n&bull;&nbsp; 记录报警状态，标记信号输出</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p><a href=\"http://www.boschda.com/cn/productsd.php?pid=385\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071711585376.jpg\" /></a></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 光源（选配）<br />\n&bull;&nbsp; 电流采集模块（选配）<br />\n&bull;&nbsp; 速度采集模块（选配）<br />\n&bull;&nbsp; 气压采集模块（选配）<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(3,'BSD-WT102',1,'product/2015070111455194.jpg','product/2015070111455194.jpg','<p><span style=\"font-size: medium\">应用于<br />\n&bull;&nbsp; 各类工业制管：热交换管、汽车排气管、线缆、电热管等<br />\n&bull;&nbsp; 各类装饰管</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 检测熔池状态，检测跳弧</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p>&nbsp;</p>\n<p><span style=\"font-size: medium\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://www.boschda.com/cn/products.php?tid=269\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071712045094.jpg\" /></a></span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 电流采集模块（选配）<br />\n&bull;&nbsp; 速度采集模块（选配）<br />\n&bull;&nbsp; 气压采集模块（选配）<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(4,'BSD-WT103',1,'product/2015070111430952.jpg','product/2015070111430952.jpg','<p><span style=\"font-size: medium\">&nbsp;应用于<br />\n&bull;&nbsp; 各类工业制管：热交换管、汽车排气管、线缆、电热管等<br />\n&bull;&nbsp; 各类装饰管</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 实时检测工作焊接电流<br />\n&bull;&nbsp; 实时检测焊管速度<br />\n&bull;&nbsp; 实时检测气压参数</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p><a href=\"http://www.boschda.com/cn/productsd.php?pid=381\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071712085574.jpg\" /></a></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 电流采集模块（选配）<br />\n&bull;&nbsp; 速度采集模块（选配）<br />\n&bull;&nbsp; 气压采集模块（选配）<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(5,'BSD-WT104',1,'product/2015070112485255.jpg','product/2015070112485255.jpg','<p><span style=\"font-size: medium\">应用于<br />\n&bull;&nbsp; 各类拼板纵缝焊<br />\n&bull;&nbsp; 各类罐体纵缝焊和环缝焊</span><br />\n&nbsp;</p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过滑台控制焊枪位置，保持熔池与焊缝一致</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>','<p><a href=\"http://www.boschda.com/cn/products.php?tid=271\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071712110967.jpg\" /></a></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 电流采集模块<br />\n&bull;&nbsp; 速度采集模块<br />\n&bull;&nbsp; 气压采集模块<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(6,'BSD-WT202',2,'product/2015070113061935.jpg','product/2015070113061935.jpg','<p><span style=\"font-size: medium\">应用于<br />\n&bull;&nbsp; 各类拼板纵缝焊<br />\n&bull;&nbsp; 各类罐体纵缝焊和环缝焊</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p><a href=\"products.php?tid=270\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071712295365.jpg\" /></a>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 光源<br />\n&bull;&nbsp; 电流采集模块（选配）<br />\n&bull;&nbsp; 速度采集模块（选配）<br />\n&bull;&nbsp; 气压采集模块（选配）<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>'),(7,'BSD-WT203',2,'product/2015070113121945.jpg','product/2015070113121945.jpg','<p><span style=\"font-size: medium\">应用于<br />\n&bull;&nbsp; 各类拼板纵缝焊<br />\n&bull;&nbsp; 各类罐体纵缝焊和环缝焊</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过滑台控制焊枪位置，保持熔池与焊缝一致</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span><br />\n&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p>&nbsp;</p>\n<p style=\"margin-left: 240px\"><span style=\"font-size: medium\"><a href=\"http://www.boschda.com/cn/productsd.php?pid=384\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071712220469.jpg\" /></a></span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 单轴滑台<br />\n&bull;&nbsp; 光源（选配）<br />\n&bull;&nbsp; 电流采集模块（选配）<br />\n&bull;&nbsp; 速度采集模块（选配）<br />\n&bull;&nbsp; 气压采集模块（选配）<br />\n&bull;&nbsp; 控制输出模块（选配）</span></p>\n<p>&nbsp;</p>'),(8,'BSD-WT301',3,'product/2015070113201810.jpg','product/2015070113201810.jpg','<p><span style=\"font-size: medium\">应用于：<br />\n&bull;&nbsp; 各类角接直缝焊和环缝焊<br />\n&bull;&nbsp; 各类罐体内衬板焊接<br />\n&bull;&nbsp; 各类拼版纵缝焊<br />\n&bull;&nbsp; 各类罐体环缝焊和纵缝焊</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过水平滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 计算焊缝与焊枪的高度偏差<br />\n&bull;&nbsp; 通过高低滑台控制焊枪位置，保持熔池与焊缝一致</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 高低和左右同时跟踪<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 左右跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 高低跟踪精度：&le;0.3mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;6m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p>&nbsp;</p>\n<p style=\"margin-left: 200px\"><a href=\"http://www.boschda.com/cn/products.php?tid=271\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071713060382.jpg\" /></a></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 双轴滑台<br />\n&bull;&nbsp; 光源</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(9,'BSD-WT302',3,'product/2015070113235322.jpg','product/2015070113235322.jpg','<p><span style=\"font-size: medium\">应用于<br />\n&bull;&nbsp; 各类角接直缝焊和环缝焊<br />\n&bull;&nbsp; 各类罐体内衬板焊接<br />\n&bull;&nbsp; 各类拼版纵缝焊<br />\n&bull;&nbsp; 各类罐体环缝焊和纵缝焊</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 计算熔池与焊缝偏差<br />\n&bull;&nbsp; 通过水平滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 计算焊缝与焊枪的高度偏差<br />\n&bull;&nbsp; 通过高低滑台控制焊枪位置，保持熔池与焊缝一致<br />\n&bull;&nbsp; 辅助光照明</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 无人值守，自动焊缝纠偏<br />\n&bull;&nbsp; 高低和左右同时跟踪<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;12m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p>&nbsp;</p>\n<p style=\"margin-left: 120px\"><a href=\"http://www.boschda.com/cn/productsd.php?pid=383\"><img alt=\"\" src=\"http://www.boschda.com/upload/201507171307556.jpg\" /></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"http://www.boschda.com/cn/productsd.php?pid=388\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071713111620.jpg\" /></a></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 双轴滑台<br />\n&bull;&nbsp; 光源</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(10,'BSD-WT401',4,'product/2015070116025490.jpg','product/2015070116025490.jpg','<p><span style=\"font-size: medium\">应用于：<br />\n&bull;各类马鞍形工件焊接<br />\n&bull;各类罐体表面结构件焊接<br />\n&bull;其他各类三轴空间曲线类焊接</span></p>','<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 高低跟踪、左右跟踪与旋转速度协同控制，使焊枪始终与焊缝一致<br />\n&bull;&nbsp; 一键式自动焊接系统<br />\n&bull;&nbsp; 一人可控制多台机器</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 一键式焊接马鞍形工件<br />\n&bull;&nbsp; 自动实现焊缝定位与焊缝实时跟踪<br />\n&bull;&nbsp; 非接触式视觉跟踪<br />\n&bull;&nbsp; 提高生产效率，节省人工<br />\n&bull;&nbsp; 记录工艺参数</span></p>\n<p>&nbsp;</p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 左右跟踪精度：&le;0.02mm<br />\n&bull;&nbsp; 高低跟踪精度：&le;0.03mm<br />\n&bull;&nbsp; 识别速度：&le;40ms<br />\n&bull;&nbsp; 焊接速度：&le;6m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>','<p>&nbsp;</p>\n<p style=\"margin-left: 240px\"><span style=\"font-size: medium\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071713132160.jpg\" /></span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 中央控制箱<br />\n&bull;&nbsp; 十字滑台与旋转机构<br />\n&bull;&nbsp; 光源</span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(11,'BSD-CA101',6,'product/2015070116460093.jpg','product/2015070116460093.jpg','','<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 宽动态图像采集<br />\n&bull;&nbsp; 高分辨率<br />\n&bull;&nbsp; LVDS数据接口，适应远距离传输<br />\n&bull;&nbsp; 跟CPU无缝连接<br />\n&bull;&nbsp; 高速摄像</span></p>\n<hr />\n<p><span style=\"font-size: medium\">主要功能：<br />\n&bull;&nbsp; 直接采集焊接实时图像<br />\n&bull;&nbsp; 自适应亮度控制</span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 分辨率：100M-500万像素<br />\n&bull;&nbsp; 响应速度：&le;20ms<br />\n&bull;&nbsp; 通信接口：LVDS<br />\n&bull;&nbsp; 控制信号接口：I2C<br />\n&bull;&nbsp; 工作电压：12V DC<br />\n&bull;&nbsp; 帧率：&le;100fps</span></p>','<p style=\"margin-left: 200px\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071713401871.jpg\" /></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 摄像机<br />\n&bull;&nbsp; 镜头<br />\n&bull;&nbsp; 光源</span></p>'),(12,'BSD-WT501',5,'product/2015070117101256.jpg','product/2015070117101256.jpg','','<p><span style=\"font-size: medium\">主要功能：&nbsp;<br />\n&bull;&nbsp; 通过视觉扫描与测量，实现工件坐标测量<br />\n&bull;&nbsp; 通过控制多轴机器人，实现工件自动定位与焊接<br />\n&bull;&nbsp; 与运动控制系统协同工作</span></p>\n<hr />\n<p><span style=\"font-size: medium\">特点描述：<br />\n&bull;&nbsp; 先扫描，后焊接<br />\n&bull;&nbsp; 非接触式视觉测量<br />\n&bull;&nbsp; 自主定位，自主焊接<br />\n&bull;&nbsp; 适应任意工件<br />\n&bull;&nbsp; 自学习功能，适应柔性生产</span></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; 坐标精度：0.1mm<br />\n&bull;&nbsp; 识别速度：&le;100ms<br />\n&bull;&nbsp; 焊接跟踪精度：0.1mm<br />\n&bull;&nbsp; 焊接速度：&le;3m/min<br />\n&bull;&nbsp; 工作温度：-10℃～60℃<br />\n&bull;&nbsp; 工作电压：220V/50-60Hz</span></p>','','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊缝跟踪专用摄像机<br />\n&bull;&nbsp; 多轴机器人系统<br />\n&bull;&nbsp; 中央处理模块<br />\n&bull;&nbsp; 结构光源</span></p>'),(13,'热交换管焊缝跟踪装置',13,'product/2015061520402254.jpg','product/2015070112485255.jpg','<p><font size=\"3\">&bull; &nbsp;用于热交换器中热交换管的焊接</font></p>','','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊接方式：氩弧焊<br />\n&bull;&nbsp; 钢管直径：8mm-27mm<br />\n&bull;&nbsp; 焊接速度：1.8m/min<br />\n&bull;&nbsp; 钢管长度：100m-270m<br />\n&bull;&nbsp; 焊缝宽度：0.5mm-2mm<br />\n&bull;&nbsp; 连接形式：直接拼接<br />\n&bull;&nbsp; 焊接电流：170-185A<br />\n&bull;&nbsp; 工作方式：7X24连续生产</span></p>','<p><a href=\"http://v.youku.com/v_show/id_XMTI2MzMwMTQ0NA==.html\" target=\"_blank\"><img src=\"http://www.boschda.com/upload/2015071315372696.png\" alt=\"\" /></a></p>','<p>&nbsp;&nbsp;</p>\n<p><span style=\"font-size: medium\">&bull;<span style=\"font-size: larger;\">&nbsp; </span><a href=\"ppsd.php?pid=397\"><span style=\"font-size: larger;\">单轴工业管系列BSD-WT104</span></a></span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(14,'制冷罐体焊缝跟踪装置',7,'product/2015061520485432.jpg','product/2015070113235322.jpg','<p><span style=\"font-size: medium\">&bull;&nbsp; 用于制冷罐体内部衬板焊接</span></p>','','<p><span style=\"font-size: medium\">&nbsp;&bull;&nbsp; 焊接方式：气保焊<br />\n&bull;&nbsp; 罐体直径：600mm-1000mm<br />\n&bull;&nbsp; 罐体长度：8m-20m<br />\n&bull;&nbsp; 全程左右偏差：50mm<br />\n&bull;&nbsp; 全程高低偏差：40mm<br />\n&bull;&nbsp; 焊缝宽度：4mm-8mm<br />\n&bull;&nbsp; 连接形式：角接<br />\n&bull;&nbsp; 每罐焊缝：每个罐体内有3-6道纵焊缝</span></p>','<p>&nbsp;<a target=\"_blank\" href=\"http://v.youku.com/v_show/id_XMTI2MzM4MjYwMA==.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071517442513.png\" /></a></p>','<p><span style=\"font-size: medium\">&bull;&nbsp; </span><a href=\"ppsd.php?pid=402\"><span style=\"font-size: medium\">双轴纵环缝系列BSD-WT302</span></a></p>'),(15,'空调压缩机焊缝跟踪装置',8,'product/2015061521054427.jpg','product/2015070113201810.jpg','<p><span style=\"font-size: medium\">&bull;&nbsp; 用于空调压缩机小罐</span></p>','','<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><span style=\"font-size: medium\">&bull;&nbsp; 焊接方式：氩弧焊<br />\n&bull;&nbsp; 罐体直径：100mm-250mm<br />\n&bull;&nbsp; 罐体长度：180mm-300mm<br />\n&bull;&nbsp; 全程左右偏差：5mm<br />\n&bull;&nbsp; 连接形式：搭接<br />\n&bull;&nbsp; 每罐焊缝：2道环缝</span></p>\n<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><span style=\"font-size: medium\"><b style=\"mso-bidi-font-weight: normal\"><span style=\"font-family: 宋体; color: #fca904\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b>&nbsp;</span></p>','<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><a target=\"_blank\" href=\"http://v.youku.com/v_show/id_XMTI2MjUzNDQ4NA==.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/201507151746072.png\" /></a>&nbsp;</p>\n<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><b style=\"mso-bidi-font-weight: normal\"><span style=\"font-family: 宋体; color: #fca904; font-size: 14pt\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b>&nbsp;</p>','<p>&nbsp;</p>\n<p><span style=\"font-size: medium\">&bull;&nbsp; <a href=\"ppsd.php?pid=400\">单轴纵环缝系列BSD-WT203</a></span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(16,'汽车排气管焊缝跟踪装置',11,'product/2015061521121279.jpg','product/2015070111455194.jpg','<p><span style=\"font-size: medium\">&bull;&nbsp; 用于汽车排气管焊接</span></p>','','<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><span style=\"font-size: medium\">&bull;&nbsp; 焊接方式：氩弧焊<br />\n&bull;&nbsp; 钢管直径：100mm-260mm<br />\n&bull;&nbsp; 焊接速度：1.8-2.0m/min<br />\n&bull;&nbsp; 钢管长度：连续生产<br />\n&bull;&nbsp; 焊缝宽度：0.5mm-3mm<br />\n&bull;&nbsp; 连接形式：直接拼接<br />\n&bull;&nbsp; 工作方式：7X24连续生产</span></p>\n<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><span style=\"font-size: medium\">&nbsp;</span></p>','<p><a target=\"_blank\" href=\"http://v.qq.com/page/z/t/x/z01580f63tx.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071517515293.png\" /></a></p>','<p>&nbsp;</p>\n<p><span style=\"font-size: medium\">&bull;&nbsp; <a href=\"ppsd.php?pid=391\">单轴工业管系列BSD-WT102</a></span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>'),(17,'电缆保护钢管焊缝跟踪装置',10,'product/2015061521172319.jpg','product/2015070111430952.jpg','<p><span style=\"font-family: Times New Roman\"><span style=\"font-size: medium\">•&nbsp; 用于电缆外部保护钢管焊接</span></span></p>','','<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><span style=\"font-size: medium\">•&nbsp; 焊接方式：激光焊<br/>•&nbsp; 钢管直径：18mm-30mm<br/>•&nbsp; 焊接速度：3-6m/min<br/>•&nbsp; 钢管长度：2000m<br/>•&nbsp; 焊缝宽度：0.5mm-1.8mm<br/>•&nbsp; 连接形式：直接拼接<br/>•&nbsp; 工作方式：7X24连续生产</span></p>','<p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\"><a target=\"_blank\" href=\"http://v.youku.com/v_show/id_XMTI2MjUzMjYyOA==.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/201507151749511.png\"/></a>&nbsp;</p><p style=\"margin: 0cm 0cm 0pt\" class=\"MsoNormal\">&nbsp;</p>','<p>&nbsp;</p><p><a href=\"/page/product-item.php?id=1&pid=1\" target=\"_self\"><span style=\"font-size: medium\">•&nbsp; 单轴工业管系列BSD-WT101</span></a></p><p>&nbsp;</p><p>&nbsp;</p>'),(18,'电热管焊缝跟踪装置',9,'product/2015061600203331.png','product/2015070111400719.jpg','<p><span style=\"font-size: medium\"><span style=\"font-family: Times New Roman\">•&nbsp; 用于电热管的焊接</span></span></p>','','<p><span style=\"font-size: medium\">•&nbsp; 焊接方式：氩弧焊<br/>•&nbsp; 钢管直径：6mm-10mm<br/>•&nbsp; 焊接速度：2-3m/min<br/>•&nbsp; 钢管长度：1000m<br/>•&nbsp; 焊缝宽度：0.2mm-0.8mm<br/>•&nbsp; 连接形式：直接拼接<br/>•&nbsp; 焊接电流：140-160A<br/>•&nbsp; 工作方式：7X24连续生产</span></p>','<p><a target=\"_blank\" href=\"http://v.qq.com/page/g/z/z/g0159vhopzz.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071517481340.png\"/></a></p>','<p>&nbsp;</p><p><span style=\"font-size: medium\">•&nbsp; <a href=\"/page/product-item.php?id=1&pid=1\" target=\"_self\">单轴工业管系列BSD-WT101</a></span></p><p>&nbsp;</p>'),(19,'弧形结构焊缝跟踪装置',12,'product/2015061600381433.jpg','product/2015070113235322.jpg','<p><span style=\"font-size: medium\">&bull;&nbsp; 用于弧形结构件焊接</span></p>','','<p><span style=\"font-size: medium\">&bull;&nbsp; 焊接方式：脉冲气保焊<br />\n&bull;&nbsp; 罐体长度：8m-20m<br />\n&bull;&nbsp; 全程左右偏差：100mm<br />\n&bull;&nbsp; 全程高低偏差：200mm<br />\n&bull;&nbsp; 焊缝宽度：4mm-8mm<br />\n&bull;&nbsp; 连接形式：角接</span></p>','<p><a target=\"_blank\" href=\"http://v.qq.com/page/x/n/h/x01581u9fnh.html\"><img alt=\"\" src=\"http://www.boschda.com/upload/2015071517530316.png\" /></a></p>','<p>&nbsp;</p>\n<p><span style=\"font-size: medium\">&bull;&nbsp; <a href=\"ppsd.php?pid=402\">双轴纵环缝系列BSD-WT302</a></span></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type`
--

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` VALUES (1,'单轴工业制管系列',1),(2,'单轴纵环缝系列',1),(3,'双轴纵环缝系列',1),(4,'三轴马鞍形系列',1),(5,'多轴机器人系列',1),(6,'焊缝观测摄像头系列',1),(7,'制冷设备',2),(8,'压力容器',2),(9,'工业制管',2),(10,'电力电气',2),(11,'汽车配件',2),(12,'船舶制造',2),(13,'石油化工',2);
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(200) DEFAULT NULL,
  `domain` varchar(200) DEFAULT NULL,
  `hotline` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,'宁波博视达机器人焊接有限公司','','4008-0574-00','宁波市鄞州区下应街道湖下路217号宁波保险科技产业园1号楼15楼','0574-88127267','15305841515 刘部长','bsd@boschda.com','0574-88127265');
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `privileges` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'admin',NULL,1),(2,'guest',NULL,1),(3,'soft',NULL,1);
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pic` longtext,
  `url` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'工业制管TIG焊','video/2015071514501590.jpg','http://v.youku.com/v_show/id_XMTI2MzMwMTQ0NA==/v.swf'),(2,'圆周激光焊','video/2015071514444587.jpg','http://player.youku.com/player.php/sid/XMTYyMzU0NzkxNg==/v.swf'),(3,'拼板气保焊','video/2015071515062573.jpg','http://v.youku.com/v_show/id_XMTI2MjUzNTQzMg==/v.swf'),(4,'罐体搭接氩弧焊','video/2015071515084358.jpg','http://v.youku.com/v_show/id_XMTI2MjUzNDQ4NA==/v.swf'),(5,'工业制管激光焊','video/2015071515102631.jpg','http://player.youku.com/player.php/sid/XMTI2MjUzMjYyOA==/v.swf'),(6,'工业制管TIG焊','video/2015071515201118.jpg','http://static.video.qq.com/TPout.swf?vid=g0159vhopzz&amp;auto=0'),(7,'脉冲角接气保焊','video/2015071515244940.jpg','http://static.video.qq.com/TPout.swf?vid=x01581u9fnh&amp;auto=0');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weld_attr`
--

DROP TABLE IF EXISTS `weld_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weld_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weld_attr`
--

LOCK TABLES `weld_attr` WRITE;
/*!40000 ALTER TABLE `weld_attr` DISABLE KEYS */;
INSERT INTO `weld_attr` VALUES (1,'speed','速度'),(2,'electric ','电流'),(3,'voltage','电压');
/*!40000 ALTER TABLE `weld_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weld_type`
--

DROP TABLE IF EXISTS `weld_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weld_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` longtext,
  `work_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weld_type`
--

LOCK TABLES `weld_type` WRITE;
/*!40000 ALTER TABLE `weld_type` DISABLE KEYS */;
INSERT INTO `weld_type` VALUES (1,'{\"electric\":\"21\",\"voltage\":\"21\",\"speed\":\"21\"}',NULL),(8,'{\"electric\":\"21\",\"voltage\":\"21\"}',NULL);
/*!40000 ALTER TABLE `weld_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (1,'散热片'),(2,'H型钢'),(3,'垫片');
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workpiece`
--

DROP TABLE IF EXISTS `workpiece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workpiece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `attribute` longtext,
  `weld_type` int(11) DEFAULT NULL,
  `machine` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workpiece`
--

LOCK TABLES `workpiece` WRITE;
/*!40000 ALTER TABLE `workpiece` DISABLE KEYS */;
INSERT INTO `workpiece` VALUES (1,'散热片0','1','{\"长度\":\"20\"}',1,'1'),(2,'散热片1','1','{\"长度\":\"20\"}',1,'1'),(3,'散热片2','1','{}',1,'1'),(4,'散热片3','1','{}',1,'1'),(5,'散热片4','1','{}',1,'1'),(6,'散热片5','1','{\"阿达\":\"sad\"}',1,'1'),(7,'散热片6','1','{\"打算\":\"请问\"}',1,'1'),(8,'散热片7','1','{}',1,'1'),(9,'散热片8','1','{}',1,'1'),(10,'散热片9','1','{}',1,'1'),(11,'散热片10','1','{}',1,'1'),(12,'散热片11','1','{\"同仁堂\":\"34\"}',1,'1');
/*!40000 ALTER TABLE `workpiece` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-27 17:01:05
