<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl`;");
E_C("CREATE TABLE `phome_enewspl` (
  `plid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `sayip` varchar(20) NOT NULL DEFAULT '',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(11) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `zcnum` smallint(6) NOT NULL DEFAULT '0',
  `fdnum` smallint(6) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `stb` varchar(6) NOT NULL DEFAULT '',
  `anscount` int(11) NOT NULL DEFAULT '1',
  `replyid` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspl` values('8','','124.200.241.15','2011-05-30 11:12:22','160','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('116','','219.145.91.158','2012-01-12 17:32:36','180','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('118','','221.206.118.100','2012-01-14 09:03:42','418','0','2','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('119','','221.206.106.69','2012-02-20 09:04:07','179','0','3','1','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('120','','218.5.46.144','2012-03-03 18:15:54','181','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('121','','218.5.46.144','2012-03-03 18:16:43','181','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('122','','218.5.46.144','2012-03-03 20:57:05','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('123','','218.5.46.144','2012-03-03 20:58:38','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('124','','218.5.46.144','2012-03-03 21:26:36','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('125','','218.5.46.144','2012-03-03 21:35:34','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('126','','218.5.46.144','2012-03-03 21:47:44','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('127','','218.5.46.144','2012-03-03 23:43:25','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('128','','218.5.46.144','2012-03-03 23:50:39','182','0','3','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('129','','218.5.46.144','2012-03-04 00:02:14','182','0','3','2','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('130','','218.5.46.144','2012-03-07 07:48:22','431','0','2','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('131','','218.5.46.144','2012-03-07 11:38:45','431','0','2','0','0','0','0','1','2','130');");
E_D("replace into `phome_enewspl` values('132','','218.5.46.144','2012-03-07 23:34:22','431','0','2','0','0','0','0','1','2','131');");
E_D("replace into `phome_enewspl` values('133','','218.5.46.144','2012-03-08 00:59:13','431','0','2','0','0','0','0','1','3','130,131');");
E_D("replace into `phome_enewspl` values('134','','218.5.46.144','2012-03-08 01:19:23','431','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('135','','218.5.46.144','2012-03-08 07:52:12','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('136','','218.5.46.144','2012-03-08 07:53:53','277','0','2','0','0','0','0','1','2','135');");
E_D("replace into `phome_enewspl` values('137','','218.5.46.144','2012-03-08 08:12:30','277','0','2','0','0','0','0','1','3','135,136');");
E_D("replace into `phome_enewspl` values('138','','218.5.46.144','2012-03-08 09:20:49','277','0','2','0','0','0','0','1','4','135,136,137');");
E_D("replace into `phome_enewspl` values('139','','218.5.46.144','2012-03-08 09:21:16','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('140','','218.5.46.144','2012-03-08 09:22:50','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('141','','218.5.46.144','2012-03-08 09:28:02','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('142','','218.5.46.144','2012-03-08 09:29:22','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('143','','218.5.46.144','2012-03-08 09:30:11','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('144','','218.5.46.144','2012-03-08 09:31:42','277','0','2','0','0','0','0','1','5','135,136,137,138');");
E_D("replace into `phome_enewspl` values('145','','110.83.30.151','2012-04-09 00:48:07','277','0','2','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('146','','110.83.30.151','2012-04-09 00:53:20','277','0','2','0','0','0','0','1','2','145');");
E_D("replace into `phome_enewspl` values('147','','120.36.31.240','2012-06-11 11:20:12','197','0','189','0','0','0','0','1','1','0');");
E_D("replace into `phome_enewspl` values('152','','221.206.117.184','2012-07-26 13:03:23','174','0','189','0','0','0','0','1','1','');");
E_D("replace into `phome_enewspl` values('153','','221.206.117.184','2012-07-26 13:58:49','174','0','189','0','0','0','0','1','1','');");

@include("../../inc/footer.php");
?>