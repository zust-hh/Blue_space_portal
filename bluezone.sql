-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: bluezone
-- ------------------------------------------------------
-- Server version	5.6.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `main_type` varchar(45) NOT NULL,
  `subtype` varchar(45) DEFAULT NULL,
  `author` varchar(90) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `article` mediumtext,
  `thumbnail` varchar(90) DEFAULT NULL,
  `jinghua` int(11) NOT NULL DEFAULT '0',
  `dianzan` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (2,'热烈祝贺我校同学在第8届计算机设计大赛中获奖','蓝色动态','蓝色动态','Harry','2016-05-12 20:39:41',0,'<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;热烈祝贺我校同学在第9届计算机设计大赛中获奖！他们的表现非常棒！\r\n</p>\r\n<p>\r\n	<img src=\"/img/2016042819144785401.jpg\" width=\"720\" height=\"540\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<img src=\"/img/IMG_20150808_152839_副本.jpg\" width=\"720\" height=\"540\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<img src=\"/editor/attached/image/20160430/20160430000442_73827.jpg\" alt=\"\" width=\"728\" height=\"540\" title=\"\" align=\"\" /> \r\n</p>','2016043011245048221.jpg',1,2),(3,'5月8日计算机设计大赛校赛','公告','公告','Harry','2016-05-05 16:51:29',0,'<p>\r\n	各位参赛同学，计算机设计大赛校赛的时间定为5月8号（星期天）下午1：00至5：00分，地点在安吉校区。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	昨晚接到省赛组委会通知，要求省赛作品于10号前提交，请各位在五一节期间抓紧修改作品，校赛后没有时间再修改作品了。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	安吉校区最后交作品时间：5月6日（星期五）下午3：10分至4：40，在11-203机房；\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>',NULL,1,0),(4,'5月16号蓝桥杯','公告','公告','Harry','2016-05-07 19:29:36',0,'蓝桥杯',NULL,0,0),(5,'5月26号省ACM','公告','公告','Harry','2016-05-07 19:30:09',0,'ACM',NULL,0,0),(6,' 免密支付','优秀作品','移动应用','Harry','2016-05-07 15:33:38',0,'文章内容：移动应用','2016050713300015122.jpg',1,0),(7,'爱秀网','优秀作品','网站','lin','2016-05-07 19:45:34',0,'<strong><span style=\"font-size:24px;\">学长学姐的“爱秀网”网站作品视频介绍</span></strong><br />\r\n<div id=\"FlashFile\"> \r\n <object type=\"application/x-shockwave-flash\" width=\"720px\" height=\"540px\" \r\n data=\"video/player.swf?file=2013年爱秀网录屏.flv\"> \r\n <param name=\"movie\" value=\"video/player.swf?file=2013年爱秀网录屏.flv&showfsbutton=true&autostart=true\" /> \r\n <param name=\"wmode\" value=\"transparent\" /> \r\n <param name=\"quality\" value=\"high\" /> \r\n <param name=\"allowfullscreen\" value=\"true\" /> \r\n </object> \r\n </div> ','2016050714290150286.jpg',1,0),(10,'橙果秀','优秀作品','网站','lin','2016-05-07 19:47:17',0,'<strong><span style=\"font-size:24px;\">学长学姐的“橙果秀”网站作品视频介绍</span></strong> \r\n<div id=\"FlashFile\"> \r\n <object type=\"application/x-shockwave-flash\" width=\"720px\" height=\"540px\" \r\n data=\"video/player.swf?file=2013年橙果秀.flv\"> \r\n <param name=\"movie\" value=\"video/player.swf?file=2013年橙果秀.flv&showfsbutton=true&autostart=true\" /> \r\n <param name=\"wmode\" value=\"transparent\" /> \r\n <param name=\"quality\" value=\"high\" /> \r\n <param name=\"allowfullscreen\" value=\"true\" /> \r\n </object> \r\n </div> ','2016050518524642563.jpg',0,1),(16,'谁说IT没帅哥靓女！','蓝色动态','蓝色动态','Harry','2016-05-02 20:52:34',0,'<p class=\"MsoNormal\">\r\n	在这里，你可以运用各种高端的科技来帮助你学习。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	这里也不乏帅哥靓女哦！ &nbsp;&nbsp;\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"/editor/php/../attached/image/20160502/20160502194407_92922.jpg\" alt=\"\" width=\"380\" height=\"574\" title=\"\" align=\"left\" /><img src=\"/editor/php/../attached/image/20160502/20160502194407_50067.jpg\" alt=\"\" width=\"380\" height=\"575\" title=\"\" align=\"right\" /><img src=\"/editor/php/../attached/image/20160502/20160502194407_51849.jpg\" alt=\"\" width=\"380\" height=\"605\" title=\"\" align=\"left\" /><img src=\"/editor/php/../attached/image/20160502/20160502194408_19739.jpg\" alt=\"\" width=\"380\" height=\"570\" title=\"\" align=\"right\" /> \r\n</p>','2016050219521672698.jpg',1,2),(17,'我们一起成长','蓝色动态','蓝色动态','Harry','2016-05-02 20:09:01',0,'<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>在这里你不回感到乏味与寂寞，有许多跟你一样怀着梦想的同学跟你一起经历着蜕变，我们相互学习，相互鼓励。</strong></span><span style=\"font-size:16px;\"><strong>有时候小小的竞争会让你的惰性彻底隐藏起来，你会不甘，于是你就战胜了你的惰性，你又向优秀的彼岸迈进了一大步！</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<img src=\"/editor/php/../attached/image/20160502/20160502195345_33582.jpg\" alt=\"\" width=\"385\" height=\"289\" title=\"\" align=\"\" /><img src=\"/editor/attached/image/20160502/20160502200228_31008.jpg\" alt=\"\" width=\"385\" height=\"289\" title=\"\" align=\"right\" /> \r\n</p>\r\n<div style=\"text-align:right;\">\r\n	<br />\r\n</div>','2016050220090133590.jpg',0,2),(18,'可爱的院长','蓝色动态','蓝色动态','Harry','2016-05-02 20:11:40',0,'<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>不仅有你的伙伴们的相互学习，更加有对我们关怀备至的可爱院长，富有多年带领学生们竞赛经验的老师亲自来蓝色空间面对面的引导你的成长之路，还有其他比你优秀许多的学长学姐专程赶来传授经验。</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><br />\r\n</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><img src=\"/editor/attached/image/20160502/20160502201006_40462.jpg\" alt=\"\" width=\"780\" height=\"586\" title=\"\" align=\"\" /><br />\r\n</strong></span> \r\n</p>','2016050220102853280.jpg',0,0),(19,'2105级信息学院的新生参加本届浙江省大学生程序设计竞赛','蓝色动态','蓝色动态','Harry','2016-05-02 20:18:47',0,'<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>2015</strong></span><span style=\"font-size:16px;\"><strong>级新生当然也积极参加各项竞赛（您所看到的本网站也是大学生计算机设计大赛中网站设计的作品之一），下面是</strong></span><span style=\"font-size:16px;\"><strong>2105</strong></span><span style=\"font-size:16px;\"><strong>级信息学院的新生参加本届浙江省大学生程序设计竞赛的照片，我校优秀学子与全省各大高校的优秀大学生同台竞技</strong></span><span style=\"font-size:16px;\"><strong>PK</strong></span><span style=\"font-size:16px;\"><strong>，竞争中更好地学习和提升。</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><br />\r\n</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><img src=\"/editor/attached/image/20160502/20160502201352_15616.jpg\" alt=\"\" width=\"780\" height=\"437\" title=\"\" align=\"left\" /><img src=\"/editor/attached/image/20160502/20160502201439_41602.jpg\" alt=\"\" width=\"780\" height=\"437\" title=\"\" align=\"\" /></strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><br />\r\n</strong></span> \r\n</p>','2016050220152837402.jpg',0,0),(20,'我们的蓝色空间','蓝色动态','蓝色动态','Harry','2016-05-02 20:23:21',0,'<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>我们安吉校区蓝色空间内部装潢与配置也是杠杠的！</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>高级的电脑配置，舒适的座椅，宽敞明亮的学习环境。</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong>当第一缕灿烂的晨光照进蓝色空间，怀着梦想的你走进蓝色空间，在舒适安静的环境下沉下心来，开始你默默奋斗的一天，这里就是为你梦想积蓄能量的地方。</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><br />\r\n</strong></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"font-size:16px;\"><strong><img src=\"/editor/php/../attached/image/20160502/20160502202228_84830.jpg\" alt=\"\" width=\"780\" height=\"578\" title=\"\" align=\"left\" /><img src=\"/editor/php/../attached/image/20160502/20160502202230_48413.jpg\" alt=\"\" width=\"780\" height=\"578\" title=\"\" align=\"left\" /><br />\r\n</strong></span> \r\n</p>','2016050220232155288.jpg',0,7),(21,'什么是HTML','学习园地','web开发','Harry','2016-05-07 14:21:11',0,'<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	什么是 HTML？\r\n</h2>\r\n<p>\r\n	HTML 是用来描述网页的一种语言。\r\n</p>\r\n<ul>\r\n	<li>\r\n		HTML 指的是超文本标记语言 (<b>H</b>yper&nbsp;<b>T</b>ext&nbsp;<b>M</b>arkup&nbsp;<b>L</b>anguage)\r\n	</li>\r\n	<li>\r\n		HTML 不是一种编程语言，而是一种<span style=\"font-weight:bold;\">标记语言</span>&nbsp;(markup language)\r\n	</li>\r\n	<li>\r\n		标记语言是一套<span style=\"font-weight:bold;\">标记标签</span>&nbsp;(markup tag)\r\n	</li>\r\n	<li>\r\n		HTML 使用<span style=\"font-weight:bold;\">标记标签</span>来描述网页\r\n	</li>\r\n</ul>\r\n<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	HTML 标签\r\n</h2>\r\n<p>\r\n	HTML 标记标签通常被称为 HTML 标签 (HTML tag)。\r\n</p>\r\n<ul>\r\n	<li>\r\n		HTML 标签是由<span style=\"font-weight:bold;\">尖括号</span>包围的关键词，比如 &lt;html&gt;\r\n	</li>\r\n	<li>\r\n		HTML 标签通常是<span style=\"font-weight:bold;\">成对出现</span>的，比如 &lt;b&gt; 和 &lt;/b&gt;\r\n	</li>\r\n	<li>\r\n		标签对中的第一个标签是<span style=\"font-weight:bold;\">开始标签</span>，第二个标签是<span style=\"font-weight:bold;\">结束标签</span> \r\n	</li>\r\n	<li>\r\n		开始和结束标签也被称为<span style=\"font-weight:bold;\">开放标签</span>和<span style=\"font-weight:bold;\">闭合标签</span> \r\n	</li>\r\n</ul>\r\n<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	HTML 文档 = 网页\r\n</h2>\r\n<ul>\r\n	<li>\r\n		HTML 文档<span style=\"font-weight:bold;\">描述网页</span> \r\n	</li>\r\n	<li>\r\n		HTML 文档<span style=\"font-weight:bold;\">包含 HTML 标签</span>和纯文本\r\n	</li>\r\n	<li>\r\n		HTML 文档也被称为<span style=\"font-weight:bold;\">网页</span> \r\n	</li>\r\n</ul>\r\n<p>\r\n	Web 浏览器的作用是读取 HTML 文档，并以网页的形式显示出它们。浏览器不会显示 HTML 标签，而是使用标签来解释页面的内容：\r\n</p>\r\n<pre>&lt;html&gt;\r\n&lt;body&gt;\r\n&lt;h1&gt;My First Heading&lt;/h1&gt;\r\n&lt;p&gt;My first paragraph.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;\r\n</pre>\r\n<h3 style=\"font-size:12px;\">\r\n	例子解释\r\n</h3>\r\n<ul>\r\n	<li>\r\n		&lt;html&gt; 与 &lt;/html&gt; 之间的文本描述网页\r\n	</li>\r\n	<li>\r\n		&lt;body&gt; 与 &lt;/body&gt; 之间的文本是可见的页面内容\r\n	</li>\r\n	<li>\r\n		&lt;h1&gt; 与 &lt;/h1&gt; 之间的文本被显示为标题\r\n	</li>\r\n	<li>\r\n		&lt;p&gt; 与 &lt;/p&gt; 之间的文本被显示为段落\r\n	</li>\r\n</ul>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:#FF4400;\">慕课网 学习链接</span></a> \r\n</p>','2016050714211198302.jpg',1,0),(22,'c语言入门','学习园地','编程语言','Harry','2016-05-07 13:55:04',0,'<p>\r\n	<a href=\"http://baike.baidu.com/subview/10075/6770151.htm\" target=\"_blank\">C</a>语言是一门通用<a href=\"http://baike.baidu.com/view/307850.htm\" target=\"_blank\">计算机编程语言</a>，应用广泛。C语言的设计目标是提供一种能以简易的方式<a href=\"http://baike.baidu.com/view/69568.htm\" target=\"_blank\">编译</a>、处理低级<a href=\"http://baike.baidu.com/view/87697.htm\" target=\"_blank\">存储器</a>、产生少量的<a href=\"http://baike.baidu.com/view/52.htm\" target=\"_blank\">机器码</a>以及不需要任何运行环境支持便能运行的编程语言。\r\n	尽管C语言提供了许多低级处理的功能，但仍然保持着良好跨平台的特性，以一个标准规格写出的C语言程序可在许多电脑平台上进行编译，甚至包\r\n</p>\r\n<p>\r\n	含一些嵌入式<a href=\"http://baike.baidu.com/view/50152.htm\" target=\"_blank\">处理器</a>（单片机或称<a href=\"http://baike.baidu.com/subview/100928/9483587.htm\" target=\"_blank\">MCU</a>）以及超级电脑等作业平台。\r\n	二十世纪八十年代，为了避免各开发厂商\r\n</p>\r\n<p>\r\n	用的C语言语法产生差异，由美国国家标准局为C语言订定了一套完整的国际标准语法，称为<a href=\"http://baike.baidu.com/view/3979609.htm\" target=\"_blank\">ANSI C</a>，作为C语言\r\n</p>\r\n<p>\r\n	最<span style=\"line-height:1.5;font-size:12px;\">初的标准。</span> \r\n</p>\r\n<p>\r\n	<span style=\"line-height:1.5;font-size:12px;\"><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>','2016050519520788085.png',1,0),(23,'Photoshop介绍','学习园地','多媒体设计','Harry','2016-05-07 14:19:42',0,'<p>\r\n	Adobe Photoshop，简称“PS”，是由<a target=\"_blank\" href=\"http://baike.baidu.com/view/7578.htm\">Adobe</a>&nbsp;Systems开发和发行的<a target=\"_blank\" href=\"http://baike.baidu.com/view/2542054.htm\">图像处理软件</a>。\r\n	Photoshop主要处理以像素所构成的<a target=\"_blank\" href=\"http://baike.baidu.com/view/286845.htm\">数字图像</a>。使用其众多的编修与绘图工具，可以有效地进行<a target=\"_blank\" href=\"http://baike.baidu.com/view/1262365.htm\">图片编辑</a>工作。ps有很多功能，在图像、图形、文字、视频、出版等各方面都有涉及。\r\n	2003年，Adobe Photoshop 8被更名为<a target=\"_blank\" href=\"http://baike.baidu.com/view/1872723.htm\">Adobe Photoshop CS</a>。2013年7月，Adobe公司推出了新版本的<a target=\"_blank\" href=\"http://baike.baidu.com/view/10565460.htm\">Photoshop CC</a>，自此，<a target=\"_blank\" href=\"http://baike.baidu.com/view/6536444.htm\">Photoshop CS6</a>作为Adobe CS系列的最后一个版本被新的CC系列取代。\r\n	截止2016年1月Adobe PhotoshopCC2015为市场最新版本。\r\n	Adobe支持<a target=\"_blank\" href=\"http://baike.baidu.com/view/4821.htm\">Windows</a>操作系统 、<a target=\"_blank\" href=\"http://baike.baidu.com/view/3391739.htm\">安卓系统</a>与<a target=\"_blank\" href=\"http://baike.baidu.com/view/157344.htm\">Mac OS</a>， 但<a target=\"_blank\" href=\"http://baike.baidu.com/view/1634.htm\">Linux</a>操作系统用户可以通过使用<a target=\"_blank\" href=\"http://baike.baidu.com/view/126772.htm\">Wine</a>来运行Photoshop。\r\n</p>\r\n<div>\r\n	<br />\r\n</div>\r\n<p>\r\n	<a href=\"http://dlsw.baidu.com/sw-search-sp/soft/6c/23675/Photoshop_CS6.3510481888.7z\"><span style=\"color:#FF4400;\">点击下载Photoshop_CS6</span></a> \r\n</p>','2016050714194245842.jpg',1,0),(24,'w3school','学习园地','学习网站推荐','Harry','2016-05-07 14:03:14',0,'<p>\r\n	<strong><span style=\"font-size:14px;\">在 w3school，你可以找到你所需要的所有的网站建设教程。</span></strong> \r\n</p>\r\n<p>\r\n	<strong><span style=\"font-size:14px;\">从基础的 HTML 到 CSS，乃至进阶的XML、SQL、JS、PHP 和 ASP.NET。</span></strong> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/editor/attached/image/20160505/20160505211218_57765.jpg\" alt=\"\" width=\"750\" height=\"441\" title=\"\" align=\"\" /> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>','2016050521401061204.jpg',1,1),(25,'css概述','学习园地','web开发','Harry','2016-05-07 13:55:25',0,'<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	CSS 概述\r\n</h2>\r\n<ul>\r\n	<li>\r\n		CSS 指层叠样式表 (<span style=\"font-weight:bold;\">C</span>ascading&nbsp;<span style=\"font-weight:bold;\">S</span>tyle&nbsp;<span style=\"font-weight:bold;\">S</span>heets)\r\n	</li>\r\n	<li>\r\n		样式定义<span style=\"font-weight:bold;\">如何显示</span>&nbsp;HTML 元素\r\n	</li>\r\n	<li>\r\n		样式通常存储在<span style=\"font-weight:bold;\">样式表</span>中\r\n	</li>\r\n	<li>\r\n		把样式添加到 HTML 4.0 中，是为了<span style=\"font-weight:bold;\">解决内容与表现分离的问题</span> \r\n	</li>\r\n	<li>\r\n		<span style=\"font-weight:bold;\">外部样式表</span>可以极大提高工作效率\r\n	</li>\r\n	<li>\r\n		外部样式表通常存储在&nbsp;<span style=\"font-weight:bold;\">CSS 文件</span>中\r\n	</li>\r\n	<li>\r\n		多个样式定义可<span style=\"font-weight:bold;\">层叠</span>为一\r\n	</li>\r\n</ul>\r\n<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	样式解决了一个普遍的问题\r\n</h2>\r\n<p>\r\n	HTML 标签原本被设计为用于定义文档内容。通过使用 &lt;h1&gt;、&lt;p&gt;、&lt;table&gt; 这样的标签，HTML 的初衷是表达“这是标题”、“这是段落”、“这是表格”之类的信息。同时文档布局由浏览器来完成，而不使用任何的格式化标签。\r\n</p>\r\n<p>\r\n	由于两种主要的浏览器（Netscape 和 Internet Explorer）不断地将新的 HTML 标签和属性（比如字体标签和颜色属性）添加到 HTML 规范中，创建文档内容清晰地独立于文档表现层的站点变得越来越困难。\r\n</p>\r\n<p>\r\n	为了解决这个问题，万维网联盟（W3C），这个非营利的标准化联盟，肩负起了 HTML 标准化的使命，并在 HTML 4.0 之外创造出样式（Style）。\r\n</p>\r\n<p>\r\n	所有的主流浏览器均支持层叠样式表。\r\n</p>\r\n<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	样式表极大地提高了工作效率\r\n</h2>\r\n<p>\r\n	样式表定义如何显示 HTML 元素，就像 HTML 3.2 的字体标签和颜色属性所起的作用那样。样式通常保存在外部的 .css 文件中。通过仅仅编辑一个简单的 CSS 文档，外部样式表使你有能力同时改变站点中所有页面的布局和外观。\r\n</p>\r\n<p>\r\n	由于允许同时控制多重页面的样式和布局，CSS 可以称得上 WEB 设计领域的一个突破。作为网站开发者，你能够为每个 HTML 元素定义样式，并将之应用于你希望的任意多的页面中。如需进行全局的更新，只需简单地改变样式，然后网站中的所有元素均会自动地更新。\r\n</p>\r\n<h2 style=\"font-family:微软雅黑;font-size:14px;\">\r\n	多重样式将层叠为一个\r\n</h2>\r\n<p>\r\n	样式表允许以多种方式规定样式信息。样式可以规定在单个的 HTML 元素中，在 HTML 页的头元素中，或在一个外部的 CSS 文件中。甚至可以在同一个 HTML 文档内部引用多个外部样式表。\r\n</p>\r\n<h3 style=\"font-size:12px;\">\r\n	层叠次序\r\n</h3>\r\n<p>\r\n	<span style=\"font-family:微软雅黑;font-size:14px;font-weight:800;\">当同一个 HTML 元素被不止一个样式定义时，会使用哪个样式呢？</span> \r\n</p>\r\n<p>\r\n	一般而言，所有的样式会根据下面的规则层叠于一个新的虚拟样式表中，其中数字 4 拥有最高的优先权。\r\n</p>\r\n<ol>\r\n	<li>\r\n		浏览器缺省设置\r\n	</li>\r\n	<li>\r\n		外部样式表\r\n	</li>\r\n	<li>\r\n		内部样式表（位于 &lt;head&gt; 标签内部）\r\n	</li>\r\n	<li>\r\n		内联样式（在 HTML 元素内部）\r\n	</li>\r\n</ol>\r\n<p>\r\n	因此，内联样式（在 HTML 元素内部）拥有最高的优先权，这意味着它将优先于以下的样式声明：&lt;head&gt; 标签中的样式声明，外部样式表中的样式声明，或者浏览器中的样式声明（缺省值）。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,2),(28,'青春的比喻','优秀作品','图像设计','lin','2016-05-13 21:23:27',0,'（测试的内容）','2016050519532344689.jpg',1,2),(29,'青春本应快乐','优秀作品','图像设计','lin','2016-05-13 21:25:24',0,'（范例的内容）','2016050520130086258.jpg',1,1),(30,'读空气-胡中天','优秀作品','视频','lin','2016-05-12 22:59:30',0,'<p>动画作品读空气是胡中天学长的重要作品，该作品紧扣环保题材，主题鲜明，画风绮丽，画面精美，是难得的精品之作。</>\r\n<div id=\"FlashFile\"> \r\n <object type=\"application/x-shockwave-flash\" width=\"720px\" height=\"420px\" \r\n data=\"video/player.swf?file=动画-读空气(15年国赛一等奖).mp4\"> \r\n <param name=\"movie\" value=\"video/player.swf?file=动画-读空气(15年国赛一等奖).mp4&showfsbutton=true&autostart=true\" /> \r\n <param name=\"wmode\" value=\"transparent\" /> \r\n <param name=\"quality\" value=\"high\" /> \r\n <param name=\"allowfullscreen\" value=\"true\" /> \r\n </object> \r\n </div> \r\n<p>获得荣誉：</p>\r\n<p>2015年第八届全国大学生计算机设计大赛参赛作品，获全国一等奖。</p>','2016050714243679631.png',1,10),(33,'js初学介绍','学习园地','web开发','huhao0829','2016-05-07 20:57:44',0,'<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	<strong>JavaScript 是世界上最流行的编程语言。</strong> \r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	<strong>这门语言可用于 HTML 和 web，更可广泛用于服务器、PC、笔记本电脑、平板电脑和智能手机等设备。</strong> \r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	JavaScript 是脚本语言\r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	JavaScript 是一种轻量级的编程语言。\r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	JavaScript 是可插入 HTML 页面的编程代码。\r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	JavaScript 插入 HTML 页面后，可由所有的现代浏览器执行。\r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	JavaScript 很容易学习。\r\n</p>\r\n<p style=\"text-align:left;color:#000000;text-indent:0px;\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:#FF4400;\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,1),(34,'Java入门','学习园地','编程语言','Harry','2016-05-07 14:17:49',0,'<p>\r\n	<a href=\"http://baike.baidu.com/subview/29/12654100.htm\" target=\"_blank\">Java</a><span style=\"color:#333333;\">是由</span><a href=\"http://baike.baidu.com/view/1061350.htm\" target=\"_blank\">Sun Microsystems</a><span style=\"color:#333333;\">公司推出的Java面向对象程序设计语言（以下简称Java语言）和Java平台的总称。由</span><a href=\"http://baike.baidu.com/view/974364.htm\" target=\"_blank\">James Gosling</a><span style=\"color:#333333;\">和同事们共同研发，并在1995年正式推出。Java最初被称为</span><a href=\"http://baike.baidu.com/view/180796.htm\" target=\"_blank\">Oak</a><span style=\"color:#333333;\">，是1991年为消费类电子产品的嵌入式芯片而设计的。1995年更名为Java，并重新设计用于开发</span><a href=\"http://baike.baidu.com/view/11165.htm\" target=\"_blank\">Internet</a><span style=\"color:#333333;\">应用程序。用Java实现的</span><a href=\"http://baike.baidu.com/view/209644.htm\" target=\"_blank\">HotJava浏览器</a><span style=\"color:#333333;\">（支持Java applet）显示了Java的魅力：</span><a href=\"http://baike.baidu.com/view/469855.htm\" target=\"_blank\">跨平台</a><span style=\"color:#333333;\">、动态Web、Internet计算。从此，Java被广泛接受并推动了Web的迅速发展，常用的浏览器均支持</span><a href=\"http://baike.baidu.com/view/533192.htm\" target=\"_blank\">Javaapplet</a><span style=\"color:#333333;\">。另一方面，Java技术也不断更新。Java自面世后就非常流行，发展迅速，对</span><a href=\"http://baike.baidu.com/view/824.htm\" target=\"_blank\">C++</a><span style=\"color:#333333;\">语言形成有力冲击。在全球</span><a href=\"http://baike.baidu.com/view/1316082.htm\" target=\"_blank\">云计算</a><span style=\"color:#333333;\">和</span><a href=\"http://baike.baidu.com/view/1168245.htm\" target=\"_blank\">移动互联网</a><span style=\"color:#333333;\">的产业环境下，Java更具备了显著优势和广阔前景。2010年</span><a href=\"http://baike.baidu.com/view/15020.htm\" target=\"_blank\">Oracle</a><span style=\"color:#333333;\">公司收购</span><a href=\"http://baike.baidu.com/view/1061350.htm\" target=\"_blank\">Sun Microsystems</a><span style=\"color:#333333;\">。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:#FF4400;\">慕课网 学习链接</span></a> \r\n</p>','2016050714174967252.jpg',1,0),(35,'MVC模式下竹制品互动平台的设计与开发','优秀作品','论文','lin','2016-05-13 01:08:30',0,'<img src=\"/editor/attached/image/20160505/20160505204220_68666.png\" alt=\"\" width=\"800\" height=\"1136\" title=\"\" align=\"\" />','2016050520422843348.png',1,0),(36,'C#入门','学习园地','编程语言','Harry','2016-05-07 13:56:42',0,'<div class=\"para\" style=\"color:#333333;\">\r\n	C#是<a href=\"http://baike.baidu.com/view/39784.htm\" target=\"_blank\">微软公司</a>发布的一种面向对象的、运行于<a href=\"http://baike.baidu.com/view/18370.htm\" target=\"_blank\">.NET Framework</a>之上的高级程序设计语言。并定于在微软职业开发者论坛(PDC)上登台亮相。C#是微软公司研究员Anders Hejlsberg的最新成果。C#看起来与Java有着惊人的相似；它包括了诸如单一继承、接口、与Java几乎同样的语法和编译成中间代码再运行的过程。但是C#与Java有着明显的不同，它借鉴了Delphi的一个特点，与COM（组件对象模型）是直接集成的，而且它是微软公司 .NET windows网络框架的主角。\r\n</div>\r\n<div class=\"para\" style=\"color:#333333;\">\r\n	C#是一种安全的、稳定的、简单的、优雅的，由C和<a href=\"http://baike.baidu.com/view/824.htm\" target=\"_blank\">C++</a>衍生出来的<a href=\"http://baike.baidu.com/view/125370.htm\" target=\"_blank\">面向对象</a>的编程语言。它在继承C和C++强大功能的同时去掉了一些它们的复杂特性（例如没有<a href=\"http://baike.baidu.com/view/57.htm\" target=\"_blank\">宏</a>以及不允许多重继承）。C#综合了<a href=\"http://baike.baidu.com/view/3063.htm\" target=\"_blank\">VB</a>简单的可视化操作和C++的高运行效率，以其强大的操作能力、优雅的语法风格、创新的语言特性和便捷的面向<a href=\"http://baike.baidu.com/view/379950.htm\" target=\"_blank\">组件</a>编程的支持成为<a href=\"http://baike.baidu.com/view/4294.htm\" target=\"_blank\">.NET</a>开发的首选语言。<sup>[1]</sup><a name=\"ref_[1]_6590\"></a>&nbsp;\r\n</div>\r\n<div class=\"para\" style=\"color:#333333;\">\r\n	C#是<a href=\"http://baike.baidu.com/view/125370.htm\" target=\"_blank\">面向对象</a>的编程语言。它使得程序员可以快速地编写各种基于MICROSOFT .NET平台的应用程序，MICROSOFT .NET提供了一系列的<a href=\"http://baike.baidu.com/view/74746.htm\" target=\"_blank\">工具</a>和服务来最大程度地开发利用计算与通讯领域。\r\n</div>\r\n<p style=\"color:#333333;\">\r\n	C#使得C++程序员可以高效的开发程序，且因可调用由 C/C++ 编写的本机原生函数，因此绝不损失C/C++原有的强大的功能。因为这种<a href=\"http://baike.baidu.com/view/125322.htm\" target=\"_blank\">继承</a>关系，C#与C/C++具有极大的相似性，熟悉类似语言的开发者可以很快的转向C#。\r\n</p>\r\n<p style=\"color:#333333;\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,1),(37,'3ds max介绍','学习园地','多媒体设计','Harry','2016-05-07 13:57:00',0,'<p>\r\n	<a href=\"http://baike.baidu.com/view/1783999.htm\" target=\"_blank\">3D Studio Max</a><span style=\"color:#333333;\">，常简称为</span><a href=\"http://baike.baidu.com/view/23805.htm\" target=\"_blank\">3d Max</a><sup>[1]</sup><a name=\"ref_[1]_11137\"></a>&nbsp;<span style=\"color:#333333;\"><span class=\"Apple-converted-space\">&nbsp;</span>或3ds MAX，是</span><a href=\"http://baike.baidu.com/view/285653.htm\" target=\"_blank\">Discreet</a><span style=\"color:#333333;\">公司开发的（后被</span><a href=\"http://baike.baidu.com/view/191386.htm\" target=\"_blank\">Autodesk</a><span style=\"color:#333333;\">公司合并）基于PC系统的</span><a href=\"http://baike.baidu.com/view/87262.htm\" target=\"_blank\">三维动画</a><span style=\"color:#333333;\">渲染和制作软件。其前身是基于</span><a href=\"http://baike.baidu.com/subview/365/7971327.htm\" target=\"_blank\">DOS</a><span style=\"color:#333333;\">操作系统的3D Studio系列软件。在</span><a href=\"http://baike.baidu.com/view/41346.htm\" target=\"_blank\">Windows NT</a><span style=\"color:#333333;\">出现以前，工业级的</span><a href=\"http://baike.baidu.com/subview/4406/8281902.htm\" target=\"_blank\">CG</a><span style=\"color:#333333;\">制作被</span><a href=\"http://baike.baidu.com/subview/552608/16478046.htm\" target=\"_blank\">SGI</a><span style=\"color:#333333;\">图形工作站所垄断。3D Studio Max + Windows NT组合的出现一下子降低了CG制作的门槛，首先开始运用在电脑游戏中的动画制作，后更进一步开始参与影视片的特效制作，例如X战警II，最后的武士等。在Discreet 3Ds max 7后，正式更名为Autodesk 3ds Max 最新版本是3ds max 2017。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,0),(38,'Autodesk Maya介绍','学习园地','多媒体设计','huhao0829','2016-05-05 21:54:36',0,'<div class=\"para\" style=\"color:#333333;\">\r\n	Autodesk Maya是美国<a href=\"http://baike.baidu.com/view/285717.htm\" target=\"_blank\">Autodesk公司</a>出品的世界顶级的<a href=\"http://baike.baidu.com/view/87262.htm\" target=\"_blank\">三维动画</a>软件，应用对象是专业的影视广告，角色动画，电影特技等。Maya功能完善，工作灵活，易学易用，制作效率极高，<a href=\"http://baike.baidu.com/view/49219.htm\" target=\"_blank\">渲染</a>真实感极强，是电影级别的高端制作软件.\r\n</div>\r\n<div class=\"para\" style=\"color:#333333;\">\r\n	Maya售价高昂，声名显赫，是制作者梦寐以求的制作工具，掌握了Maya，会极大的提高制作效率和品质，调节出仿真的角色动画，渲染出电影一般的真实效果，向世界顶级<a href=\"http://baike.baidu.com/view/1972776.htm\" target=\"_blank\">动画师</a>迈进。\r\n</div>\r\n<div class=\"para\" style=\"color:#333333;\">\r\n	Maya 集成了<a href=\"http://baike.baidu.com/view/49616.htm\" target=\"_blank\">Alias</a>、Wavefront 最先进的动画及数字效果技术。它不仅包括一般<a href=\"http://baike.baidu.com/view/530652.htm\" target=\"_blank\">三维</a>和视觉效果制作的功能，而且还与最先进的建模、数字化布料模拟、毛发渲染、运动匹配技术相结合。Maya 可在<a href=\"http://baike.baidu.com/view/41346.htm\" target=\"_blank\">Windows NT</a>与 SGI IRIX 操作系统上运行。在目前市场上用来进行数字和三维制作的工具中，Maya 是首选解决方案。\r\n</div>',NULL,0,0),(39,'博客园','学习园地','学习网站推荐','Harry','2016-05-07 21:11:31',0,'<p>\r\n	<span style=\"color:#000000;font-size:14px;\"><strong>博客园创立于2004年1月，是一个面向开发者的知识分享社区。自创建以来，博客园一直致力并专注于为开发者打造一个纯净的技术交流社区，推动并帮助开发者通过互联网分享知识，从而让更多开发者从中受益。博客园的使命是帮助开发者用代码改变世界。</strong></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#454545;background-color:#FFFFFF;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#454545;background-color:#FFFFFF;\"><img src=\"/editor/attached/image/20160505/20160505211433_22299.jpg\" alt=\"\" width=\"750\" height=\"390\" title=\"\" align=\"\" /><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.cnblogs.com/\"><span style=\"color:#FF4400;\">博客园 学习链接</span></a> \r\n</p>',NULL,0,0),(40,'基于Web的竹工艺品设计交流平台构建','优秀作品','论文','lin','2016-05-08 10:54:34',0,'<img src=\"/editor/php/../attached/image/20160505/20160505205226_22384.png\" alt=\"\" width=\"800\" height=\"1058\" title=\"\" align=\"\" /><img src=\"/editor/php/../attached/image/20160505/20160505205226_14268.png\" alt=\"\" width=\"800\" height=\"1070\" title=\"\" align=\"\" />','2016050520525183037.png',1,0),(41,'慕课网','学习园地','学习网站推荐','Harry','2016-05-07 14:03:31',0,'<strong><span style=\"font-size:14px;\">什么是慕课（MOOC）源于国外，Massive（大规模）Open（开放）Online（在线）Course（课程）。慕课网是什么MOOC专注做好IT技能教育的MOOC，符合互联网发展潮流接地气儿的MOOC。我们免费，我们只教有用的，我们专心做教育。为什么做慕课网慕课网的小伙伴希望所有热爱互联网的同学能更加便捷的获取学习资源，用互联网思维改变我们的学习。</span></strong><br />\r\n<p>\r\n	<strong><span style=\"font-size:14px;\"> 我们提供最新的知识，帮你应对变化的世界！慕课网在做什么做更多实用的课程，做更好体验的产品，研究更牛的技术！慕课网的追求是什么让更多热爱互联网的同学来慕课网学习，多年以后，圈子里一批技术牛说：我在慕课网学习过，这就够了。</span></strong> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/editor/attached/image/20160505/20160505211804_21192.jpg\" alt=\"\" width=\"750\" height=\"392\" title=\"\" align=\"\" /> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:#FF4400;\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,0),(42,'php入门','学习园地','编程语言','Harry','2016-05-07 13:55:52',0,'<p>\r\n	<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">PHP（外文名:PHP: Hypertext Preprocessor，中文名：“</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/156868.htm\">超文本</a><a target=\"_blank\" href=\"http://baike.baidu.com/view/499651.htm\">预处理器</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">”）是一种通用</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/9664.htm\">开源</a><a target=\"_blank\" href=\"http://baike.baidu.com/view/76320.htm\">脚本语言</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">。</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/135635.htm\">语法</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">吸收了</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/1219.htm\">C语言</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">、</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/29.htm\">Java</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">和</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/46614.htm\">Perl</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">的特点，利于学习，使用</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/344354.htm\">广泛</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">，主要适用于</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/3912.htm\">Web</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">开发领域。PHP 独特的</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/135635.htm\">语法</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">混合了</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/10075.htm\">C</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">、</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/29.htm\">Java</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">、</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/46614.htm\">Perl</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">以及</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/99.htm\">PHP</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">自创的语法。它可以比</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/32614.htm\">CGI</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">或者</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/46614.htm\">Perl</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">更快速地执行</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/348756.htm\">动态网页</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">。用PHP做出的</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/2065821.htm\">动态页面</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">与其他的</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/552871.htm\">编程语言</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">相比，</span><a target=\"_blank\" href=\"http://baike.baidu.com/subview/99/5828265.htm\">PHP</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">是将</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/17674.htm\">程序</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">嵌入到</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/692.htm\">HTML</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">（</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/5286041.htm\">标准通用标记语言</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">下的一个应用）文档中去执行，执行效率比完全生成</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/692.htm\">HTML</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">标记的</span><a target=\"_blank\" href=\"http://baike.baidu.com/subview/32614/12037322.htm\">CGI</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">要高许多；PHP还可以执行</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/69568.htm\">编译</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">后代码，编译可以达到</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/40927.htm\">加密</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">和</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/548.htm\">优化</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">代码运行，使代码运行更快。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,0),(43,'Flash','学习园地','多媒体设计','Harry','2016-05-07 13:55:42',0,'<p>\r\n	<a target=\"_blank\" href=\"http://baike.baidu.com/subview/7641/8049892.htm\">Flash</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">是由</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/8375.htm\">macromedia</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">公司推出的交互式矢量图和 Web 动画的标准，由</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/7578.htm\">Adobe</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">公司收购。做Flash动画的人被称之为闪客。网页设计者使用 Flash 创作出既漂亮又可改变尺寸的导航界面以及其他奇特的效果。Flash的前身是Future Wave公司的Future Splash，是世界上第一个商用的二维矢量动画软件，用于设计和编辑Flash文档。1996年11月，美国</span><a target=\"_blank\" href=\"http://baike.baidu.com/view/8375.htm\">Macromedia</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\">公司收购了Future Wave，并将其改名为Flash。后又于2005年12月3日被Adobe公司收购。Flash通常也指Macromedia Flash Player（现Adobe Flash Player）。2012年8月15日，Flash退出Android平台，正式告别移动端。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>如果您想进一步学习：</strong></span> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.w3school.com.cn/html/index.asp\"><span style=\"color:#FF4400;\">w3school 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/volumes\"><span style=\"color:#FF4400;\">萌码 学习链接</span></a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.imooc.com/view/9\"><span style=\"color:rgb(255,68,0)\">慕课网 学习链接</span></a> \r\n</p>',NULL,0,0),(44,'范例软件','优秀作品','软件','lin','2016-05-13 21:26:14',0,'（范例的内容）','2016050714274137647.png',1,0),(45,'萌码','学习园地','学习网站推荐','Harry','2016-05-07 14:14:31',0,'<p>\r\n	<span style=\"font-size:14px;\"><strong>萌码网是国内领先的计算教育服务平台。独创的互动式教学模式，让学生学习编程的过程更有趣，更高效。 我们笃定计算教育在未来将会是一种通识教育。在衣食住行都被网络化的如今，人机之间的交流时间甚至要远远多于人与人的交流时间。我们日常所浏览的所有网站、使用的软件乃至操作系统，都是由程序编写而成，编程作为唯一能使人与计算机进行交流的工具，已经变得越来越重要，而学习编程的人也日渐增多。就连美国总统奥巴马都曾在视频中呼吁：美国的孩子除了玩游戏，还应该具备如何做游戏的能力。</strong></span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/editor/attached/image/20160507/20160507141138_49597.jpg\" alt=\"\" width=\"750\" height=\"505\" title=\"\" align=\"\" /> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.mengma.com/\"><span style=\"color:#FF4400;\">慕课网 学习链接</span></a> \r\n</p>','2016050714110740844.jpg',1,0),(46,'CMAIT团队风采--“机器人库”团队','优秀作品','移动应用','Harry','2016-05-07 15:35:19',0,'',NULL,0,0),(47,'Feeling！向看脸的世界宣战！','优秀作品','移动应用','Harry','2016-05-07 15:41:48',0,'',NULL,0,1),(48,'“窥客团队”风采','优秀作品','移动应用','Harry','2016-05-07 15:41:22',0,'',NULL,0,13),(49,'平面-日行百步','优秀作品','图像设计','lin','2016-05-13 21:24:11',0,'(测试的内容）','2016050715445153088.jpg',1,3),(50,'BlueZone','优秀作品','网站','Harry','2016-05-07 15:50:23',0,'','2016050715502387574.jpg',0,0),(51,'爱在春天里','优秀作品','视频','lin','2016-05-13 21:49:03',0,'<div id=\"FlashFile\"> \r\n <object type=\"application/x-shockwave-flash\" width=\"720px\" height=\"540px\" \r\n data=\"video/player.swf?file=爱在春天里2.mp4\"> \r\n <param name=\"movie\" value=\"video/player.swf?file=爱在春天里2.mp4&showfsbutton=true&autostart=true\" /> \r\n <param name=\"wmode\" value=\"transparent\" /> \r\n <param name=\"quality\" value=\"high\" /> \r\n <param name=\"allowfullscreen\" value=\"true\" /> \r\n </object> \r\n </div> \r\n</br>\r\n<p>\r\n本片是关于最美大学生“徐建龙”，当他走在路边，看见跳水轻生的女生，不假思索的跳入冰冷的河水中，作为大学生的模范，面对社会的舆论和追捧，他没有沉沦其中，而是当自己能力变大的时候，想到了帮助更多的人，帮助云南大山的孩子们。\r\n身边的好人，平凡的感动，让我们一起被温暖传递，人人都是一束光。\r\n</p>',NULL,0,0),(52,'日货风波','优秀作品','视频','lin','2016-05-13 21:43:49',0,'<div id=\"FlashFile\"> \r\n <object type=\"application/x-shockwave-flash\" width=\"720px\" height=\"540px\" \r\n data=\"video/player.swf?file=日货风波.mp4\"> \r\n <param name=\"movie\" value=\"video/player.swf?file=日货风波.mp4&showfsbutton=true&autostart=true\" /> \r\n <param name=\"wmode\" value=\"transparent\" /> \r\n <param name=\"quality\" value=\"high\" /> \r\n <param name=\"allowfullscreen\" value=\"true\" /> \r\n </object> \r\n </div> \r\n<p>\r\n本片拍摄于2005年，十一年前我校学长们就已经用敏锐度眼神捕捉到现今仍然尖锐的关于“抵制日货”的社会问题，片中，我们的学长演绎了从一开始的义愤填膺的盲目封杀自己的日货，甚至加入了示威游行的行列中，但是我们的学长们很快发现了自己思想上的问题，在一位机智学姐的教导下终于找到了正确对待“日货”的思想态度。我们不应该盲目跟风，作为社会中思想最为先进大学生，我们应该理性对待社会上的尖锐问题，绝不能一位跟风，被一时的不良风气所煽动。\r\n</p>\r\n\r\n<img src=\"img/rhfb1.jpg\" width=\"720\" height=\"540\">\r\n<img src=\"img/rhfb2.jpg\" width=\"720\" height=\"540\">\r\n<img src=\"img/rhfb3.jpg\" width=\"720\" height=\"540\">\r\n<img src=\"img/rhfb4.jpg\" width=\"720\" height=\"540\">',NULL,0,0);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL,
  `author` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `article` text NOT NULL,
  `dianzan` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,20,'lin','2016-05-07 18:36:26','这篇文章可真棒！！',2),(2,30,'Harry','2016-05-07 19:07:31','好厉害，这个学长是技术大牛诶！向他学习！求QQ，我要给他生猴子！！！',23),(16,20,'lin','2016-05-07 18:57:19','哈哈',1),(22,20,'huhao0829','2016-05-07 19:07:13','这是哪里，好想去看看',1),(25,28,'Harry','2016-05-07 19:33:37','很漂亮呢，求学姐分享经验，做这样的海报有哪些流程呢？应该学习那些东西呢？没有会绘画基础但是很想学，可以吗？',2),(26,29,'Harry','2016-05-07 19:35:32','很有设计感，令人深思，人类应该更加尊重身边的动物们，人与自然应该和谐平等相处，不应该妄想掌控大自然，应该是以一种尊重敬畏的态度去对待身边的可爱动物们。',0),(27,49,'Harry','2016-05-07 19:36:53','日行一步，我们都应该运动起来！！！设计也很有特点。',1),(28,44,'Harry','2016-05-07 19:39:24','好Q啊，好萌啊！！！我也很想做游戏，想知道应该从什么开始学呢？想完成这样一个游戏，需要哪些技术呢？',4),(29,20,'Harry','2016-05-07 19:49:17','哇~好棒的地方，没想到我们学院还有这么NB的地方，马上放下游戏去看看！这么棒的地方，我还玩什么游戏啊！滚去学习了！',4),(30,19,'Harry','2016-05-07 20:01:35','加油！科院的同学都是棒棒的！实力碾压！！！',0),(31,16,'Harry','2016-05-07 20:02:30','(*@ο@*) 哇～好帅！好美！我要弯了！',1),(32,17,'Harry','2016-05-07 20:04:12','向你们学习！我也要加入蓝色空间！我不要再玩游戏了！',1),(33,18,'Harry','2016-05-07 20:06:21','哈哈哈，好憨的院长啊，院长亲自指导，好亲民，下次我也要去聆听院长的交流会！',0),(34,33,'Harry','2016-05-07 20:09:07','JS好难啊，跪求学霸指导一下！那个萌码好棒！强力推荐初学者！',0),(35,45,'Harry','2016-05-07 20:10:46','萌码好棒的！初学者最适合！！!',0),(36,20,'huhao0829','2016-05-07 20:53:31','复活甲',1),(37,17,'Harry','2016-05-07 21:23:06','好帅！给你们生猴子！！！',1),(38,28,'lin','2016-05-08 10:21:54','这个作品可真棒！',0),(39,30,'lin','2016-05-08 11:27:36','这个作品可真棒！',3),(40,33,'lin','2016-05-08 13:59:04','kj',1);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `focuspic`
