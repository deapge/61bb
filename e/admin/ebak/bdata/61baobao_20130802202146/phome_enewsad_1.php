<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsad`;");
E_C("CREATE TABLE `phome_enewsad` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(11) NOT NULL DEFAULT '0',
  `pic_height` int(11) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `adtype` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` text NOT NULL,
  `titlefont` varchar(255) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(4) NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsad` values('1','','','960','90','0','1','1','介绍页右侧250x250','','','2011-05-13','2015-06-12','介绍页右侧250x250','','','<script type=\"text/javascript\">\r\nalimama_pid=\"mm_15386456_2296953_10892645\";\r\nalimama_width=250;\r\nalimama_height=250;\r\n</script>\r\n<script src=\"http://a.alimama.cn/inf.js\" type=\"text/javascript\"></script>','2','0','介绍页右侧250x250');");
E_D("replace into `phome_enewsad` values('2','','','468','60','0','1','1','顶部468','','','2011-05-16','2014-06-15','顶部468','','','<script type=\"text/javascript\">\r\n/*468*60，创建于2012-9-29*/\r\nvar cpro_id = \"u1077032\";\r\n</script>\r\n<script src=\"http://cpro.baidustatic.com/cpro/ui/c.js\" type=\"text/javascript\"></script>','2','0','顶部468');");
E_D("replace into `phome_enewsad` values('3','','','468','60','0','1','1','播放等待载入广告','','','2011-05-16','2015-06-15','播放等待载入广告','','','<script type=\"text/javascript\">\r\n/*360*300，创建于2012-9-29*/\r\nvar cpro_id = \"u1077030\";\r\n</script>\r\n<script src=\"http://cpro.baidustatic.com/cpro/ui/c.js\" type=\"text/javascript\"></script>','2','0','播放等待载入广告');");
E_D("replace into `phome_enewsad` values('4','','','468','60','0','1','1','960x60 通用','','','2011-05-21','2015-06-20','960x60 通用（广告位ID:4）','','','<script type=\"text/javascript\">\r\n/*960*90，创建于2012-9-29*/\r\nvar cpro_id = \"u1077027\";\r\n</script>\r\n<script src=\"http://cpro.baidustatic.com/cpro/ui/c.js\" type=\"text/javascript\"></script>','2','0','960x60 通用（广告位ID:4）');");
E_D("replace into `phome_enewsad` values('5','','','468','60','0','1','1','播放页相关游戏下方','','','2011-05-21','2015-06-20','播放页相关游戏下方','','','播放页相关游戏下方 (ID：5)','2','0','播放页相关游戏下方');");
E_D("replace into `phome_enewsad` values('6','','','468','60','0','1','1','播放页介绍下方','','','2011-05-21','2015-06-20','播放页介绍下方','','','播放页介绍下方 (广告位ID：6)','2','0','播放页介绍下方');");
E_D("replace into `phome_enewsad` values('7','','','468','60','0','1','1','介绍页通栏中','','','2011-05-21','2015-06-20','介绍页通栏中','','','介绍页通栏中(广告位ID：7)','2','0','介绍页通栏中');");
E_D("replace into `phome_enewsad` values('8','','','468','60','0','1','1','首页上通栏','','','2011-05-26','2011-06-25','首页上通栏','','','首页上通栏(广告位ID：8)','2','0','首页上通栏');");
E_D("replace into `phome_enewsad` values('9','','','468','60','0','1','1','下载页右侧','','','2011-06-09','2019-07-09','下载页右侧','','','(广告位ID：9)','2','0','下载页右侧');");
E_D("replace into `phome_enewsad` values('10','','','468','60','0','1','1','播放器右下文字广告','','','2011-06-09','2019-07-09','播放器右下文字广告','','','<a href=\"http://s.click.taobao.com/t_8?e=7HZ5x%2BOzc4P1H%2BiYx46IsrXnWiM%3D&p=mm_15386456_0_0\">咿依衣童装旗舰店</a>','2','0','播放器右下文字广告');");
E_D("replace into `phome_enewsad` values('11','http://2144-3.92game.net/gg/1054.gif','','160','600','2','1','1','网页游戏左侧','_parent','','2011-06-09','2011-07-09','网页游戏左侧','','','','0','0','网页游戏左侧');");
E_D("replace into `phome_enewsad` values('12','','','468','60','0','1','1','首页网页游戏','','','2011-06-11','2019-07-11','广告位过期','','','<dl  rightpic=\"rightpic\" name=\"彩色砖块\" show=\"1000132\" img=\"jpg\" score=\"8<em>.6</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000132.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://img.3366.com/fileupload/img/32/1000132_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000132.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">彩色砖块</a><span class=\"icon_No1\"><em id=\"scoreSpan1000132\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"最浪漫的舞蹈游戏\" show=\"1000082\" img=\"jpg\" score=\"8<em>.2</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000082.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a1.img.3366.com/fileupload/img/82/1000082_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000082.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">最浪漫的舞蹈游戏</a><span class=\"icon_No1\"><em id=\"scoreSpan1000082\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"麒麟神兽\" show=\"1000109\" img=\"jpg\" score=\"8<em>.8</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000109.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a2.img.3366.com/fileupload/img/9/1000109_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000109.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">麒麟神兽</a><span class=\"icon_No1\"><em id=\"scoreSpan1000109\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"台球\" show=\"1000177\" img=\"jpg\" score=\"8<em>.2</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000177.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a3.img.3366.com/fileupload/img/77/1000177_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000177.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">台球</a><span class=\"icon_No1\"><em id=\"scoreSpan1000177\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"大胖子跳水\" show=\"1000116\" img=\"jpg\" score=\"8<em>.3</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000116.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a4.img.3366.com/fileupload/img/16/1000116_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000116.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">大胖子跳水</a><span class=\"icon_No1\"><em id=\"scoreSpan1000116\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"飞天忍者猫\" show=\"1000168\" img=\"jpg\" score=\"9<em>.0</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000168.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://img.3366.com/fileupload/img/68/1000168_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000168.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">飞天忍者猫</a><span class=\"icon_No1\"><em id=\"scoreSpan1000168\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"十滴水\" show=\"1000154\" img=\"jpg\" score=\"8<em>.6</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000154.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a1.img.3366.com/fileupload/img/54/1000154_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000154.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">十滴水</a><span class=\"icon_No1\"><em id=\"scoreSpan1000154\"></em></span></dd>\r\n    </dl>\r\n	<dl  rightpic=\"rightpic\" name=\"兔子吃萝卜\" show=\"1000058\" img=\"jpg\" score=\"8<em>.5</em>\" spicy=\"10\">\r\n        <dt><a href=\"/game/1000058.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\"><img src=\"http://a2.img.3366.com/fileupload/img/58/1000058_80.jpg\"></a></dt>\r\n        <dd><a href=\"/game/1000058.shtml\"onclick=\"mgpPvStat(''stat.index.score.txt'');\">兔子吃萝卜</a><span class=\"icon_No1\"><em id=\"scoreSpan1000058\"></em></span></dd>\r\n    </dl>','2','0','广告位过期');");
E_D("replace into `phome_enewsad` values('13','','','980','60','0','1','1','tags_积分页上通栏','','','2011-08-26','2019-09-25','tags_积分页上通栏','','','tags_积分页上通栏(广告位ID：13)','2','0','tags_积分页上通栏');");
E_D("replace into `phome_enewsad` values('14','','','468','60','0','1','1','顶部横幅728','','','2012-01-12','2019-02-11','顶部横幅728','','','顶部横幅728 （ID：14）','2','0','顶部横幅728');");
E_D("replace into `phome_enewsad` values('15','','','468','60','0','1','1','250x250','','','2012-05-29','2019-06-28','播放页右侧250x250','','','<script type=\"text/javascript\"> \r\nalimama_pid=\"mm_15386456_2296953_10892645\"; \r\nalimama_width=250; \r\nalimama_height=250; \r\n</script> \r\n<script src=\"http://a.alimama.cn/inf.js\" type=\"text/javascript\"> \r\n</script>','2','0','播放页右侧250x250');");
E_D("replace into `phome_enewsad` values('16','','','468','60','0','1','1','播放页下方468_60','','','2012-06-16','2018-07-16','播放页下方468_60','','','<script type=\"text/javascript\">\r\n/*468*60，创建于2012-9-29*/\r\nvar cpro_id = \"u1077032\";\r\n</script>\r\n<script src=\"http://cpro.baidustatic.com/cpro/ui/c.js\" type=\"text/javascript\"></script>','2','0','播放页下方468_60');");
E_D("replace into `phome_enewsad` values('17','','','468','60','0','1','1','播放页下方500x200','','','2012-06-16','2019-07-16','播放页下方','','','<script type=\"text/javascript\">\r\n/*500*200，创建于2012-9-29*/\r\nvar cpro_id = \"u1077083\";\r\n</script>\r\n<script src=\"http://cpro.baidustatic.com/cpro/ui/c.js\" type=\"text/javascript\"></script>','2','0','播放页下方[广告位ID:17]');");

@include("../../inc/footer.php");
?>