--

DROP TABLE IF EXISTS `focuspic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `focuspic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `link` text NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `focuspic`
--

LOCK TABLES `focuspic` WRITE;
/*!40000 ALTER TABLE `focuspic` DISABLE KEYS */;
INSERT INTO `focuspic` VALUES (8,'谁说IT没帅哥靓女！','article.php?id=16','2016050220405755697.jpg'),(15,'热烈祝贺我校同学在第8届计算机设计大赛中获奖','article.php?id=2','2016050220501728712.jpg'),(16,'蓝色空间成立啦！','article.php?id=17','2016050220513473454.jpg');
/*!40000 ALTER TABLE `focuspic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_type_name`
--

DROP TABLE IF EXISTS `index_type_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_type_name` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `main_type` varchar(60) NOT NULL,
  `subtype` varchar(60) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_type_name`
--

LOCK TABLES `index_type_name` WRITE;
/*!40000 ALTER TABLE `index_type_name` DISABLE KEYS */;
INSERT INTO `index_type_name` VALUES (2,'优秀作品','移动应用'),(3,'优秀作品','视频'),(4,'优秀作品','网站'),(5,'优秀作品','软件'),(6,'优秀作品','论文'),(7,'蓝色动态','蓝色动态'),(8,'公告','公告'),(9,'学习园地','web开发'),(10,'学习园地','编程语言'),(11,'学习园地','多媒体设计'),(12,'学习园地','学习网站推荐'),(13,'优秀作品','图像设计');
/*!40000 ALTER TABLE `index_type_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notice` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `datee` datetime DEFAULT NULL,
  `article` tinytext,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num_UNIQUE` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (1,'thefirst','ME','2016-02-02 00:29:00','hahha');
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext,
  `article` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suggestion`
--

LOCK TABLES `suggestion` WRITE;
/*!40000 ALTER TABLE `suggestion` DISABLE KEYS */;
INSERT INTO `suggestion` VALUES (1,'em','efwji'),(2,'wefe','dfewf'),(3,'wefe','dfewf'),(4,'wefe','dfewf'),(5,'asdf','dfd'),(6,'asdf','dfd'),(7,'wegtreg','brdsvfdvfdv'),(8,'wegtreg','brdsvfdvfdv'),(9,'asdff','dsvfvf'),(10,'15868139850','非常棒！！！');
/*!40000 ALTER TABLE `suggestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `begintime` datetime NOT NULL,
  `duration` time NOT NULL,
  `place` varchar(90) NOT NULL,
  `info` text,
  `image` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timetable`
--

LOCK TABLES `timetable` WRITE;
/*!40000 ALTER TABLE `timetable` DISABLE KEYS */;
INSERT INTO `timetable` VALUES (7,'院长交流会','2016-05-09 18:00:00','21:30:00','蓝色空间','','act2016051122230314248.jpg'),(9,'全体竞赛成员交流会','2016-05-20 18:30:00','21:30:00','蓝色空间','15级大一电子信息大类专业参加各项竞赛的一起来交流一下平时的经验',NULL),(10,'网页制作经验研讨会','2016-05-25 18:30:00','21:30:00','蓝色空间','参加“网页制作”竞赛项目的同学一起来交流一下平时的感受，互相学习',NULL),(11,'学长经验分享会','2016-05-15 18:00:00','21:30:00','蓝色空间','欢迎光临！',NULL);
/*!40000 ALTER TABLE `timetable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) NOT NULL,
  `password` varchar(60) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `ifadmin` int(11) NOT NULL DEFAULT '0',
  `tempsession` int(11) DEFAULT NULL,
  `lasttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` tinytext,
  `self_intro` text,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='rank-0:common user;\nrank-1:advanced user.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'lin','0192023a7bbd73250516f069df18b500',1,1,12996520,'2016-05-13 15:21:02','11','Van!shment \" \"this website!'),(2,'测试者','e10adc3949ba59abbe56e057f20f883e',0,0,34296264,'2016-04-03 05:05:47','email@qq.com','一个测试者的自我介绍'),(3,'测试者3','4297f44b13955235245b2497399d7a93',0,0,16113891,'2016-04-03 05:20:56','111@qq.com',NULL),(4,'测试者2','e10adc3949ba59abbe56e057f20f883e',0,0,44711303,'2016-04-03 07:22:41','111@qq.com',NULL),(5,'测试者4','e10adc3949ba59abbe56e057f20f883e',0,0,83394165,'2016-04-08 12:43:57','111@qq.com','僧法国'),(6,'白井黑子','75e266f182b4fa3625d4a4f4f779af54',0,0,58630981,'2016-04-30 14:49:28','222@railgun.com',NULL),(7,'Harry','6418160cd493c9b59f581d19d90a41e1',1,1,11010742,'2016-05-12 13:21:59','810182434@qq.com','我要当管理员哈哈哈'),(8,'tester','e10adc3949ba59abbe56e057f20f883e',0,0,56463928,'2016-05-02 10:28:28','12233@mkkk','1234'),(9,'huhao0829','3594b18544f13dcf5eef30c576ad6001',1,1,22359619,'2016-05-11 13:02:07','819473021@qq.com','hhh'),(10,'姚一城','8a3d4f8a87cf247bd719adff71362be9',0,0,99255676,'2016-05-07 11:27:36','82415327@qq.com',NULL);
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bluezone'
--

--
-- Dumping routines for database 'bluezone'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-13 23:23:40
